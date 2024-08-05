<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $services = Services::first();
        $categories = ServiceCategory::all();

        return view('admin.service_area_categories', compact('services', 'categories'));
    }

    public function add()
    {
        $services = Services::first();
        $categories = ServiceCategory::all();
        return view('admin/add_service_category', compact('services', 'categories'));
    }

    public function show($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('admin.edit_service_category',compact('category'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'services_id' => 'nullable|string',
            'header_title' => 'nullable|string',
            'header_description' => 'nullable|string',
            'header_img' => 'nullable|image|max:2048',
            'header_button_label' => 'nullable|string',
            'header_button_link' => 'nullable|string',
            'icon' => 'nullable|image|max:2048',
            'slug' => 'nullable|string',
            'section1_img' => 'nullable|image|max:2048',
            'section1_description' => 'nullable|string',
            'section1_button_label' => 'nullable|string',
            'section1_button_link' => 'nullable|string',
            'section2_img' => 'nullable|image|max:2048',
            'section2_description' => 'nullable|string', 
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',

        ]);

        $data = $request->except(['header_img', 'section1_img', 'section2_img', 'meta_img', 'icon']);

        if ($request->hasFile('header_img')) {
            $headerBgImage = $request->file('header_img');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $data['header_img'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }

        if ($request->hasFile('section1_img')) {
            $section1Image = $request->file('section1_img');
            $customFileNameSection1Image = time() . '-' . $section1Image->getClientOriginalName();
            $path2 = $section1Image->storeAs('public/images', $customFileNameSection1Image);
            $data['section1_img'] = 'storage/images/' . $customFileNameSection1Image;
        }
        
        if($request->hasFile('section2_img')){
            $section2_img = $request->file('section2_img');
            $customFileNameSection2Image = time().'_'.$section2_img->getClientOriginalName();
            $path3 = $section2_img->storeAs('public/images',$customFileNameSection2Image);
            $data['section2_img'] = 'storage/images/'.$customFileNameSection2Image;
        }
        
        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path4 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $data['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }
        
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $customFileNameIcon = time() . '-' . $icon->getClientOriginalName();
            $path5 = $icon->storeAs('public/images', $customFileNameIcon);
            $data['icon'] = 'storage/images/' . $customFileNameIcon;
        }

        ServiceCategory::create($data);

        return redirect()->route('admin.service-area-categories.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'services_id' => 'nullable|string',
            'header_title' => 'nullable|string',
            'header_description' => 'nullable|string',
            'header_img' => 'nullable|image|max:2048',
            'header_button_label' => 'nullable|string',
            'header_button_link' => 'nullable|string',
            'icon' => 'nullable|image|max:2048',
            'slug' => 'nullable|string',
            'section1_img' => 'nullable|image|max:2048',
            'section1_description' => 'nullable|string',
            'section1_button_label' => 'nullable|string',
            'section1_button_link' => 'nullable|string',
            'section2_img' => 'nullable|image|max:2048',
            'section2_description' => 'nullable|string', 
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);

        $category = ServiceCategory::findOrFail($id);
        $data = $request->except(['header_img', 'section1_img', 'section2_img', 'meta_img', 'icon']);

        if ($request->hasFile('header_img')) {
            $headerBgImage = $request->file('header_img');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $data['header_img'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }

        if ($request->hasFile('section1_img')) {
            $section1Image = $request->file('section1_img');
            $customFileNameSection1Image = time() . '-' . $section1Image->getClientOriginalName();
            $path2 = $section1Image->storeAs('public/images', $customFileNameSection1Image);
            $data['section1_img'] = 'storage/images/' . $customFileNameSection1Image;
        }

        if($request->hasFile('section2_img')){
            $section2_img = $request->file('section2_img');
            $customFileNameSection2Image = time().'_'.$section2_img->getClientOriginalName();
            $path3 = $section2_img->storeAs('public/images',$customFileNameSection2Image);
            $data['section2_img'] = 'storage/images/'.$customFileNameSection2Image;
        }
        
        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path4 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $data['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $customFileNameIcon = time() . '-' . $icon->getClientOriginalName();
            $path5 = $icon->storeAs('public/images', $customFileNameIcon);
            $data['icon'] = 'storage/images/' . $customFileNameIcon;
        }
        
        $category->update($data);

        return redirect()->route('admin.service-area-categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.service-area-categories.index')->with('success', 'Category deleted successfully.');
    }

    
}
