<?php

namespace App\Http\Controllers;


use Image;
use App\Collection;
use App\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flowers = Flower::orderBy('id')->get();
      return view('admin.products.index')->withFlowers($flowers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $collections = Collection::all();
      return view('admin.products.create')->withCollections($collections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // validate the data
         $this->validate($request, array(
                 'name'         => 'required|max:255',
                 'slug'          => 'required|alpha_dash|min:5|max:255|unique:flowers,slug',
                 'dscr'          => 'required'
             ));
         // store in the database
         $flower = new Flower;
         $flower->name = $request->name;
         $flower->slug = $request->slug;
         $flower->stock = $request->stock;
         $flower->best = $request->best;
         $flower->new = $request->new;
         $flower->price1 = $request->price1;
         $flower->sale = $request->sale;
         $flower->dscr = $request->dscr;
         $flower->lgdscr = $request->lgdscr;
         if ($request->hasFile('image1')) {
           $image = $request->file('image1');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image1 = $filename;
         }

         $flower->save();

         $flower->collections()->sync($request->collections, false);

         return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $flower = Flower::find($id);
      $collections = Collection::all();
      return view('admin.products.show')->withFlower($flower)->withCollections($collections);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $flower = Flower::find($id);
        return view('admin.products.edit')->withFlower($flower);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     // store in the database
     $flower = Flower::find($id);
     $flower->name = $request->input('name');
     $flower->slug = $request->input('slug');
     $flower->stock = $request->input('stock');
     $flower->best = $request->input('best');
     $flower->new = $request->input('new');
     $flower->price1 = $request->input ('price1');
     $flower->sale = $request->input ('sale');
     $flower->dscr = $request->input ('dscr');
     $flower->lgdscr = $request->input ('lgdscr');




     if ($request->hasFile('image1')) {
       $image = $request->file('image1');
       $filename = time() . $image->getClientOriginalName();
       $location = public_path('images/product/' . $filename);
       Image::make($image)->resize(600, 800)->save($location);
       $flower->image1 = $filename;
     }

     $flower->save();
     if (isset($request->collections)) {
              $flower->collections()->sync($request->collections);
          } else {
              $flower->collections()->sync(array());
          }
      return redirect()->route('products.show', $flower->id);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        $flower->delete();
        return redirect()->route('products.index');
    }

    public function getSingle($slug) {
      $flower = Flower::where('slug', '=', $slug)->first();
      $related = Flower::whereHas('collections', function ($q) use ($flower) {
      return $q->whereIn('name', $flower->collections->pluck('name'));
      })
      ->where('id', '!=', $flower->id) // So you won't fetch same post
      ->get();
      $ratings = \willvincent\Rateable\Rating::take(10)->get();
      return view('product.single')->withFlower($flower)->withRatings($ratings)->withRelated($related);
    }

    public function postPost(Request $request)

    {
        request()->validate(['rate' => 'required']);

        $flower = Flower::find($request->id);

        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->comment = $request->comment;
        $rating->user_id = auth()->user()->id;

        $flower->ratings()->save($rating);

        return back();

    }


}
