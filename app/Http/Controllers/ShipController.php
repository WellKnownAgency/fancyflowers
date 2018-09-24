<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function indexCheckout(Request $request)
    {
      $ship = Ship::findOrFail($request->id);
      return response()->json(['data' => $ship]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ship.create');
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
             'name'         => 'required|max:255|unique:ships',
             'firstname'         => 'required|max:255',
             'lastname'         => 'required|max:255',
             'street'         => 'required|max:255',
             'city'         => 'required|max:255',
             'zipcode'         => 'required|digits:5',
             'phone'          => 'required|digits:10'
         ));
       // store in the database
      $ship = new Ship;
      $ship->name = $request->name;
      $ship->firstname = $request->firstname;
      $ship->lastname = $request->lastname;
      $ship->street = $request->street;
      $ship->city = $request->city;
      $ship->state = $request->state;
      $ship->zipcode = $request->zipcode;
      $ship->phone = $request->phone;
      $ship->user_id = Auth::id();


      $ship->save();

     session()->put('success','Your Shipping Address was Successfully Created');

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
        $ship = Ship::find($id);
        return view('ship.edit')->with('ship', $ship);
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

      $ship = Ship::find($id);

      $ship->name = $request->input('name');
      $ship->firstname = $request->input('firstname');
      $ship->lastname = $request->input('lastname');
      $ship->street = $request->input('street');
      $ship->city = $request->input('city');
      $ship->state = $request->input('state');
      $ship->zipcode = $request->input('zipcode');
      $ship->phone = $request->input('phone');

      $ship->save();

      session()->put('success','Your Shipping Address was Successfully Changed');

       return redirect('/account');
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
