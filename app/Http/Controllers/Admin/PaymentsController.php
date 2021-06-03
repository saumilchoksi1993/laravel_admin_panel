<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPaymentRequest;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Payment;

class PaymentsController extends Controller
{
   /*
    * Implement function for retrive all payments.
    */
    public function index()
    {
        abort_unless(\Gate::allows('payment_access'), 403);

        $all_payments = Payment::all();
        $payments = array();
        foreach ($all_payments as $key => $payment) {
            if($payment['card_number']) {
                $payment['card_number'] = $this->mask_cc($payment['card_number']);
            }
            array_push($payments,$payment);
        }

        return view('admin.payments.index', compact('payments'));
    }

   /*
    * Implement function for retrive single payment details.
    */
    public function show(Payment $payment)
    {
        abort_unless(\Gate::allows('payment_show'), 403);

        if($payment['card_number']) {
            $payment['card_number'] = $this->mask_cc($payment['card_number']);
        }

        return view('admin.payments.show', compact('payment'));
    }

   /*
    * Implement function for add masking in credit card number.
    */
    public function mask_cc($cc_num, $mask_ch='*') {
        if( strlen($cc_num) < 13) {
            return $cc_num;
        } else {
            return str_repeat($mask_ch, 4) . " " . str_repeat($mask_ch, 2) . substr($cc_num, 6, 2) . " " . substr($cc_num, 9, 4) . " " . str_repeat($mask_ch, 4);
        }
    }
}
