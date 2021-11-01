<?php

namespace App\Imports;

use App\Models\Alltender;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AlltendersImport implements ToModel, WithStartRow
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
        return new Alltender([
                'DATE_FROM'                                                  =>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
                'DATE_TO'                                                      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]),
                'PRODUCT'                                                  => $row[3],
                'OFFERED_CAPACITY_PRICE'                                          => $row[4],
                'ALLOCATED_CAPACITY'                                             => $row[8],
                'COUNTRY'     => $row[9],
                'SETTLEMENTCAPACITY_PRICE'                                               => $row[10],
        ]);
    }
}
