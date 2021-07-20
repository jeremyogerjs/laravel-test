<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reservation;
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

Route::get('/admin',[Reservation::class,'index']);
Route::get('/reservation/create',[Reservation::class,'create']);
Route::post('/reservation',[Reservation::class,'store']);

Route::get('/', function () {
    return view('welcome');
});
