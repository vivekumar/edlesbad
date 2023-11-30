<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\HomeController;
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
    // return view('welcome');
    return view('frontend.index');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashbaord', [HomeController::class, 'dashbaord'])->name('dashbaord');
Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HomeController::class, 'blogDetail'])->name('blogDetail');
Route::get('/inspiration', [HomeController::class, 'inspiration'])->name('inspiration');
Route::get('/kategorien', [HomeController::class, 'kategorien'])->name('kategorien');
Route::get('/produkte', [HomeController::class, 'product'])->name('product');
Route::get('/produkte-details', [HomeController::class, 'productDetals'])->name('productDetals');
Route::get('/ueber-uns-edlesbad', [HomeController::class, 'ueberUnsEdlesbad'])->name('ueberUnsEdlesbad');
Route::get('/unsere-lieferanten', [HomeController::class, 'unsereLieferanten'])->name('unsereLieferanten');
//Route::post('/admin', [LoginController::class, 'checkAuth'])->name('login');
