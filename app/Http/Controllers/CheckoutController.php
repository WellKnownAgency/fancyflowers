<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Classes\CheckoutForm;
use App\Coupon;
use App\FLSize;
use App\Notifications\newOrderManager;
use App\Notifications\newOrderUser;
use App\Rules\Zip;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;
use Stripe;
use Cart;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    private $form;

    public function __construct(CheckoutForm $form)
    {
        $this->form = $form;
    }

    public function validateField(Request $request)
    {
        $input = $request->only(['field', 'value']);
        $name = $input['field'];
        $value = $input['value'];

        $this->form->validateField($name, $value);
        $arrParams = [$name => $value];

        return response()->json($arrParams, 200);
    }

    public function validateForm(Request $request)
    {
        $this->form->validateForm($request->all());
        return response()->json([], 200);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formFields = $this->form->getFields();

        $cart = Cart::class;

        $coupon = Coupon::where('code', Session::get('coupon-code'))->first();

        $output = [
            'formFields' => $formFields,
            'cart' => $cart,
            'coupon' => $coupon ? $coupon->toJson(JSON_PRETTY_PRINT) : json_encode(null),
            'is_auth' => json_encode(\Auth::check())
        ];

        return view('/checkout', $output);
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
        $cart = Cart::class;
        $content = $cart::content()->map(function ($item) {
            return $item->name . ' - ' . $item->qty . ' pcs - ' . FLSize::getSizeDisplayName($item->options->size) . ' - $' . $item->price;
        })->values()->all();
        $content = implode(', ', $content);

        try {
          $charge = Stripe::charges()->create([
            'amount' => Cart::total(),
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'description' => $content,
            'receipt_email' => $request->email,
            'metadata' => [
               'Name of the Item' => $content,
               'Quantity' => Cart::instance('default')->count(),
               'First Name of the Receiver' => $request->input('firstname'),
               'Last Name of the Receiver' => $request->input('lastname'),
               'Phone Number' => $request->input('phone'),
               'Street' => $request->input('street'),
               'City' => $request->input('city'),
               'State' => $request->input('state'),
               'Zip Code' => $request->input('zipcode'),
            ],
          ]);

          $extra = [
              'First Name' => $request->input('firstname'),
              'Last Name' => $request->input('lastname'),
              'Email' => $request->email,
              'Phone Number' => $request->input('phone'),
              'Street' => $request->input('street'),
              'City' => $request->input('city'),
              'State' => $request->input('state'),
              'Zip Code' => $request->input('zipcode'),
          ];

          // Send all managers
            $managers = Admin::all();
            \Notification::send($managers, new newOrderManager($cart, $extra));

            // Send current user
          if ($user = \Auth::user()) {
              $user->notify(new newOrderUser($cart));
          } else {
              \Notification::route('mail', $request->email)
                  ->notify(new newOrderUser($cart));
          }

          Cart::instance('default')->destroy();
          if (Session::has('coupon-code')) {
              Session::forget('coupon-code');
          }
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
