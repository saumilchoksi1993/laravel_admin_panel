<?php

namespace App\Http\Requests;

use App\Invoice;
use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('invoice_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
                'email',
            ],
            'phone' => [
                'required',
            ],
            'amount' => [
                'required',
                'regex:/^\d+(\.\d{1,2})?$/',
            ],
        ];
    }
}
