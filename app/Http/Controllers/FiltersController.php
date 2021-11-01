<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fcrresult;
use Illuminate\Support\Facades\DB;

class FiltersController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    function dbOperations()
    {
            $data= DB::table('fcrresults')->get();
            return view('listview', ['data'=>$data]);
    }

}
