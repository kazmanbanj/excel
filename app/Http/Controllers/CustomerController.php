<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Exports\CustomersExport;
use App\Exports\CustomersExportSize;
use App\Exports\CustomersExportView;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomersExportSheets;
use App\Exports\CustomersExportHeading;
use App\Exports\CustomersExportMapping;
use App\Exports\CustomersExportStyling;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function export()
    {
        return Excel::download(new CustomersExport(), 'customers.xlsx');
    }

    public function export_view()
    {
        return Excel::download(new CustomersExportView(), 'customers.xlsx');
    }

    public function export_store()
    {
        Excel::store(new CustomersExport(), 'customers-'.now()->toDateString().'.xlsx', 'public');
        return redirect()->back();
    }

    public function export_format($format)
    {
        $extension = strtolower($format);
        if (in_array($format, ['Mpdf', 'Dompdf', 'Tcpdf'])) $extension = 'pdf';
        return Excel::download(new CustomersExport(), 'customers.'.$extension, $format);
    }

    public function export_sheets()
    {
        return Excel::download(new CustomersExportSheets(), 'customers.xlsx');
    }

    public function export_heading()
    {
        return Excel::download(new CustomersExportHeading(), 'customers.xlsx');
    }

    public function export_mapping()
    {
        return Excel::download(new CustomersExportMapping(), 'customers.xlsx');
    }

    public function export_styling()
    {
        return Excel::download(new CustomersExportStyling(), 'customers.xlsx');
    }

    public function export_autosize()
    {
        return Excel::download(new CustomersExportSize(), 'customers.xlsx');
    }
}
