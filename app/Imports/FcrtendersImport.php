<?php

namespace App\Imports;

use App\Models\Fcrtender;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class FcrtendersImport implements ToModel, WithStartRow
{
        /**
        * @return int
        */
       public function startRow(): int
       {
           return 2;
       }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fcrtender([
                'DATE_FROM'                                                  =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
                'DATE_TO'                                                      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]),
                'TYPE_OF_RESERVES'                                             => $row[7],
                'PRODUCT'                                          => $row[8],
                'TOTAL_DEMAND'                                             => $row[9],
                'GERMANY_BLOCK_DEMAND'     => $row[10],
                'GERMANY_BLOCK_EXPORT_LIMIT'                                               => $row[11],
                'GERMANY_BLOCK_CORE_PORTION'                    => $row[12],
        ]);
    }
}
