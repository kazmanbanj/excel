@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        Customers
    </div>
    <div class="panel-body">
        <a href="{{ route('customer.export') }}" class="btn btn-primary">Export all customers</a> ||
        <a href="{{ route('customer.export_view') }}" class="btn btn-primary">Export view</a> ||
        <a href="{{ route('customer.export_store') }}" class="btn btn-primary">Store as file</a> ||
        <a href="{{ route('customer.export_format', 'Csv') }}" class="btn btn-primary">Download CSV</a> ||
        <a href="{{ route('customer.export_format', 'Html') }}" class="btn btn-primary">Download Html</a> ||
        <a href="{{ route('customer.export_format', 'Dompdf') }}" class="btn btn-primary">Download PDF</a> ||
        <a href="{{ route('customer.export_sheets') }}" class="btn btn-primary">Export into multiple sheets</a> ||
        <br><br>

        @include('customers.table', $customers)

    </div>
@endsection
