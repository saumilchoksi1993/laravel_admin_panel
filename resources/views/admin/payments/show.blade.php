@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.payment.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.id') }}
                    </th>
                    <td>
                        {{ $payment->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.amount') }}
                    </th>
                    <td>
                        $ {{ $payment->amount }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.payment_status') }}
                    </th>
                    <td>
                        {{ $payment->payment_status }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.name') }}
                    </th>
                    <td>
                        {{ $payment->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.email') }}
                    </th>
                    <td>
                        {{ $payment->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.phone') }}
                    </th>
                    <td>
                        {{ $payment->phone }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.card_number') }}
                    </th>
                    <td>
                        {{ $payment->card_number }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.payment_date') }}
                    </th>
                    <td>
                        {{ $payment->payment_date }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.payment.fields.created_at') }}
                    </th>
                    <td>
                        {{ $payment->created_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection