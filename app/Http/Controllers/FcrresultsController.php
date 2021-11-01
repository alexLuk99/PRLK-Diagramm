<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\FcrresultsExport;
use App\Imports\FcrresultsImport;
use App\Models\Fcrresult;
use Maatwebsite\Excel\Facades\Excel;
class FcrresultsController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fcrresults()
    {
        $data=Fcrresult::all();
        return view('fcrresults', ['fcrresults'=>$data]);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportresults()
    {
        ob_end_clean(); // Löscht den Ausgabe-Puffer und deaktiviert die Ausgabe-Pufferung
        ob_start(); // Ausgabepufferung aktivieren
        return Excel::download(new FcrresultsExport, 'fcrresults.xlsx');
     # return (new UsersExport)->download('users.xls', \Maatwebsite\Excel\Excel::XLS);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importresults()
    {
        Excel::import(new FcrresultsImport,request()->file('file'));
        return back() -> with('success', "Done");
    }

}
