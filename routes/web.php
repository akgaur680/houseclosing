<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\PracticeAreaController;
use App\Http\Controllers\PracticeAreaCategoryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\TaxController;

// Admin routes
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AdminAuthController::class, 'login'])->name('login.submit');
Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Admin dashboard (protected by auth middleware)
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');

        //  pages
        Route::get('/pages', [AdminController::class, 'index'])->name('pages.index');;
        Route::get('/pages/create', [AdminController::class, 'create'])->name('pages.create');
        Route::post('/pages', [AdminController::class, 'store'])->name('pages.store');
        Route::get('pages/{page}/edit', [AdminController::class, 'edit'])->name('pages.edit');
        Route::put('pages/{page}', [AdminController::class, 'update'])->name('pages.update');
        Route::delete('pages/{page}', [AdminController::class, 'delete'])->name('pages.delete');

        // homepage
        Route::get('homepage', [AdminController::class, 'editHomepage'])->name('homepage.edit');
        Route::put('homepage/update', [AdminController::class, 'updateHomepage'])->name('homepage.update');

        //  testimonial
        Route::get('/testimonials', [AdminController::class, 'testimonialIndex'])->name('testimonials.index');
        Route::get('/testimonials/create', [AdminController::class, 'testimonialCreate'])->name('testimonials.create');
        Route::post('/testimonials', [AdminController::class, 'testimonialStore'])->name('testimonials.store');
        Route::get('/testimonials/{testimonial}/edit', [AdminController::class, 'testimonialEdit'])->name('testimonials.edit');
        Route::put('/testimonials/{testimonial}', [AdminController::class, 'testimonialUpdate'])->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', [AdminController::class, 'testimonialDelete'])->name('testimonials.delete');

        //  faq
        Route::get('faq', [AdminController::class, 'Faq'])->name('faq.edit');
        Route::put('faq/update', [AdminController::class, 'updateFaq'])->name('faq.update');

        //  about
        Route::get('about', [AdminController::class, 'editAbout'])->name('about.edit');
        Route::put('about/update', [AdminController::class, 'updateAbout'])->name('about.update');

        //  experiences
        Route::get('experiences', [AdminController::class, 'experience'])->name('experience.edit');
        Route::put('experience/update', [AdminController::class, 'updateExperience'])->name('experience.update');

        //  practice areas
        Route::get('practice-areas', [PracticeAreaController::class, 'edit'])->name('practice-area.edit');
        Route::put('practice-area/update', [PracticeAreaController::class, 'update'])->name('practice-area.update');


        Route::get('practice-area-categories', [PracticeAreaCategoryController::class, 'index'])->name('practice-area-categories.index');
        Route::get('practice-area-categories/{id}', [PracticeAreaCategoryController::class, 'show'])->name('practice-area-categories.show');
        Route::post('practice-area-categories', [PracticeAreaCategoryController::class, 'store'])->name('practice-area-categories.store');
        Route::put('practice-area-categories/{id}', [PracticeAreaCategoryController::class, 'update'])->name('practice-area-categories.update');
        Route::delete('practice-area-categories/{id}', [PracticeAreaCategoryController::class, 'destroy'])->name('practice-area-categories.destroy');

        //  teams
        Route::get('teams', [TeamController::class, 'edit'])->name('teams.edit');
        Route::put('teams/update', [TeamController::class, 'update'])->name('teams.update');


        Route::get('team_members', [TeamMemberController::class, 'index'])->name('team_member.index');
        Route::get('team_members/{id}', [TeamMemberController::class, 'show'])->name('team_member.show');
        Route::post('team_member', [TeamMemberController::class, 'store'])->name('team_member.store');
        Route::put('team_member/{id}', [TeamMemberController::class, 'update'])->name('team_member.update');
        Route::delete('team_member/{id}', [TeamMemberController::class, 'destroy'])->name('team_member.destroy');

        //blog
        Route::get('/blogs', [blogsController::class, 'index'])->name('blogs.index');
        Route::get('/blogs/create', [blogsController::class, 'create'])->name('blogs.create');
        Route::post('/blogs/update', [blogsController::class, 'store'])->name('blogs.store');
        Route::get('blogs/edit/{id}', [blogsController::class, 'edit'])->name('blogs.edit');
        Route::put('blogs/update/{id}', [blogsController::class, 'update'])->name('blogs.update');
        Route::delete('blogs/delete/{id}', [blogsController::class, 'delete'])->name('blogs.delete');


        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/{category}', [CategoryController::class, 'delete'])->name('category.delete');

        //Query Forms
        Route::get('/query-forms', [AdminController::class, 'queryFormsIndex'])->name('query_forms.index');
        Route::get('/query-forms/view/{queryForm}', [AdminController::class, 'viewQueryForm'])->name('query_forms.view');
        Route::delete('/query-forms/{id}', [AdminController::class, 'deleteQueryForm'])->name('query_forms.delete');
    

        // setting
        Route::get('setting', [AdminController::class, 'Setting'])->name('setting.edit');
        Route::put('setting/update', [AdminController::class, 'updateSetting'])->name('setting.update');

    });
});


Route::get('/about', function () {
    return view('web/about');
});

Route::get('/practice-areas', function () {
    return view('web/practice_areas');
});
Route::get('/practice-areas/{categorySlug}', [FrontEndController::class, 'practiceAreaCategoryShow'])->name('category.show');

Route::get('/faq', function () {
    return view('web/faq');
});
Route::get('/team', function () {
    return view('web/team');
});

Route::get('/contact', [ContactFormController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');

Route::get('/blogs', function () {
    return view('web/blog');
});
// Route::get('/blog/{slug}', function () {
//     return view('web/single_blog');
// });
Route::get('/blog/{slug}', [FrontEndController::class, 'showBlog'])->name('blog.show');


Route::get('/privacy-policy', function () {
    return view('web/privacy_policy');
});

Route::get('/book-appointment', function () {
    return view('web/appointment');
});

Route::get('tax-calculator', [FrontEndController::class, 'tax_calculator'])->name('tax_calculator');

Route::get('/tax_settings', [TaxController::class, 'getTaxSettings']);


//Added New Routes

Route::get('/', function () {
    return view('web/index');
});
Route::get('/login', function(){
    return view('web/login');
});

Route::get('/register', function(){
    return view('web/register');
});
Route::get('/calculate-mortgage', function(){
    return view('web/calculate-mortgage');
});
Route::get('/services', function(){
    return view('web/services');
})->name('services');
Route::get('/services/{serviceslug}',[FrontEndController::class, 'servicecategory'])->name('service.show');

Route::get('/quote', function(){
    return view('web/quote');
}); 
Route::get('/view_service', function(){
    return view('/web/view_service');
});