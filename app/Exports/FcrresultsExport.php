<?php

namespace App\Exports;

use App\Models\Fcrresult;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FcrresultsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fcrresult::all();
    }
    public function headings(): array
    {
            return [
                    'DATE_FROM',
                    'DATE_TO',
                    'PRODUCT_TYPE',
                    'TENDER_NUMBER',
                    'PRODUCTNAME',
                    'CROSSBORDER_SETTLEMENTCAPACITY_PRICE_[EUR/MW]',
                    'DE_DEMAND_[MW]',
                    'DE_SETTLEMENTCAPACITY_PRICE_[EUR/MW]',
                    'DE_IMPORT(-)_EXPORT(+)_[MW]',
              ];
    }
}
