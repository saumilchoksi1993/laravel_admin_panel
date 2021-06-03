@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.invoice.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.id') }}
                    </th>
                    <td>
                        {{ $invoice->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.name') }}
                    </th>
                    <td>
                        {{ $invoice->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.email') }}
                    </th>
                    <td>
                        {{ $invoice->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.phone') }}
                    </th>
                    <td>
                        {{ $invoice->phone }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.amount') }}
                    </th>
                    <td>
                        $ {{ $invoice->amount }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.dynamic_url') }}
                    </th>
                    <td>
                        {{ $invoice->dynamic_url }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.invoice.fields.created_at') }}
                    </th>
                    <td>
                        {{ $invoice->created_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection