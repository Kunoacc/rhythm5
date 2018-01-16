<?php

namespace App\Http\Controllers;

use App\Donations;
use Illuminate\Http\Request;
use Yabacon\Paystack;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function donate(Request $request){
        $paystack = new Paystack("sk_test_4a6e12ea908c14ffdc61e8417ab32fab9ba54060");
        $response = $paystack->transaction->verify(["reference" => $request->input('reference')]);
        if ($response->data->status === "success"){
            $data = $response->data;
            $customer = $data->customer;
            $donation = new Donations();
            $donation->reference = $data->reference;
            $donation->amount = ($data->amount / 100);
            $donation->name = $customer->first_name . " " . $customer->last_name;
            $donation->email = $customer->email;
            $donation->save();
            return redirect()->route('donation')->with('success', 'congratulations on your donation');
        }

     return redirect()->route('donation')->with('error', 'Whoops');
    }

    public function sendMail($email){

    }
    //
}
