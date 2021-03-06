<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CustomerOrganisationSheet implements FromCollection, WithTitle, ShouldAutoSize
{
    private $organisation;

    public function __construct($organisation)
    {
        $this->organisation = $organisation;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer::where('email', 'like', '%' . $this->organisation)->get();
    }

    /**
    * @return string
    */
    public function title(): string
    {
        return 'Organisation ' . $this->organisation;
    }
}
