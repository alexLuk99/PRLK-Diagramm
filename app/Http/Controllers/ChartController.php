<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function index() {
        $data['DATE_FROM_list'] = $this->fetch_year();
        return view('charts')->with($data);
    }

    public function fetch_year() {
        $data = DB::table('fcrresults')->select(DB::raw('DATE_FROM'))->groupBy('DATE_FROM')->orderBy('DATE_FROM', 'DESC')->get();
        return $data;
    }

    public function fetch_data(Request $request) {

      $testData = DB::table('fcrresults')->select(DB::raw('CROSSBORDER_SETTLEMENTCAPACITY_PRICE'))->get();

        if($request->input('DATE_FROM'))
        {

         $fcrresults = $this->fetch_chart_data($request->input('DATE_FROM'));

         foreach($fcrresults->toArray() as $row)
         {

          $output[] = array(
           'PRODUCTNAME'  => $row->PRODUCTNAME,
           'CROSSBORDER_SETTLEMENTCAPACITY_PRICE' => floatval($row->CROSSBORDER_SETTLEMENTCAPACITY_PRICE)
          );
         }

         echo json_encode($output);
        }
    }

    function fetch_chart_data($DATE_FROM)
    {
     $data =  DB::table('fcrresults')->orderBy('DATE_FROM', 'ASC')->where('DATE_FROM', $DATE_FROM)->get();
     return $data;
    }
}
