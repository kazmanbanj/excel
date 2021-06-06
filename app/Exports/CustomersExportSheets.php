<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CustomersExportSheets implements WithMultipleSheets, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {
        $sheets = [];
        $organisations = ['example.net', 'example.org', 'example.com'];
        foreach ($organisations as $organisation) {
            $sheets[] = new CustomerOrganisationSheet($organisation);
        }
        return $sheets;
    }
}
