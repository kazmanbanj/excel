<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExportHeading implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Customer::all();
        return Customer::select(DB::raw("'', id, firstname, lastname, email, created_at, updated_at"))->get();
    }

    public function headings(): array
    {
        return [
            ' ',
            'Id',
            'First Name',
            'Last Name',
            'Email',
            'Created At',
            'Updated At'
        ];
    }
}
