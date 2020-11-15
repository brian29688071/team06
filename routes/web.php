<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TyphoonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|------------   --------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function () {
    return view('welcome');
});
Route::any('/typhoon',[TyphoonController::class,'main_view']);
Route::any('/typhoon_add',[TyphoonController::class,'typhoon_add']);
Route::any('/typhoon/{id}',[TyphoonController::class,'typhoon_show']);
Route::any('/typhoon/{id}/edit',[TyphoonController::class,'typhoon_edit']);
Route::any('/typhoon_edit_updating',[TyphoonController::class,'typhoon_edit_updating']);
Route::any('/typhoon_add_updating',[TyphoonController::class,'typhoon_add_updating']);


