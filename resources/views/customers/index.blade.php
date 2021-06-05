@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        Customers
    </div>
    <div class="panel-body">
        <a href="{{ route('customer.export) }}" class="btn btn-primary">Export all customers</a>
        <a href="{{ route('customer.export_view') }}" class="btn btn-primary">Export view</a>
        <br><br>

        @include('customers.table', $customers)

    </div>
@endsection
