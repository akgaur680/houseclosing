<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use App\Models\Faq;
use App\Models\Homepage;
use App\Models\PracticeArea;
use App\Models\PracticeAreaCategory;
use App\Models\Setting;
use App\Models\Teams;
use App\Models\Testimonial;
use App\Models\Blog;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{
   
    public static function practiceAreaData()
    {
        $practiceArea = PracticeArea::with('categories')->first()->toArray();
        return @$practiceArea ? @$practiceArea : [];
    }

   
    public static function about()
    {
        $about = About::first()->toArray();
        return @$about ? @$about : [];
    }

    public static function aboutSectiontwo()
    {
        $aboutSectiontwo = About::first(['section2experiencecount', 'section2shorttitle', 'section2title', 'section2description'])->toArray();
        return @$aboutSectiontwo ? @$aboutSectiontwo : [];
    }

    public function practiceAreaCategoryShow($categorySlug)
    {
        $practiceArea = PracticeAreaCategory::where('slug', $categorySlug)->firstOrFail()->toArray();
        return view('web.view_practice_area', compact('practiceArea'));
    }

    // Newly Added

public function servicecategory($serviceslug)
{
    $serviceArea = ServiceCategory::where('slug', $serviceslug)->firstOrFail()->toArray();
    return view('web.view_service', compact('serviceArea'));
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


