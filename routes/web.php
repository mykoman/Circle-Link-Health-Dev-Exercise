<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;

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


Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login', [LoginController::class, 'login'])->name("login.login");

Route::post('/logout', [LogoutController::class, 'logout'])->name("logout.logout");

Route::group(['middleware' => ['auth']], function () {

  Route::get('/', [PatientController::class, 'list']);
  Route::get('/patient/create', [PatientController::class, 'create'])->name("patient.create");
  Route::post('/patient/store', [PatientController::class, 'store'])->name("patient.store");
  Route::get('/patient/list', [PatientController::class, 'list'])->name("patient.list");
  Route::get('/patient/details/{id}', [PatientController::class, 'details'])->name("patient.details");

  Route::get('/record/create/{patientId}', [RecordController::class, 'create'])->name("record.create");
  Route::post('/record/store/{patientId}', [RecordController::class, 'store'])->name("record.store");
  Route::get('/record/list/{patientId}', [RecordController::class, 'list'])->name("record.list");
});
