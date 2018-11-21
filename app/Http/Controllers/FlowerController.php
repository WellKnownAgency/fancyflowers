<?php

namespace App\Http\Controllers;


use App\FlowerFLSize;
use App\FLSize;
use Image;
use App\Collection;
use App\Flower;
use Illuminate\Http\Request;
use Intervention\Image\Size;

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
      $sizes = FLSize::all();
      return view('admin.products.create', compact('collections', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sizes = FLSize::all();
        // validate rules prices
        $prices_rules = [];
        foreach ($sizes as $size) {
            $prices_rules[] = 'prices.' . $size->name = 'required|regex:/^\d*(\.\d{1,2})?$/';
        }

          // validate the data
         $this->validate($request, array_merge([
                 'name'         => 'required|max:255',
                 'slug'          => 'required|alpha_dash|min:1|max:255|unique:flowers,slug',
                 'dscr'          => 'required',
                 'image1'          => 'required|file',
             ], $prices_rules));

         // store in the database
         $flower = new Flower;
         $flower->name = $request->name;
         $flower->slug = $request->slug;
         $flower->stock = $request->stock;
         $flower->best = $request->best;
         $flower->new = $request->new;
         $flower->sale = $request->sale;
         $flower->dscr = $request->dscr;
         if ($request->hasFile('image1')) {
           $image = $request->file('image1');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image1 = $filename;
         }
         $flower->save();

         $flower->collections()->sync($request->collections, false);

         // attach prices of sizes
        $req_sizes = $request->input('prices');
         foreach ( $req_sizes as $size => $price) {
             $size_id = FLSize::where('name', $size)->first()->id;
             $flower->sizes()->attach($size_id, ['price' => $price]);
         }

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
      //$flower = Flower::find($id);
      $flower = Flower::with('sizes')
                    ->where('id', $id)
                    ->first();
      $collections = Collection::all();
      $sizes = FLSize::all();
      return view('admin.products.show', compact('flower', 'collections', 'sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flower = Flower::with('sizes')
            ->with('collections')
            ->where('id', $id)
            ->first();

        $collections = Collection::all();

        $collections->transform(function ($item, $key) use ($flower){
            foreach ($flower->collections as $fcollection) {
                if ($item->id === $fcollection->id) {
                    $item['checked'] = true;
                    return $item;
                }
            }
            return $item;
        });

        return view('admin.products.edit', compact('flower', 'collections'));
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
        $sizes = FLSize::all();
        // validate rules prices
        $prices_rules = [];
        foreach ($sizes as $size) {
            $prices_rules[] = 'prices.' . $size->name = 'required|regex:/^\d*(\.\d{1,2})?$/';
        }

        // validate the data
        $this->validate($request, array_merge([
            'name'         => 'required|max:255',
            'slug'          => 'required|alpha_dash|min:5|max:255|unique:flowers,slug,'.$id,
            'dscr'          => 'required',
        ], $prices_rules));


     // store in the database
     $flower = Flower::find($id);
     $flower->name = $request->input('name');
     $flower->slug = $request->input('slug');
     $flower->stock = $request->input('stock');
     $flower->best = $request->input('best');
     $flower->new = $request->input('new');
     $flower->sale = $request->input ('sale');
     $flower->dscr = $request->input ('dscr');

     if ($request->hasFile('image1')) {
       $image = $request->file('image1');
       $filename = time() . $image->getClientOriginalName();
       $location = public_path('images/product/' . $filename);
       Image::make($image)->resize(600, 800)->save($location);
       $flower->image1 = $filename;
     }
     $flower->save();

     if ($request->input('collections')) {
          $flower->collections()->sync($request->collections);
      } else {
          $flower->collections()->sync(array());
      }

        // attach prices of sizes
        $req_sizes = $request->input('prices');
        foreach ( $req_sizes as $size => $price) {
            $size_id = FLSize::where('name', $size)->first()->id;
            $flower->sizes()->updateExistingPivot($size_id, ['price' => $price]);
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

    public function getSingle($slug)
    {
        $flower = Flower::with('sizes')
          ->where('slug', '=', $slug)
          ->first();

        $related = Flower::whereHas('collections', function ($q) use ($flower) {
            return $q->whereIn('name', $flower->collections->pluck('name'));
          })
          ->where('id', '!=', $flower->id) // So you won't fetch same post
          ->get();

        $ratings = \willvincent\Rateable\Rating::take(10)->get();

        $sizes = FLSize::all();

        $default_size = FLSize::DEFAULT;

        return view('product.single', compact('flower', 'ratings', 'related', 'sizes', 'default_size'));
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

    public function priceOfSize(Flower $flower, FLSize $size)
    {
        $flower_size = $flower
                            ->with(['sizes' => function ($q) use ($size) {
                                $q->where('id', $size->id);
                            }])
                            ->where('id', $flower->id)
                            ->first();

        $size = $flower_size->sizes->first()->pivot;

        $price = $size['price_new'];
        $price_old = $size['price_old'];

        return response(compact('price', 'price_old'), 200);
    }

}
