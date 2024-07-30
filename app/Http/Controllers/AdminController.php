<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Homepage;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\About;
use App\Models\Experience;
use App\Models\Setting;
use App\Models\QueryForm;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Pages Index.
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages', compact('pages'));
    }

    // Function for creating the pages.
    public function create()
    {
        return view('admin.add_page');
    }

    // Function for storing the pages.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug',
            'sequence' => 'required|integer',
        ]);

        Page::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'sequence' => $request->sequence,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
    }

    // Function for editing the pages.
    public function edit(Page $page)
    {
        return view('admin.edit_page', compact('page'));
    }

    // Function for updating the pages.
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'sequence' => 'required|integer',
        ]);

        $page->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'sequence' => $request->sequence,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }

    // Function for deleting the pages.
    public function delete(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
    }

    // Function for editing the homepage
    public function editHomepage()
    {
        $homepage = Homepage::first();
        if (!$homepage) {
            $homepage = new Homepage();
        }
        return view('admin.edit_homepage', compact('homepage'));
    }

    // Function for updating the homepage.
    public function updateHomepage(Request $request)
    {
        $request->validate([
            'header_title' => 'required|string|max:255',
            'header_description' => 'required|string|max:255',
            'header_img' => 'nullable|image|max:2048',
            'header_img2' => 'nullable|image|max:2048',
            'header_button_label1' => 'required|string|max:255',
            'header_button_link1' => 'required|string|max:255',
            'header_button_label2' => 'required|string|max:255',
            'header_button_link2' => 'required|string|max:255',
            'section1_img' => 'nullable|image|max:2048',
            'section1_card1_title' => 'required|string|max:255',
            'section1_card1_description' => 'required|string|max:255',
            'section1_card2_title' => 'required|string|max:255',
            'section1_card2_description' => 'required|string|max:255',
            'section1_card3_title' => 'required|string|max:255',
            'section1_card3_description' => 'required|string|max:255',
            'section2_title' => 'required|string|max:255',
            'section2_description' => 'required|string|max:255',
            'section2_img1' => 'nullable|image|max:2048',
            'section2_img2' => 'nullable|image|max:2048',
            'section2_successrate' => 'required|string|max:255',
            'section2_casesdone' => 'required|string|max:255',
            'section2_years_in_business' => 'required|string|max:255',
            'section2_button_label' => 'required|string|max:255',
            'section2_button_link' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);

        $homepage = new Homepage;
        $newData = $request->except(['header_img', 'header_img2', 'section1_img', 'section2_img1', 'section2_img2', 'meta_img']);
        $homepage = Homepage::first();


        // $factsData = $request->input('facts', []);


        if ($request->hasFile('header_img')) {
            $headerBgImage = $request->file('header_img');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $newData['header_img'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }
        if ($request->hasFile('header_img2')) {
            $headerBgImage = $request->file('header_img2');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $newData['header_img2'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }

        if ($request->hasFile('section1_img')) {
            $bottomSectionImage = $request->file('section1_img');
            $customFileNameBottomSectionImage = time() . '-' . $bottomSectionImage->getClientOriginalName();
            $path2 = $bottomSectionImage->storeAs('public/images', $customFileNameBottomSectionImage);
            $newData['section1_img'] = 'storage/images/' . $customFileNameBottomSectionImage;
        }

        if ($request->hasFile('section2_img1')) {
            $section2_img = $request->file('section2_img1');
            $customFileNameMetaImage = time() . '-' . $section2_img->getClientOriginalName();
            $path1 = $section2_img->storeAs('public/images', $customFileNameMetaImage);
            $newData['section2_img1'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($request->hasFile('section2_img2')) {
            $section2_img2 = $request->file('section2_img2');
            $customFileNameMetaImage = time() . '-' . $section2_img2->getClientOriginalName();
            $path1 = $section2_img2->storeAs('public/images', $customFileNameMetaImage);
            $newData['section2_img2'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path1 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $newData['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($homepage) {
            $homepage->update($newData);
        } else {
            Homepage::create($newData);
        }

        // $this->syncFacts($homepage, $factsData);

        return redirect()->route('admin.homepage.edit')->with('success', 'Homepage updated successfully.');
    }




    // Function for editing the setting.
    public function Setting()
    {
        $setting = Setting::first();
        if (!$setting) {
            $setting = new Setting();
        }
        return view('admin.setting', compact('setting'));
    }

    // Function for updating the setting.
    public function updateSetting(Request $request)
    {
        $request->validate([
            'contact_no' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'copyright_content' => 'nullable',
            'contact_address' => 'nullable',
            'consultation_bar_button_link' => 'nullable',
            'consultation_bar_button_label' => 'nullable',
            'consultation_bar_title' => 'nullable',
            'consultation_bar_description' => 'nullable',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'instagram_link' => 'nullable',
            'header_logo' => 'nullable|image|max:2048',
            'footer_logo' => 'nullable|image|max:2048',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);
        $newData = $request->except(['header_logo', 'footer_logo', 'meta_img']);

        if ($request->hasFile('header_logo')) {
            $headerLogo = $request->file('header_logo');
            $customFileNameHeaderLogo = time() . '-' . $headerLogo->getClientOriginalName();
            $path1 = $headerLogo->storeAs('public/images', $customFileNameHeaderLogo);
            $newData['header_logo'] = 'storage/images/' . $customFileNameHeaderLogo;
        }

        if ($request->hasFile('footer_logo')) {
            $footerLogo = $request->file('footer_logo');
            $customFileNameFooterLogo = time() . '-' . $footerLogo->getClientOriginalName();
            $path1 = $footerLogo->storeAs('public/images', $customFileNameFooterLogo);
            $newData['footer_logo'] = 'storage/images/' . $customFileNameFooterLogo;
        }
        
        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path1 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $newData['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }


        $setting = Setting::first();


        if ($setting) {
            $setting->update($newData);
        } else {
            Setting::create($newData);
        }
        return redirect()->route('admin.setting.edit')->with('success', 'Setting updated successfully.');
    }
}
