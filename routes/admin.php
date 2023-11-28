<?php

//use App\Http\Livewire\Admin\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginController;

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login');
