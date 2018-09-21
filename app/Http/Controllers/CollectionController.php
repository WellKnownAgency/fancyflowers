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

      if (request()->sort == 'low_high') {
        $flowers = $flowers->orderBy('price1', 'asc');
      } elseif(request()->sort == 'high_low') {
        $flowers = $flowers->orderBy('price1', 'desc');
      } elseif(request()->sort == 'a_z') {
        $flowers = $flowers->orderBy('name', 'asc');
      } elseif(request()->sort == 'z_a') {
        $flowers = $flowers->orderBy('name', 'desc');
      } elseif(request()->sort == 'instock') {
        $flowers = $flowers->where('stock', '1');
      }

      $flowers = $flowers->paginate($pagination);

      return view('/collections/birthday')->withFlowers($flowers)->withFlowersbest($flowersbest);
    }

    public function getCompositions()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Flower Composition');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/compositions')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getCongratulation()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Congratulation');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/congratulation')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getGifts()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Gifts');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/gifts')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getNewbaby()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'New Baby');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/new-baby')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getThankyou()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Thank you');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/thank-you')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getWeddings()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Wedding');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/weddings')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getLooseflowers()
    {
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::whereHas('collections', function ($query) {
      $query->where('name', 'Wedding');
    });

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate($pagination);

    return view('/collections/looseflowers')->withFlowers($flowers)->withFlowersbest($flowersbest);
  }

  public function getAll()
    {
<<<<<<< HEAD
      $flowers = Flower::take(10)->get();
=======
      $pagination = 9;
      $flowersbest = Flower::where('best', '=', '1')->take(4)->get();
      $flowers = Flower::get();
>>>>>>> 9e62d76b31ec7460eb923ce41d7a529982e77469

    if (request()->sort == 'low_high') {
      $flowers = $flowers->orderBy('price1', 'asc');
    } elseif(request()->sort == 'high_low') {
      $flowers = $flowers->orderBy('price1', 'desc');
    } elseif(request()->sort == 'a_z') {
      $flowers = $flowers->orderBy('name', 'asc');
    } elseif(request()->sort == 'z_a') {
      $flowers = $flowers->orderBy('name', 'desc');
    } elseif(request()->sort == 'instock') {
      $flowers = $flowers->where('stock', '1');
    }

    $flowers = $flowers->paginate(1);

<<<<<<< HEAD
    return view('/collections/all', compact('flowers'));
=======
    return view('/collections/all')->withFlowers($flowers)->withFlowersbest($flowersbest);
>>>>>>> 9e62d76b31ec7460eb923ce41d7a529982e77469
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
