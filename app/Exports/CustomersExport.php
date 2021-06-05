<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer::select(['id', 'firstname', 'lastname', 'email'])
            ->where('email', 'like', '%example.org')
            ->orderBy('firstname')
            ->get();
    }
}
