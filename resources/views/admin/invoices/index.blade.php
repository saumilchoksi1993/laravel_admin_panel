@extends('layouts.admin')
@section('content')
@can('invoice_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.invoice.create") }}">
                {{ trans('global.add') }} {{ trans('global.invoice.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.invoice.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>{{ trans('global.invoice.fields.id') }}</th>
                        <th>{{ trans('global.invoice.fields.name') }}</th>
                        <th>{{ trans('global.invoice.fields.email') }}</th>
                        <th>{{ trans('global.invoice.fields.phone') }}</th>
                        <th>{{ trans('global.invoice.fields.amount') }}</th>
                        <th>{{ trans('global.invoice.fields.dynamic_url') }}</th>
                        <th>{{ trans('global.invoice.fields.created_at') }}</th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $key => $invoice)
                        <tr data-entry-id="{{ $invoice->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $invoice->id ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->name ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->email ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->phone ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->amount ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->dynamic_url ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->created_at ?? '' }}
                            </td>
                            <td>
                                @can('invoice_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.invoice.show', $invoice->id) }}">
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
        $('.datatable:not(.ajaxTable)').DataTable(
            { 
                buttons: [],
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
            }
        )
    })
</script>
@endsection
@endsection