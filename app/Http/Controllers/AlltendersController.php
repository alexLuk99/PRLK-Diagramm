<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\AlltendersExport;
use App\Imports\AlltendersImport;
use App\Models\Alltender;
use Maatwebsite\Excel\Facades\Excel;
class AlltendersController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function alltenders()
    {
        $data=Alltender::all();
        return view('alltenders', ['alltenders'=>$data]);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportatenders()
    {
        ob_end_clean(); // Löscht den Ausgabe-Puffer und deaktiviert die Ausgabe-Pufferung
        ob_start(); // Ausgabepufferung aktivieren
        return Excel::download(new AlltendersExport, 'alltenders.xlsx');
     # return (new UsersExport)->download('users.xls', \Maatwebsite\Excel\Excel::XLS);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importatenders()
    {
        Excel::import(new AlltendersImport,request()->file('file'));
        return back() -> with('success', "Done");
    }

}
