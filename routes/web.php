<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DashboardBooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLibrariansController;
use App\Http\Controllers\DashboardMembersController;
use App\Http\Controllers\DashboardReportsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ReturnRentController;
use App\Http\Controllers\VerifController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/books', [BooksController::class, 'index']);
Route::get('/books/{book:slug}', [BooksController::class, 'detail']);
Route::middleware(['guest'])->group(function () {
  Route::get('/login', [AuthController::class, 'loginView']);
  Route::post('/login', [AuthController::class, 'login']);
  Route::get('/register', [AuthController::class, 'registerView']);
  Route::get('/register/success', [AuthController::class, 'registerSuccess']);
  Route::post('/register', [AuthController::class, 'register']);
});
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::middleware(['entitled'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::resource('/dashboard/books', DashboardBooksController::class);
  Route::resource('/dashboard/reports', DashboardReportsController::class);
  Route::get('/dashboard/books/add/checkSlug', [DashboardBooksController::class, 'checkSlug']);
  Route::resource('/dashboard/members', DashboardMembersController::class);
  Route::get('/dashboard/members/changepassword/{id}', [DashboardMembersController::class, 'changePassView']);
  Route::post('/dashboard/members/changepassword/{id}', [DashboardMembersController::class, 'changePass']);
  Route::resource('/dashboard/librarians', DashboardLibrariansController::class);
  Route::get('/dashboard/librarians/changepassword/{id}', [DashboardLibrariansController::class, 'changePassView']);
  Route::post('/dashboard/librarians/changepassword/{id}', [DashboardLibrariansController::class, 'changePass']);
  Route::get('/dashboard/verif', [VerifController::class, 'index']);
  Route::post('/dashboard/verif', [VerifController::class, 'search']);
  Route::get('/dashboard/verif/found', [VerifController::class, 'found']);
  Route::post('/dashboard/verif/found', [VerifController::class, 'verif']);
  Route::get('/dashboard/returnrent', [ReturnRentController::class, 'index']);
});
Route::middleware(['member'])->group(function () {
  Route::post('/rent', [RentController::class, 'store']);
  Route::get('/history', [HistoryController::class, 'index']);
  Route::get('/history/{rent:kode_peminjaman}', [HistoryController::class, 'detail']);
  Route::post('/history/{rent:kode_peminjaman}', [HistoryController::class, 'cancelRent']);
});
