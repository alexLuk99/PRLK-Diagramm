<?php

namespace App\Http\Controllers;
use App\Models\Fcrresult;


use Illuminate\Http\Request;

class TempController extends Controller
{
  public function index( )
  {
    $data=Fcrresult::all();
    return view('index', compact('data'));
  }
}
