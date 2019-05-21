<?php
namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Session;
use App\Flower;
use App\Collection;
use Illuminate\Http\Request;
class CollectionController extends Controller
{
    private $limit = 9;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function ourfriendsflorists() {
       return view('collections.ourfriendsflorists');
     }


    public function index()
    {
      $collections = Collection::orderBy('id')->get();
      return view('admin.collections.index')->withCollections($collections);
    }
    public function show(Request $request, $slug)
    {
        $flowersbest = Flower::isBestsellers()->take(4)->get();
        $collection = Collection::where('slug', $slug)->first();
        $collections = Collection::orderBy('sort')->get();
        $flowers = Flower::whereHas('collections', function ($query) use ($slug) {
            $query->where('slug', $slug);
        });
        $flowers = $flowers->get();

        $min = $flowers->min('price_new_default');
        $minPrice = $min ? $min : 0;
        $max = $flowers->max('price_new_default');
        $maxPrice = $max ? ceil($max) : 100;

        $flowers = $this->paginate($flowers, $this->limit, $request->input('page'));
        return view('collections.show', compact('collection', 'flowers', 'collections', 'flowersbest', 'minPrice', 'maxPrice'));
    }

  public function filter(Request $request)
  {
      if($request->has('category')) {
          $slug_category = $request->input('category');
          $flowers = Flower::whereHas('collections', function ($query) use ($slug_category) {
              $query->where('slug', $slug_category);
          });
      } else {
          $flowers = new Flower();
      }
      $flowers = $flowers->get();
      if($request->has('sort')) {
          $reqSort = $request->input('sort');
          $reqSortArr = explode('__', $reqSort);
          if ($reqSortArr[1] == 'asc')
              $flowers = $flowers->sortBy($reqSortArr[0]);
          else if($reqSortArr[1] == 'desc')
              $flowers = $flowers->sortByDesc($reqSortArr[0]);
      }
      if($request->has('filter')) {
          $reqFilter = $request->input('filter');
          $reqFilterArr = explode('__', $reqFilter);
          if ($reqFilterArr[0] === 'price') {
              $reqFilterArr[0] = 'price_new_default';
              $reqPrice = $reqFilterArr[1];
              $reqPriceArr = explode(';', $reqPrice);
              $flowers = $flowers->filter(function ($item) use ($reqFilterArr, $reqPriceArr) {
                  return $item[$reqFilterArr[0]] >= $reqPriceArr[0] && $item[$reqFilterArr[0]] <= $reqPriceArr[1];
              });
          }
      }
      if($request->has('limit')) {
          $reqLimit = $request->input('limit');
          $flowers = $this->paginate($flowers, $reqLimit, $request->input('page'));
      } else {
          $flowers = $this->paginate($flowers, $this->limit);
      }
      return view('collections._products')->withFlowers($flowers);
  }
    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof \Illuminate\Database\Eloquent\Collection ? $items : \Illuminate\Database\Eloquent\Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
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
      $collection = Collection::findOrFail($id);
      $collection->delete();
      return redirect('/admin/collections');
    }
}
