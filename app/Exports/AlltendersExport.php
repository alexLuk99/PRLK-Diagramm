<?php

namespace App\Exports;

use App\Models\Alltender;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlltendersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Alltender::all();
    }
    public function headings(): array
    {
            return [
                    'DATE_FROM',
                    'DATE_TO',
                    'PRODUCT',
                    'OFFERED_CAPACITY_PRICE_[EUR/MW]',
                    'ALLOCATED_CAPACITY_[MW]',
                    'COUNTRY',
                    'SETTLEMENTCAPACITY_PRICE_[EUR/MW]',
              ];
    }
}
