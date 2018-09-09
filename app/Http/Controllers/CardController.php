<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
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
             'number'         => 'required|digits:16',
             'month'         => 'required|digits:2',
             'year'         => 'required|digits:4',

         ));
       // store in the database
      $card = new Card;
      $card->name = $request->name;
      $card->number = $request->number;
      $card->month = $request->month;
      $card->year = $request->year;
      $card->user_id = Auth::id();


      $card->save();

     session()->put('success','Your new card was Successfully Added');

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
      $card = Card::find($id);
      return view('cards.edit')->with('card', $card);
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
      $card = Card::find($id);

      $card->name = $request->input('name');
      $card->number = $request->input('number');
      $card->month = $request->input('month');
      $card->year = $request->input('year');

      $card->save();

      session()->put('success','Your Card Information was Successfully Changed');

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
