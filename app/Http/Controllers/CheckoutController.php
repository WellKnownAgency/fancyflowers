<?php

namespace App\Http\Controllers;

use Session;
use Stripe;
use Cart;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/checkout');
    }

    public function checkoutComplete()
    {
        return view('/checkoutcomplete');
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

        $content = Cart::content()->map(function ($item) {
          return $item->model->name;
        })->values()->toJson();

        try {
          $charge = Stripe::charges()->create([
            'amount' => Cart::total()+0.30 ,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'description' => $content,
            'receipt_email' => $request->email,
            'metadata' => [
               'Name of the Item' => $content,
               'Quantity' => Cart::instance('default')->count(),
               'First Name of the Receiver' => $request->firstname,
               'Last Name of the Receiver' => $request->lastname,
               'Phone Number' => $request->phone,
               'Street' => $request->street,
               'City' => $request->city,
               'State' => $request->state,
               'Zip Code' => $request->zipcode,
            ],
          ]);

          Cart::instance('default')->destroy();

          session()->put('success','Your Purchase was Successfull');
          return redirect()->route('checkout.complete');
        } catch(CardErrorException $e) {

          session()->put('error','Error. ' . $e->getMessage());
          return back();
        };
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
}
