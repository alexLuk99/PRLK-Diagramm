<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\FcrtendersExport;
use App\Imports\FcrtendersImport;
use App\Models\Fcrtender;
use Maatwebsite\Excel\Facades\Excel;
class FcrtendersController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fcrtenders()
    {
        $data=Fcrtender::all();
        return view('fcrtenders', ['fcrtenders'=>$data]);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exporttenders()
    {
        ob_end_clean(); // Löscht den Ausgabe-Puffer und deaktiviert die Ausgabe-Pufferung
        ob_start(); // Ausgabepufferung aktivieren
        return Excel::download(new FcrtendersExport, 'fcrtenders.xlsx');
     # return (new UsersExport)->download('users.xls', \Maatwebsite\Excel\Excel::XLS);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importtenders()
    {
        Excel::import(new FcrtendersImport,request()->file('file'));
        return back() -> with('success', "Done");
    }

}
