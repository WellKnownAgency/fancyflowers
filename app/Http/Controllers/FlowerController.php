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
         $flower->price1 = $request->price1;
         $flower->price1name = $request->price1name;
         $flower->price2 = $request->price2;
         $flower->price2name = $request->price2name;
         $flower->price3 = $request->price3;
         $flower->price3name = $request->price3name;
         $flower->dscr = $request->dscr;
         if ($request->hasFile('image1')) {
           $image = $request->file('image1');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image1 = $filename;
         }
         if ($request->hasFile('image2')) {
           $image = $request->file('image2');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image2 = $filename;
         }
         if ($request->hasFile('image3')) {
           $image = $request->file('image3');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image3 = $filename;
         }
         if ($request->hasFile('image4')) {
           $image = $request->file('image4');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image4 = $filename;
         }
         if ($request->hasFile('image5')) {
           $image = $request->file('image5');
           $filename = time() . $image->getClientOriginalName();
           $location = public_path('images/product/' . $filename);
           Image::make($image)->resize(600, 800)->save($location);
           $flower->image5 = $filename;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getSingle($slug) {
      $flower = Flower::where('slug', '=', $slug)->first();

      return view('product.single')->withFlower($flower);
    }
}
