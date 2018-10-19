<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponAdminController extends Controller
{

  public function index()
  {
    $coupons = Coupon::orderBy('id')->get();
    return view('admin.coupons.index')->withCoupons($coupons);
  }

  public function create()
  {
    return view('admin.coupons.create');
  }

  public function store(Request $request)
  {
    // validate the data
   $this->validate($request, array(
           'code'         => 'required|max:15',
       ));
   // store in the database
   $coupon = new Coupon;
   $coupon->code = $request->code;
   $coupon->type = $request->type;
   $coupon->value = $request->value;


   $coupon->save();

    return redirect('/admin/coupons/');
  }

  public function destroy($id)
  {
    $coupon = Coupon::findOrFail($id);
    $coupon->delete();
    return redirect('/admin/coupons/');
  }


}
