<?php

namespace App\Imports;

use App\Models\Fcrresult;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class FcrresultsImport implements ToModel, WithStartRow
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
        return new Fcrresult([
                'DATE_FROM'                                                  =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
                'DATE_TO'                                                      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]),
                'PRODUCT_TYPE'                                             => $row[2],
                'TENDER_NUMBER'                                          => $row[3],
                'PRODUCTNAME'                                             => $row[4],
                'CROSSBORDER_SETTLEMENTCAPACITY_PRICE'     => $row[5],
                'DE_DEMAND'                                               => $row[15],
                'DE_SETTLEMENTCAPACITY_PRICE'                    => $row[16],
                'DE_IMPORT_EXPORT'                                     => $row[17],
        ]);
    }
}
