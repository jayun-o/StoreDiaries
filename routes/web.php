<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\HomeController;

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
Route::get('/home', function () {
    return view('home');
})->name('home');



Route::get('/', [DashboardController::class,'index'])->name('dashboard');

// Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/income', [IncomeController::class,'index'])->name('income');

Route::get('/expenses', [ExpensesController::class,'index'])->name('expenses'); //dont forget to change controller name

Route::get('/salesReport', [IncomeController::class,'index'])->name('salesReport'); //dont forget to change controller name
