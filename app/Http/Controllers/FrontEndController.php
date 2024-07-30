<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use App\Models\Faq;
use App\Models\Homepage;
use App\Models\Services;
use App\Models\ServiceCategory;
use App\Models\Setting;
use App\Models\Teams;
use App\Models\Testimonial;
use App\Models\Blog;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{



    // Newly Added


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
}
