<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register/submit', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/submit', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', [dashboardController::class, 'showDashboard'])->name('dashboard');
Route::post('/dashboard/submit-lahan', [DashboardController::class, 'submitLahan'])->name('dashboard.submitLahan');
// Route::put('/dashboard/lahan/{id}/edit', [DashboardController::class, 'update'])->name('lahan.update');
Route::post('/dashboard/update-lahan/{id}', [DashboardController::class, 'updateLahan'])->name('dashboard.updateLahan');
Route::post('/dashboard/delete-lahan/{id}', [DashboardController::class, 'deleteLahan'])->name('dashboard.deleteLahan');

Route::get('/dashboard/tambah-stok', [DashboardController::class, 'addStok'])->name('dashboard.addStok');
Route::post('/dashboard/submit-stok', [DashboardController::class, 'submitStok'])->name('dashboard.submitStok');
Route::get('/dashboard/edit-stok/{id}', [DashboardController::class, 'editStok'])->name('dashboard.editStok');
Route::post('/dashboard/update-stok/{id}', [DashboardController::class, 'updateStok'])->name('dashboard.editStok');
Route::post('/dashboard/delete-stok/{id}', [DashboardController::class, 'deleteStok'])->name('dashboard.deleteStok');

Route::get('/account', [AccountController::class, 'showAccountForm'])->name('account');
Route::put('/account/update/{id}', [AccountController::class, 'update'])->name('account.update');
