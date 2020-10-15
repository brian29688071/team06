<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\typhoon;
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

Route::any('/', function () {
    return view('welcome');
});
Route::any('/typhoon',[typhoon::class,'main_view']);

Route::any('/typhoon_add',[typhoon::class,'typhoon_add']);

Route::any('/typhoon/{id}',[typhoon::class,'typhoon_show'])
    ->where('id','[0-9]+')->name('{id}');
Route::any('/typhoon/{id}/edit',[typhoon::class,'typhoon_edit'])
    ->where('id','[0-9]+');


