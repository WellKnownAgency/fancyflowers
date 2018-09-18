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
        $pagination = 1;

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

      return view('/collections/birthday', compact('flowers', 'collections'));
    }

    public function getCompositions()
    {
      $pagination = 1;

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

    return view('/collections/compositions', compact('flowers', 'collections'));
  }

  public function getCongratulation()
    {
      $pagination = 1;

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

    return view('/collections/congratulation', compact('flowers', 'collections'));
  }

  public function getGifts()
    {
      $pagination = 1;

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

    return view('/collections/gifts', compact('flowers', 'collections'));
  }

  public function getNewbaby()
    {
      $pagination = 1;

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

    return view('/collections/new-baby', compact('flowers', 'collections'));
  }

  public function getThankyou()
    {
      $pagination = 1;

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

    return view('/collections/thank-you', compact('flowers', 'collections'));
  }

  public function getWeddings()
    {
      $pagination = 1;

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

    return view('/collections/weddings', compact('flowers', 'collections'));
  }

  public function getLooseflowers()
    {
      $pagination = 1;

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

    return view('/collections/looseflowers', compact('flowers', 'collections'));
  }

  public function getAll()
    {
      $pagination = 1;

      $flowers = Flower::get();

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

    return view('/collections/all', compact('flowers', 'collections'));
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
