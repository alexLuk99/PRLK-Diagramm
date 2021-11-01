<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Fcrresult;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SampleChart extends BaseChart
{
  /**
      * Determines the chart name to be used on the
      * route. If null, the name will be a snake_case
      * version of the class name.
      */
     public ?string $name = 'sample_chart';

     /**
      * Determines the nam  e suffix of the chart route.
      * This will also be used to get the chart URL
      * from the blade directrive. If null, the chart
      * name will be used.
      */
     public ?string $routeName = 'sample_chart';

     /**
      * Determines the prefix that will be used by the chart
      * endpoint.
      */
     public ?string $prefix = 'some_prefix';

     /**
      * Determines the middlewares that will be applied
      * to the chart endpoint.
      */
    /*public ?array $middlewares = ['auth'];

     /**
      * Handles the HTTP request for the given chart.
      * It must always return an instance of Chartisan
      * and never a string or an array.
      */
     public function handler(Request $request): Chartisan
     {

        // $data = DB::select("select PRODUCTNAME from  fcrresults");

         return Chartisan::build()
             ->labels(['NEGPOS_00_04', 'NEGPOS_04_08', 'NEGPOS_08_12', 'NEGPOS_12_16', 'NEGPOS_16_20', 'NEGPOS_20_24'])
             //->dataset('ClearingPrice', [$temp])
             ->dataset('SettlementPrice', [5, 7, 6, 9, 1, 3]);
     }
}
