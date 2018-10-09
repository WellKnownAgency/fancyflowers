<?php

namespace App\Http\Controllers;

use Cart;
use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
      $coupon = Coupon::where('code', $request->coupon_code)->first();
       if (!$coupon) {
          session()->put('error','Invalid coupon code. Please try again.');
           return back();
       }
       dispatch_now(new UpdateCoupon($coupon));
       session()->put('success','Coupon has been Successfully applied');

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
      session()->forget('coupon')->put('success','Coupon has been removed');

      return back();
    }


    public function apply(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'coupon-code' => 'required|exists:coupons,code'
            ], [
                'exists' => 'This coupon does not exist.',
                'required' => 'The coupon field is required.'
            ])->validate();

        $couponCode = $request->input('coupon-code');
        $coupon = Coupon::where('code', $couponCode)->first();
        Session::put('coupon-code', $couponCode);

        $cart = Cart::class;
        $totals = view('cart.checkout-totals', compact('cart'))->render();
        $totalsMini = view('cart.checkout-totals-mini', compact('cart'))->render();

        return response()->json(compact('coupon', 'totals', 'totalsMini'), 200);
    }

    public function cancel(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'coupon-code' => 'required|exists:coupons,code'
            ], [
            'exists' => 'This coupon does not exist.',
            'required' => 'The coupon field is required.'
        ])->validate();

        Session::forget('coupon-code');

        $cart = Cart::class;
        $totals = view('cart.checkout-totals', compact('cart'))->render();
        $totalsMini = view('cart.checkout-totals-mini', compact('cart'))->render();

        return response()->json(compact('totals', 'totalsMini'), 200);
    }
}
