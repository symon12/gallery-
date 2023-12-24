<?php

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\testController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get("/dashboard",[DashboardController::class,"Dashboard"])->name("dashboard");
// Route::get("/form/create",[FormController::class,"form"])->name("form");
// Route::post("/form",[FormController::class,"store"])->name("form.store");

// Route::get("/chart",[ChartController::class,"chart"])->name("chart");

// Route::get("/album",[AlbumController::class,"album"])->name("album");

// Route::get("/show",[AlbumController::class,"show"])->name("album.index");

Route::get("/album/dashboard",[AlbumController::class,"index"])->name("album.index");

Route::get("/create/form",[AlbumController::class,"create"])->name("form.create");
Route::post("/form",[AlbumController::class,"store"])->name("form.store");
Route::get("/album/show",[AlbumController::class,"show"])->name("album.show");
Route::delete("/album/{id}",[AlbumController::class,"destroy"])->name("album.destroy");

Route::get("/album/{album}/edit",[AlbumController::class,"edit"])->name("album.edit");

Route::put('/album/{album}', [AlbumController::class,"update"])->name('album.update');





