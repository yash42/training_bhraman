<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\Bhraman_detailController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//For header
Route::get('/home/header/index', [HeaderController::class, 'index'])->name('header.index');
Route::get('/home/header/create', [HeaderController::class, 'create'])->name('header.create');
Route::post('/home/header/store', [HeaderController::class, 'store'])->name('header.store');

//For Employee
Route::get('/home/employee/index', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/home/employee/create-new', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/home/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/home/employee/{id}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/home/employee/{id}/update',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/home/employee/{id}/destroy',[EmployeeController::class,'destroy'])->name('employee.destroy');

//for bharaman detail
Route::get('/home/bharama',[Bhraman_detailController::class,'index'])->name('bharam.index');
Route::get('/home/bharama/create',[Bhraman_detailController::class,'create'])->name('bharam.create');