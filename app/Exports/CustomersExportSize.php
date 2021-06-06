<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CustomersExportSize implements FromCollection, ShouldAutoSize//, WithEvents, AfterSheet
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer::all();
    }

    /**
    * auto sizing manually
    * @return array
    */
    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function(AfterSheet $event)
    //         {
    //             $event->sheet->getDelegate()->getRowDimension(1)->setRowHeight(20);

    //             $event->sheet->getDelegate()->getStyle('A1:D4')
    //                 ->getAlignment()->setWrapText(true);
    //         }
    //     ];
    // }
}
