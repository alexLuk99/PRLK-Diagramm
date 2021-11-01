<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\FcrsExport;
use App\Imports\FcrsImport;
use App\Models\Fcr;
use Maatwebsite\Excel\Facades\Excel;
class FilterController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function filterview()
    {
            $data=Fcr::all();
            return view('filter',  ['fcrs'=>$data]);
    }
     public function searchBydate(Request $request)
     {
             $data=Fcr::whereBetween('DATE_FROM',[$request->from,$request->to])
             ->get();
             return view('filter',  ['fcrs'=>$data]);
     }

}
