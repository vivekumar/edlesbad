<?php

//use App\Http\Livewire\Admin\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AdminAuthenticate;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;




Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');


Route::group(['namespace' => 'Admin', 'middleware' => ['auth.admin:web'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
