@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.payment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>{{ trans('global.payment.fields.id') }}</th>
                        <th>{{ trans('global.payment.fields.amount') }}</th>
                        <th>{{ trans('global.payment.fields.payment_status') }}</th>
                        <th>{{ trans('global.payment.fields.name') }}</th>
                        <th>{{ trans('global.payment.fields.email') }}</th>
                        <th>{{ trans('global.payment.fields.phone') }}</th>
                        <th style="width:100px;">{{ trans('global.payment.fields.card_number') }}</th>
                        <th>{{ trans('global.payment.fields.payment_date') }}</th>
                        <th>{{ trans('global.payment.fields.created_at') }}</th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $key => $payment)
                        <tr data-entry-id="{{ $payment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $payment->id ?? '' }}
                            </td>
                            <td>
                                $ {{ $payment->amount ?? '' }}
                            </td>
                            <td>
                                {{ $payment->payment_status ?? '' }}
                            </td>
                            <td>
                                {{ $payment->name ?? '' }}
                            </td>
                            <td>
                                {{ $payment->email ?? '' }}
                            </td>
                            <td>
                                {{ $payment->phone ?? '' }}
                            </td>
                            <td>
                                {{ $payment->card_number ?? '' }}
                            </td>
                            <td>
                                {{ $payment->payment_date ?? '' }}
                            </td>
                            <td>
                                {{ $payment->created_at ?? '' }}
                            </td>
                            <td>
                                @can('payment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.payments.show', $payment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
        $('.datatable:not(.ajaxTable)').DataTable({buttons: []})
    })
</script>
@endsection
@endsection