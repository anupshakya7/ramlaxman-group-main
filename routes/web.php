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
Route::get('/working_benefit_edit/{id}', [AdminController::class, "update_benefit"])->name('update_benefit');
Route::post('/working_benefit_update/{id}', [AdminController::class, "update_working_benefit"])->name('update_working_benefit');
Route::get('/ourTeam', [AdminController::class, "our_team"]);
Route::post('/ourTeam/store', [AdminController::class, "our_team_store"])->name('our_team_store');
Route::get('/ourTeam/{id}', [AdminController::class, "delete_our_team"])->name('delete_our_team');
Route::get('/ourTeamUpdate/{id}', [AdminController::class, "update_our_team"])->name('update_our_team');
Route::post('/ourTeamEdit/{id}', [AdminController::class, "update_OurTeam"])->name('update_OurTeam');
Route::get('/ourCustomer', [AdminController::class, "our_customer"]);
Route::post('/ourCustomer/store', [AdminController::class, "our_customer_store"])->name('our_customer_store');
Route::get('/ourCustomerDelete/{id}', [AdminController::class, "delete_our_customer"])->name('delete_our_customer');
Route::get('/ourCustomerEdit/{id}', [AdminController::class, "update_our_customer"])->name('update_our_customer');
Route::post('/ourCustomerUpdate/{id}', [AdminController::class, "update_OurCustomer"])->name('update_OurCustomer');
Route::get('/ourService',[AdminController::class,"our_service"]);
Route::post('ourService/store', [AdminController::class, "our_service_store"])->name('our_service_store');
