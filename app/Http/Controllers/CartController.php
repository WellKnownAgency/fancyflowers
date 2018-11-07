<?php

namespace App\Http\Controllers;

use App\Flower;
use App\Ship;
use App\Card;
use Session;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cards = Card::latest()->get();
      $ships = Ship::latest()->get();
      return view('/cart')->withShips($ships)->withCards($cards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function($cartItem, $rowId) use($request){
          return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty()) {
          session()->put('error','Item Already in your Cart');
          return back();
        }

        Cart::add(
            $request->input('id'),
            $request->input('name'),
            1,
            $request->input('price'),
            [
                'size' => $request->input('size'),
                'price_old' => $request->input('price_old'),
            ]
        )->associate(Flower::class);

        session()->put('success','Item Added Successfully to Your Cart');

        return back();
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
        //
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
        Cart::update($id, $request->quantity);

        session()->put('success','Item Added Successfully to Your Cart');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        session()->put('success','Item Deleted Successfully from Your Cart ');
        return back();
    }
}
