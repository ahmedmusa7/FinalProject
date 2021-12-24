<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProjectController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/",[homeControl::class,"index"]);
Route::get("/users",[adminControl::class,"user"]);
Route::get("/deleteuser/{id}",[adminControl::class,"deleteuser"]);
Route::resource('team',TeamController::class);
Route::resource('project',ProjectController::class);


Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
