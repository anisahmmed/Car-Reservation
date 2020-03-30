<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Reservation;
use App\Mail\NotificationMail;
use Mail;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * $request->total_price,
                "currency" => "BDT",
                "source" => $request->stripeToken,
                "description" => $request->customer_phone . " Paid",
        ]);
        Reservation::findOrFail($request->check)->update([
          'payment_status' =>1,
        ]);

        // $car_name = $request->car_name;
        $car_model = $request->car_model;
        $total_price = $request->total_price;
        Mail::to($request->user())->send(new NotificationMail($car_model,$total_price));

        alert()->success('Successfully Reserved!');

        return redirect(route('passenger_index'));
    }
}
