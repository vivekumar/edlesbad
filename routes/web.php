<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckUserLog;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {    
//     return view('frontend.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashbaord', [HomeController::class, 'dashbaord'])->name('dashbaord');
Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blogDetail');
Route::get('/inspiration', [HomeController::class, 'inspiration'])->name('inspiration');
Route::get('/kategorien', [HomeController::class, 'kategorien'])->name('kategorien');
Route::get('/produkte', [HomeController::class, 'product'])->name('product');
Route::get('/produkte-details', [HomeController::class, 'productDetals'])->name('productDetals');
Route::get('/ueber-uns-edlesbad', [HomeController::class, 'ueberUnsEdlesbad'])->name('ueberUnsEdlesbad');
Route::get('/unsere-lieferanten', [HomeController::class, 'unsereLieferanten'])->name('unsereLieferanten');
//Route::post('/admin', [LoginController::class, 'checkAuth'])->name('login');
Route::post('user-auth/{type}', [UserController::class, 'userAuth']);

Route::middleware([CheckUserLog::class])->group(function () {
    Route::get('myaccount', [UserController::class, 'myaccount']);
    Route::get('order-details/{id}', [UserController::class, 'orderDetails']);
    Route::get('my-profile', [UserController::class, 'myProfile']);
    Route::post('update-profile', [UserController::class, 'updateProfile']);
    Route::get('change-password', [UserController::class, 'changePassword']);
    Route::get('reset-password', [UserController::class, 'resetPassword']);
    Route::post('update-user-password', [UserController::class, 'updateUserPassword']);
    Route::get('account-verify', [UserController::class, 'accountVerify']);
    Route::get('user-verify', [UserController::class, 'userVerify']);
    Route::get('logout', [UserController::class, 'logout']);
});

//Route::get('/{slug}', [HomeController::class, 'category'])->name('category1');
Route::get('/{category}', [HomeController::class, 'category'])->name('category.show')->where('category', '.*');
