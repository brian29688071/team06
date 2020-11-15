<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TyphoonController;
use App\Http\Controllers\LevelController;
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
Route::any('/typhoon',[TyphoonController::class,'main_view']);
Route::any('/typhoon_add',[TyphoonController::class,'typhoon_add']);
Route::any('/typhoon/{id}',[TyphoonController::class,'typhoon_show'])
    ->where('id','[0-9]+');
Route::any('/typhoon/{id}/edit',[TyphoonController::class,'typhoon_edit'])
    ->where('id','[0-9]+');
Route::any('/typhoon_edit_updating',[TyphoonController::class,'typhoon_edit_updating']);
Route::any('/typhoon_add_updating',[TyphoonController::class,'typhoon_add_updating']);
Route::any('/level',[LevelController::class,'main_view']);
Route::any('/level_add',[LevelController::class,'level_add']);
Route::any('/level/{id}',[LevelController::class,'level_show'])
    ->where('id','[0-9]+');
Route::any('/level/{id}/edit',[LevelController::class,'level_edit'])
    ->where('id','[0-9]+');
Route::any('/level_edit_updating',[LevelController::class,'level_edit_updating']);
Route::any('/level_add_updating',[LevelController::class,'level_add_updating']);


