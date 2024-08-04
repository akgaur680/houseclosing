<?php

use App\Http\Controllers\FAQController;
use App\Http\Controllers\HireusController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LawyersController;
use App\Http\Controllers\LawyerMemberController;

// Admin routes
Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
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

        //  faq

        //  about
        Route::get('about', [AdminController::class, 'editabout'])->name('about.edit');
        Route::put('about/update', [AdminController::class, 'updateabout'])->name('about.update');


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
        Route::get('add-service-category', [ServiceCategoryController::class, 'add'])->name('add-service-category.add');

        //Lawyers Area
        Route::get('/lawyers-area', [LawyersController::class, 'edit'])->name('lawyers-area.edit');
        Route::put('/lawyers-area/update', [LawyersController::class, 'update'])->name('lawyers-area.update');

        //Lawyer Member Area
        Route::get('lawyer-member-area', [LawyerMemberController::class, 'index'])->name('lawyer-member.index');
        //Add new Lawyer
        Route::get('add-lawyer', [LawyerMemberController::class, 'add'])->name('add-lawyer.add');
        Route::post('add-lawyer', [LawyerMemberController::class, 'store'])->name('add-lawyer.store');
        //Edit Lawyer
        Route::get('edit-lawyer/{id}', [LawyerMemberController::class, 'edit'])->name('lawyer-member.edit');
        Route::put('update-lawyer/{id}', [LawyerMemberController::class, 'update'])->name('lawyer-member.update');
        //Delete Lawyer
        Route::delete('delete-lawyer/{id}', [LawyerMemberController::class, 'delete'])->name('lawyer-member.destroy');


        //Testimonials
        Route::get('testimonials', [TestimonialsController::class, 'index'])->name('testimonial.index');
        Route::get('testimonial/create', [TestimonialsController::class, 'create'])->name('testimonial.create');
        Route::post('testimonial/store', [TestimonialsController::class, 'store'])->name('testimonial.store');
        Route::get('testimonial/edit/{id}', [TestimonialsController::class, 'edit'])->name('testimonial.edit');
        Route::put('testimonial/update/{id}', [TestimonialsController::class, 'update'])->name('testimonial.update');
        Route::get('testimonial/delete/{id}', [TestimonialsController::class, 'destroy'])->name('testimonial.destroy');


       //Contact Us Page Area
       Route::get('/contact-query', [AdminController::class, 'contactqueries'])->name('contact.queries');
        Route::get('/contact-area', [AdminController::class, 'editcontact'])->name('contact-area.edit');
        Route::put('/contact-area/update', [AdminController::class, 'updatecontact'])->name('contact-area.update');

        //  Hire Us Area
        Route::get('/hireus-area', [HireusController::class, 'edit'])->name('hireus.edit');
        Route::put('/hireus-area/update', [HireusController::class, 'update'])->name('hireus.update');
        Route::get('/hireus-query', [AdminController::class, 'hireusqueries'])->name('hireus.query');

        //FAQ Area
        Route::get('/faq-area', [FAQController::class, 'edit'])->name('faq-area.edit');
        Route::put('/faq-area/update', [FAQController::class, 'update'])->name('faq-area.update');
        Route::get('/faq-question-answer', [FAQController::class, 'index'])->name('faq.index');
        Route::get('/faq-question-answer/add', [FAQController::class, 'faqadd'])->name('faq.add');
        Route::post('/faq-question-answer/store', [FAQController::class, 'faqstore'])->name('faq.store');
        Route::get('/faq-question-answer/edit/{id}', [FAQController::class, 'faqedit'])->name('faq.edit');
        Route::get('/faq-question-answer/update/{id}', [FAQController::class, 'faqupdate'])->name('faq.update');
        Route::get('/faq-question-answer/delete/{id}', [FAQController::class, 'faqdelete'])->name('faq.delete');
        


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
Route::get('/lawyers', function(){
    return view('web/lawyers');
});
Route::get('/calculate-tax', function(){
    return view('web/calculate-tax');
});
Route::get('/about', function(){
    return view('web/about');
});
Route::get('/contactus',[ContactFormController::class, 'view'])->name('contact.view');
Route::get('/contact', [ContactFormController::class, 'show'])->name('contact.show');
Route::post('/contact-form/submit', [ContactFormController::class, 'store'])->name('contact.store');
Route::get('/hire-us', function(){
    return view('web/hireus');
});
Route::post('/hireus-form', [HireusController::class, 'storehireusform'])->name('hireus.store');
Route::get('/faq', function(){
    return view('web/faq');
});
