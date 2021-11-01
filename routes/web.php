<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FcrresultsController;
use App\Http\Controllers\FcrtendersController;
use App\Http\Controllers\AlltendersController;
use App\Http\Controllers\FiltersController;
use App\Http\Controllers\ChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
{
   return view('welcome');
});
//
//Route:: post('chart/fetch_data', 'ChartController@fetch_data');
//Route::get('charts', 'ChartController@index');

Route::get('charts',[ChartController::class, 'index']);
Route::post('chart/fetch_data',[ChartController::class, 'fetch_data']);

Route::get('fcrresults',[FcrresultsController::class, 'fcrresults'] )->name('ergebnis');

Route::get('exportresults', [FcrresultsController::class, 'exportresults'])->name('exportresults');

Route::post('importresults', [FcrresultsController::class, 'importresults'])->name('importresults');

Route::get('fcrtenders',[FcrtendersController::class, 'fcrtenders'] )->name('ergebnis');

Route::get('exporttenders', [FcrtendersController::class, 'exporttenders'])->name('exporttenders');

Route::post('importtenders', [FcrtendersController::class, 'importtenders'])->name('importtenders');

Route::get('alltenders',[AlltendersController::class, 'alltenders'] )->name('ergebnis');

Route::get('exportatenders', [AlltendersController::class, 'exportatenders'])->name('exportatenders');

Route::post('importatenders', [AlltendersController::class, 'importatenders'])->name('importatenders');

Route::get('list',[FiltersController::class,'dbOperations']);
