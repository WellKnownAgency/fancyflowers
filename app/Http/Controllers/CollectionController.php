<?php

namespace App\Http\Controllers;

use Session;
use App\Flower;
use App\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $collections = Collection::orderBy('id')->get();
      return view('admin.collections.index')->withCollections($collections);
    }

      public function getBirthday()
      {

      $flowers = Flower::whereHas('collections', function ($query) {
        $query->where('name', 'Birthday');
      })->get();


      if (request()->sort = 'lowest_first') {
        $flowers = $flowers->sortBy('price1');
      } elseif(request()->sort = 'highest_first') {
        $flowers = $flowers->sortByDesc('price1');
      }

      if (request()->sort = 'a-z') {
        $flowers = $flowers->sortBy('name');
      } elseif(request()->sort = 'z-a') {
        $flowers = $flowers->sortByDesc('price1');
      }
      return view('/collections/birthday', compact('flowers', 'collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collections.create');
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
             'slug'          => 'required|alpha_dash|min:5|max:255|unique:collections,slug',
         ));
     // store in the database
     $collection = new Collection;
     $collection->name = $request->name;
     $collection->slug = $request->slug;

     $collection->save();

     session()->put('success','Item Deleted Successfully from Your Cart ');
     return redirect()->route('collections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $collection = Collection::find($id);
        return view('admin.collections.edit')->withCollection($collection);
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
      $collection = Collection::find($id);
      $collection->name = $request->input('name');
      $collection->slug = $request->input('slug');


      $collection->save();

      return redirect()->route('collections.index', $collection->id);
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
}
