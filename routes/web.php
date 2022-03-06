<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\http\controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DoctorCcontroller;
use App\Http\Controllers\Frontend\CareerContoller;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\PatientContoller;
use App\Http\Controllers\Frontend\TreatmentController;

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
   return view('frontend.index');
});
Route::get('/index',[HomeController::class,'index']);
route::get('/doctors',[DoctorController::class,'doctor'])->name('doctors');
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/NewsNevents',[NewsController::class,'news']);
Route::get('/patient',[PatientController::class,'patient']);
Route::get('/career',[CareerController::class,'career']);

