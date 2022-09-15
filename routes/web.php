<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesDetailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/details', [ServicesDetailController::class, "index"]);
Route::get('/adminLogin', [AdminController::class, "index"]);
Route::post('/admin', [AdminController::class, "login"]);
Route::view('/adminPage', 'frontend.admin.admin');
Route::get('/header', [AdminController::class, "header"]);
Route::post('/header/{id}', [AdminController::class, "update_header"])->name('update_header');
Route::get('/aboutUs', [AdminController::class, "aboutUs"]);
Route::post('/aboutUs/{id}', [AdminController::class, "update_about"])->name('update_about');
Route::get('/working_benefit', [AdminController::class, "working_benefit"]);
Route::post('/working_benefit/store', [AdminController::class, "working_benefit_store"])->name('working_benefit_store');
Route::get('/working_benefit/{id}', [AdminController::class, "delete_benefits"])->name('delete_benefits');
