<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/products", [ProductController::class, "show"]);
Route::get("/insert", [ProductController::class, "insert"]);
Route::post("/submit", [ProductController::class, "submit"]);

Route::view('/noaccess','noAccessPage');

Route::view('updateForm',"ProductUpdate");

Route::put("update", [ProductController::class, "update"]);