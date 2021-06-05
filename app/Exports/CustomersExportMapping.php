<?php

namespace App\Exports;

use App\Models\Purchase;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExportMapping implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Purchase::with('customer')->get();
    }

    /**
    * @var Purchase $purchase
    * @return array
    */
    public function map($purchase): array
    {
        return [
            $purchase->id,
            $purchase->customer->firstname . ' ' . $purchase->customer->lastname,
            $purchase->bank_acc_number,
            $purchase->company,
            $purchase->created_at->toDateString(),
            $purchase->updated_at->toDateString()
        ];
    }
}
