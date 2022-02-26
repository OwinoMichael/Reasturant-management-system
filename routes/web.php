<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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


// Route::get('admin',[HomeController::class,'admin'])->name('admin');

Route::get("/", [HomeController::class, "index"]);

Route::get("/users", [AdminController::class, "user"]);

Route::get("/deletemenu/{id}", [AdminController::class, "deletemenu"]);

Route::get("/updateview/{id}", [AdminController::class, "updateview"]);

Route::get("/updatechef/{id}", [AdminController::class, "updatechef"]);

Route::post("/updatefoodchef/{id}", [AdminController::class, "updatefoodchef"]);

Route::post("/update/{id}", [AdminController::class, "update"]);

Route::post("/reservation", [AdminController::class, "reservation"]);

Route::post("/uploadchef", [AdminController::class, "uploadchef"]);

Route::get("/foodmenu", [AdminController::class, "foodmenu"]);

Route::get("/deletechef/{id}", [AdminController::class, "deletechef"]);

Route::post("/addcart/{id}", [HomeController::class, "addcart"]);

Route::get("/viewreservation", [AdminController::class, "viewreservation"]);

Route::get("/viewchef", [AdminController::class, "viewchef"]);

Route::post("/uploadfood", [AdminController::class, "uploadfood"]);

Route::get("/deleteusers/{id}", [AdminController::class, "deleteuser"]);

Route::get("/redirects", [HomeController::class, "redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
