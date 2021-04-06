<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->payment_method_id = $request->paymentMethod;
        $payment->description = $request->cardNumber . ' ' . $request->cvcCode;
        $payment->save();
        return $payment;
    }

}
