<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dependent_CuntryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\leadsController;
// use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/',[Dependent_CuntryController::class,'Index']);
Route::post('/getstate/{id}',[Dependent_CuntryController::class,'getstate']);
Route::post('/getcity/{id}',[Dependent_CuntryController::class,'City']);

// *************************************
//admin dashboard Route Start here
//**************************************
// Route::get("admin/",[]);
Route::get('admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/dashboard/users',[UserController::class,'index']);
Route::get('/admin/dashboard/faq',[FaqController::class,'index']);
Route::get('/admin/dashboard/leads',[leadsController::class,'index']);
// Route::get('/admin/country/{country}/province',[PDFController::class,'adminProvince']);
// Route::get('/admin/country/{country}/province/{province}',[PDFController::class,'adminProvince']);

