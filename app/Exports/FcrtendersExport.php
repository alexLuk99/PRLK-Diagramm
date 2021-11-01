<?php

namespace App\Exports;

use App\Models\Fcrtender;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FcrtendersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fcrtender::all();
    }
    public function headings(): array
    {
            return [
                    'DATE_FROM',
                    'DATE_TO',
                    'TYPE_OF_RESERVES',
                    'PRODUCT',
                    'TOTAL_DEMAND',
                    'GERMANY_BLOCK_DEMAND_[MW]',
                    'GERMANY_BLOCK_EXPORT_LIMIT_[MW]',
                    'GERMANY_BLOCK_CORE_PORTION_[MW]',
              ];
    }
}
