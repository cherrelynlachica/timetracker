<?php
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/{role}', 'DashboardController@chooseRole')->name('dashboard.role');
Route::get('/dashboard/{role}/placeholder', 'DashboardController@placeholder')->name('dashboard.placeholder');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('login');
