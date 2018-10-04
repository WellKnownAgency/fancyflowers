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


    //collections
      public function getBirthday()
      {
        $pagination = 9;
        $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
        $flowers = Flower::whereHas('collections', function ($query) {
        $query->where('name', 'Birthday');
      });

      $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
      $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;


      $flowers = $flowers->paginate($pagination);

      return view('/collections/birthday')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
    }

    public function getCompositions()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Flower Composition');
    });

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->paginate($pagination);

    return view('/collections/compositions')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getCongratulation()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Congratulation');
    });

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->paginate($pagination);

    return view('/collections/congratulation')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getGifts()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Gifts');
    });

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->paginate($pagination);

    return view('/collections/gifts')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getNewbaby()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'New Baby');
    });

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->paginate($pagination);

    return view('/collections/new-baby')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getThankyou()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Thank you');
    });

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->paginate($pagination);

    return view('/collections/thank-you')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getWeddings()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Wedding');
    });

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->paginate($pagination);

    return view('/collections/weddings')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getLooseflowers()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
        $query->where('name', 'Wedding');
        });


    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->orderBy('created_at', 'asc');
    $flowers = $flowers->paginate($pagination);

    return view('/collections/looseflowers')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function getAll(Request $request)
  {
    $pagination = 9;
    $flowersbest = Flower::where('best', '=', '1')->take(4)->get();

    $flowers = new Flower();

    $minPrice = $flowers->min('price1') ? $flowers->min('price1') : 0;
    $maxPrice = $flowers->max('price1') ? $flowers->max('price1') : 100;

    $flowers = $flowers->orderBy('created_at', 'asc');
    $flowers = $flowers->paginate($pagination);

    return view('/collections/all')->withFlowers($flowers)->withMinPrice($minPrice)->withMaxPrice($maxPrice)->withFlowersbest($flowersbest);
  }

  public function filter(Request $request)
  {
      $pagination = 9;

      if($request->has('category')) {
          $reqCategory = $request->input('category');
          $flowers = Flower::whereHas('collections', function ($query) use ($reqCategory) {
              $query->where('name', $reqCategory);
          });
      } else {
          $flowers = new Flower();
      }

      if($request->has('sort')) {
          $reqSort = $request->input('sort');
          $reqSortArr = explode('__', $reqSort);
          $flowers = $flowers->orderBy($reqSortArr[0], $reqSortArr[1]);
      }


      if($request->has('filter')) {
          $reqFilter = $request->input('filter');
          $reqFilterArr = explode('__', $reqFilter);
          if ($reqFilterArr[0] === 'price1') {
              $reqPrice = $reqFilterArr[1];
              $reqPriceArr = explode(';', $reqPrice);
              $flowers = $flowers->where($reqFilterArr[0], '>=', $reqPriceArr[0])->where($reqFilterArr[0], '<=', $reqPriceArr[1]);
          }
      }

      if($request->has('limit')) {
          $reqLimit = $request->input('limit');
          $flowers = $flowers->paginate($reqLimit);
      } else {
          $flowers = $flowers->paginate($pagination);
      }

      return view('/collections/products')->withFlowers($flowers);
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
