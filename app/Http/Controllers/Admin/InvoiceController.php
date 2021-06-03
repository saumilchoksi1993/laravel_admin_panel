<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInvoiceRequest;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Invoice;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
   /*
    * Implement function for retrive all invoices.
    */
    public function index()
    {
        abort_unless(\Gate::allows('invoice_access'), 403);        

        $invoices = Invoice::all();

        return view('admin.invoices.index', compact('invoices'));
    }

   /*
    * Implement function for create invoices.
    */
    public function create()
    {
        abort_unless(\Gate::allows('invoice_create'), 403);

        return view('admin.invoices.create');
    }

   /*
    * Implement function for create invoice in database.
    */
    public function store(StoreInvoiceRequest $request)
    {
        abort_unless(\Gate::allows('invoice_create'), 403);

        // Generate unique dynamic url.
        $dynamic_url = $this->uniqueDynamicURL($request->all());
        $request->request->add(['dynamic_url' => $dynamic_url]);

        $invoice = Invoice::create($request->all());

        return redirect()->route('admin.invoice.index');
    }

   /*
    * Implement function for retrive single payment details.
    */
    public function show(Invoice $invoice)
    {
        abort_unless(\Gate::allows('invoice_show'), 403);

        return view('admin.invoices.show', compact('invoice'));
    }

   /*
    * Implement function for generate dynamic url for payments.
    */
    public function uniqueDynamicURL($request) {
        $host = config('app.url');
        // Check dynamic url exists in database.
        $paymentURLUnique = false;
        $dynamic_url = "";
        while(!$paymentURLUnique) {
            $random = Str::random(20);
            $dynamic_url = $host.'/payment-link/'.$random;
            $exists = Invoice::where('dynamic_url', '=', $dynamic_url)->first();
            if($exists == null) {
                $paymentURLUnique = true;
            }
        }
        return $dynamic_url;
    }
}
