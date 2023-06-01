<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $payment = Payment::find(2);
        dump($payment);
        dump($payment->ground);
    }

    public function ground(){
       $payment = Payment::find(1);
       dump($payment->ground);
    }
}
