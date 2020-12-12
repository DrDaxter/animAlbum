<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\charactesrController;
use App\Http\Controllers\indexController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/',[indexController::class,'index']);
Route::get('/lets_stared', [indexController::class, 'getIn']);


Route::resource('/anim', charactesrController::class);