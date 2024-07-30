<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\FrontEndController;

// Admin routes
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Admin dashboard (protected by auth middleware)
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');

        //  pages
        // homepage
        Route::get('homepage', [AdminController::class, 'editHomepage'])->name('homepage.edit');
        Route::put('homepage/update', [AdminController::class, 'updateHomepage'])->name('homepage.update');

        //  testimonial
        //  faq

        //  about
        //  experiences
        //  Services areas
        Route::get('/services-areas', [ServicesController::class, 'edit'])->name('service-area.edit');
        Route::put('/services-areas/update', [ServicesController::class, 'update'])->name('service-area.update');

        // Service Category Area
        Route::get('service-area-categories', [ServiceCategoryController::class, 'index'])->name('service-area-categories.index');
        Route::get('edit-service-category/{id}', [ServiceCategoryController::class, 'show'])->name('service-area-categories.show'); // View of Edit Page
        Route::post('add-service-category', [ServiceCategoryController::class, 'store'])->name('add-service-category.store');
        Route::put('service-area-categories/{id}', [ServiceCategoryController::class, 'update'])->name('service-area-categories.update');
        Route::delete('service-area-categories/{id}', [ServiceCategoryController::class, 'destroy'])->name('service-area-categories.destroy');

        Route::get('add-service-category', function(){
            return view('admin/add_service_category');
        });


        //  teams


        //Query Forms
        // setting
        Route::get('setting', [AdminController::class, 'Setting'])->name('setting.edit');
        Route::put('setting/update', [AdminController::class, 'updateSetting'])->name('setting.update');

    });
});


Route::get('/practice-areas', function () {
    return view('web/practice_areas');
});
Route::get('/service-areas/{serviceSlug}', [FrontEndController::class, 'servicecategory'])->name('category.show');


//Added New Routes

Route::get('/', function () {
    return view('web/index');
});
Route::get('/login', function(){
    return view('web/login');
});

Route::get('/services', function(){
    return view('web/services');
});
Route::get('/register', function(){
    return view('web/register');
});
Route::get('/calculate-mortgage', function(){
    return view('web/calculate-mortgage');
});

Route::get('/view_service', function(){
    return view('/web/view_service');
});