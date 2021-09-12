<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ItemController::class,"index"])->name('home');
Route::get("/filter/{id}",[ItemController::class,"filter"])->name('filter');
Route::get("/search",[ItemController::class,"search"])->name('search');
Route::get("/view/{itemId}/category/{catId}",[ItemController::class,"view"])->name("view");
Route::match(["get","post"], '/register',[ItemController::class,"register"])->name("register");
Route::match(["get","post"], '/login',[ItemController::class,"login"])->name("login");



 Route::group(["middleware"=>"logincheck"],function(){
    Route::match(["get","post"],'/insertItem', [ItemController::class,"insert"])->name("insert");
    Route::post('/insertcat', [ItemController::class,"insertcat"])->name("insertcat");
    Route::get("/logout",[ItemController::class,"logout"])->name("logout");

 });
