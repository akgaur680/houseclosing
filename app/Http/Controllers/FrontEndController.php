<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use App\Models\Faq;
use App\Models\HireusArea;
use App\Models\Homepage;
use App\Models\Lawyers;
use App\Models\Services;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\Models\Teams;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Testimonials;
use App\Models\ContactArea;
use App\Models\FAQArea;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{



    public static function servicesdata()
    {
        $services = Services::with('categories')->first()->toArray();
        return @$services ? @$services : [];
    }

    public function servicecategory($serviceSlug)
    {
        $servicecategory = ServiceCategory::where('slug', $serviceSlug)->firstOrFail()->toArray();
        return view('web.view_service', compact('servicecategory'));
    }

    public static function settings()
    {
        $settings = Setting::first();
        return @$settings ? @$settings : [];
    }
    public static function Homepage()
    {
        $homepage = Homepage::first();
        return @$homepage ? @$homepage : [];
    }
    public static function lawyers()
    {
        $lawyers = Lawyers::with('members')->first()->toArray();
        return @$lawyers ? @$lawyers : [];
    }
    public static function testimonials(){

        $testimonials = Testimonials::all();
        return @$testimonials ? @$testimonials : [];
    }
    public static function about(){
        $about = About::first();
        return @$about ? @$about : [];
    }
    public static function contact(){
        $contact =ContactArea::first();
        return @$contact ? @$contact : [];
    }
    public static function hireus(){
        $hire =HireusArea::first()->toArray();
        return @$hire ? @$hire : [];
    }
    public static function faq(){
        $faq = FAQArea::with('faqs')->first()->toArray();
        return @$faq ? @$faq : [];
    }
    
}
