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

        // homepage
        Route::get('homepage', [AdminController::class, 'editHomepage'])->name('homepage.edit');
        Route::put('homepage/update', [AdminController::class, 'updateHomepage'])->name('homepage.update');

        //  about
        Route::get('about', [AdminController::class, 'editabout'])->name('about.edit');
        Route::put('about/update', [AdminController::class, 'updateabout'])->name('about.update');

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
        Route::get('/contact-query', [ContactFormController::class, 'contactqueries'])->name('contact.queries');
        Route::get('/contact-area', [ContactFormController::class, 'editcontact'])->name('contact-area.edit');
        Route::put('/contact-area/update', [ContactFormController::class, 'updatecontact'])->name('contact-area.update');
        Route::get('/contact-query/view/{queryid}', [ContactFormController::class, 'viewquery'])->name('query.view');
        Route::delete('/contact-query/delete/{queryid}', [ContactFormController::class, 'deletequery'])->name('query.delete');

        //  Hire Us Area
        Route::get('/hireus-area', [HireusController::class, 'edit'])->name('hireus.edit');
        Route::put('/hireus-area/update', [HireusController::class, 'update'])->name('hireus.update');
        Route::get('/hireus-query', [HireusController::class, 'hireusqueries'])->name('hireus.query');
        Route::get('/hireus-query/view/{queryid}', [HireusController::class, 'viewquery'])->name('hireus_query.view');
        Route::delete('/hireus-query/delete/{queryid}', [HireusController::class, 'deletequery'])->name('hireus_query.delete');


        //FAQ Area
        Route::get('/faq-area', [FAQController::class, 'edit'])->name('faq-area.edit');
        Route::put('/faq-area/update', [FAQController::class, 'update'])->name('faq-area.update');
        Route::get('/faq-question-answer', [FAQController::class, 'index'])->name('faq.index');
        Route::get('/faq-question-answer/add', [FAQController::class, 'faqadd'])->name('faq.add');
        Route::post('/faq-question-answer/store', [FAQController::class, 'faqstore'])->name('faq.store');
        Route::get('/faq-question-answer/edit/{id}', [FAQController::class, 'faqedit'])->name('faq.edit');
        Route::put('/faq-question-answer/update/{id}', [FAQController::class, 'faqupdate'])->name('faq.update');
        Route::delete('/faq-question-answer/delete/{id}', [FAQController::class, 'faqdelete'])->name('faq.delete');
        


        // Common Settings
        Route::get('setting', [AdminController::class, 'Setting'])->name('setting.edit');
        Route::put('setting/update', [AdminController::class, 'updateSetting'])->name('setting.update');

        
        // homepage
        Route::get('tax-calculator', [AdminController::class, 'edittax'])->name('tax.edit');
        Route::put('tax-calculator/update', [AdminController::class, 'updatetax'])->name('tax.update');

        

    });
});


Route::get('/practice-areas', function () {
    return view('web/practice_areas');
});
Route::get('/services/{serviceSlug}', [FrontEndController::class, 'servicecategory'])->name('category.show');

Route::get('/', function () {
    return view('web/index');
});
Route::get('/services', function(){
    return view('web/services');
});

Route::get('/view_service', function(){
    return view('/web/view_service');
});
Route::get('/lawyers', function(){
    return view('web/lawyers');
});
Route::get('/tax-calculator', function(){
    return view('web/tax_calculator');
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
