<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdminLog;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;

use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\PagePdfController;
use App\Http\Controllers\Admin\ProductPdfController;
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



//Route::group(['prefix' => 'admin'], function () {

Route::get('/', [AdminAuthController::class, 'login']);
Route::get('login', [AdminAuthController::class, 'login']);
Route::post('authenticate', [AdminAuthController::class, 'authenticate']);
Route::get('forgot-password', [AdminAuthController::class, 'forgotPassword']);
Route::post('reset-password-email', [AdminAuthController::class, 'resetPasswordEmail']);
Route::get('reset-password', [AdminAuthController::class, 'resetPassword']);
Route::post('update-admin-password', [AdminAuthController::class, 'updateAdminPassword']);

Route::middleware([CheckAdminLog::class])->group(function () {

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [DashboardController::class, 'index']);
    });

    Route::group(['prefix' => 'order'], function () {
        Route::get('/', [AdminOrderController::class, 'index']);
        Route::get('view/{order_id}', [AdminOrderController::class, 'view']);
    });

    Route::group(['prefix' => 'payment'], function () {
        Route::get('/', [AdminPaymentController::class, 'index']);
        Route::get('view/{payment_id}', [AdminPaymentController::class, 'view']);
    });


    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('create', [UserController::class, 'create']);
        Route::post('save', [UserController::class, 'save']);
        Route::get('{type}/{id}', [UserController::class, 'action']);
    });

    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', [BannerController::class, 'index']);
        Route::get('create', [BannerController::class, 'create']);
        Route::post('save', [BannerController::class, 'save']);
        Route::get('{type}/{id}', [BannerController::class, 'action']);
    });

    Route::group(['prefix' => 'page'], function () {
        Route::get('/', [CmsController::class, 'index']);
        Route::get('create', [CmsController::class, 'create']);
        Route::post('save', [CmsController::class, 'save']);
        Route::get('{type}/{id}', [CmsController::class, 'action']);
    });

    Route::group(['prefix' => 'page-section'], function () {
        Route::get('/', [CmsController::class, 'sectionIndex']);
        Route::get('create', [CmsController::class, 'sectionCreate']);
        Route::post('save', [CmsController::class, 'sectionSave']);
        Route::get('{type}/{id}', [CmsController::class, 'sectionAction']);
    });

    Route::group(['prefix' => 'faq'], function () {
        Route::get('/', [FaqController::class, 'index']);
        Route::get('create', [FaqController::class, 'create']);
        Route::post('save', [FaqController::class, 'save']);
        Route::get('{type}/{id}', [FaqController::class, 'action']);
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', [MenuController::class, 'index']);
        Route::get('create', [MenuController::class, 'create']);
        Route::post('save', [MenuController::class, 'save']);
        Route::get('{type}/{id}', [MenuController::class, 'action']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index']);
        Route::get('create', [BlogController::class, 'create']);
        Route::post('save', [BlogController::class, 'save']);
        Route::get('{type}/{id}', [BlogController::class, 'action']);
    });

    Route::group(['prefix' => 'download'], function () {
        Route::get('/', [DownloadController::class, 'index']);
        Route::get('create', [DownloadController::class, 'create']);
        Route::post('save', [DownloadController::class, 'save']);
        Route::get('{type}/{id}', [DownloadController::class, 'action']);
    });

    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', [PartnerController::class, 'index']);
        Route::get('create', [PartnerController::class, 'create']);
        Route::post('save', [PartnerController::class, 'save']);
        Route::get('{type}/{id}', [PartnerController::class, 'action']);
    });
    Route::group(['prefix' => 'pdf'], function () {
        Route::get('/', [PagePdfController::class, 'index']);
        Route::get('create', [PagePdfController::class, 'create']);
        Route::post('save', [PagePdfController::class, 'save']);
        Route::get('{type}/{id}', [PagePdfController::class, 'action']);
    });
    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('/', [TestimonialController::class, 'index']);
        Route::get('create', [TestimonialController::class, 'create']);
        Route::post('save', [TestimonialController::class, 'save']);
        Route::get('{type}/{id}', [TestimonialController::class, 'action']);
    });

    Route::group(['prefix' => 'enquiry'], function () {
        Route::get('/', [EnquiryController::class, 'index']);
        Route::get('{type}/{id}', [EnquiryController::class, 'action']);
    });

    Route::group(['prefix' => 'subscriber'], function () {
        Route::get('/', [SubscriberController::class, 'index']);
        Route::get('{type}/{id}', [SubscriberController::class, 'action']);
    });


    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('create', [CategoryController::class, 'create']);
        Route::post('save', [CategoryController::class, 'save']);
        Route::get('{type}/{id}', [CategoryController::class, 'action']);
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('create', [ProductController::class, 'create']);
        Route::post('save', [ProductController::class, 'save']);
        Route::get('{type}/{id}', [ProductController::class, 'action']);

        //Route::resource('/productimage', ProductImageController::class);
        //Route::get('/productimage/status/{product}/{status}/{id}', [ProductImageController::class, 'status'])->name('admin.productimage.status');
    });
    Route::group(['prefix' => 'product-image'], function () {
        Route::get('/', [ProductImageController::class, 'index'])->name('productimage.index');
        Route::get('create', [ProductImageController::class, 'create'])->name('productimage.create');
        Route::post('save', [ProductImageController::class, 'store'])->name('productimage.store');
        //Route::post('edit/{productimage}', [ProductImageController::class, 'store'])->name('productimage.store');

        Route::get('edit/{id}', [ProductImageController::class, 'edit'])->name('productimage.edit');
        Route::put('update/{id}', [ProductImageController::class, 'update'])->name('productimage.update');
        Route::delete('delete/{id}', [ProductImageController::class, 'destroy'])->name('productimage.destroy');

        Route::get('/productimage/status/{product}/{status}/{id}', [ProductImageController::class, 'status'])->name('productimage.status');
        Route::get('{type}/{id}', [ProductImageController::class, 'action']);
    });
    Route::group(['prefix' => 'product-pdf'], function () {
        Route::get('/', [ProductPdfController::class, 'index'])->name('productpdf.index');
        Route::get('create', [ProductPdfController::class, 'create'])->name('productpdf.create');
        Route::post('save', [ProductPdfController::class, 'save'])->name('productpdf.save');
        //Route::get('{type}/{id}', [ProductPdfController::class, 'action']);

        //Route::get('edit/{id}', [ProductPdfController::class, 'edit'])->name('productpdf.edit');
        //Route::put('update/{id}', [ProductPdfController::class, 'update'])->name('productpdf.update');
        //Route::delete('delete/{id}', [ProductPdfController::class, 'destroy'])->name('productpdf.destroy');

        Route::get('/productpdf/status/{product}/{status}/{id}', [ProductPdfController::class, 'status'])->name('productpdf.status');
        Route::get('{type}/{id}', [ProductPdfController::class, 'action'])->name('productpdf.action');
    });
    Route::get('setting', [DashboardController::class, 'setting']);
    Route::post('profile-update', [DashboardController::class, 'updateProfile']);
    Route::post('save-profile-image', [DashboardController::class, 'saveProfileImage']);
    Route::post('save-profile-cover-image', [DashboardController::class, 'saveProfileCoverImage']);
    Route::post('update-general-setting', [DashboardController::class, 'updateGeneralSetting']);
    Route::post('update-password', [DashboardController::class, 'updatePassword']);
    Route::get('admin-logout', [DashboardController::class, 'adminLogout']);
});
//});
