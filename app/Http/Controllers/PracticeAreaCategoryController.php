<?php

namespace App\Http\Controllers;

use App\Models\PracticeArea;
use App\Models\PracticeAreaCategory;
use Illuminate\Http\Request;

class PracticeAreaCategoryController extends Controller
{
    public function index()
    {
        $practiceArea = PracticeArea::first();
        $categories = PracticeAreaCategory::all();

        return view('admin.practice_area_categories', compact('practiceArea', 'categories'));
    }

    public function show($id)
    {
        $category = PracticeAreaCategory::findOrFail($id);
        return response()->json($category);
    }



    public function store(Request $request)
    {
        $request->validate([
            'practice_area_id' => 'required|exists:practice_areas,id',
            'headertitle' => 'required|string',
            'headerdescription' => 'nullable|string',
            'slug' => 'nullable|string',
            'headerbgimage' => 'nullable|image|max:2048',
            'section1title' => 'nullable|string',
            'section1description' => 'nullable|string',
            'section1image' => 'nullable|image|max:2048',
            'section1buttonlabel' => 'nullable|string',
            'section1buttonlink' => 'nullable|string',
            'section2title' => 'nullable|string',
            'section2description' => 'nullable|string',
            'metatitle' => 'nullable|string',
            'metadescription' => 'nullable|string',
            'metatags' => 'nullable|string',
            'metaimage' => 'nullable|image|max:2048',
        ]);

        $data = $request->except(['headerbgimage', 'section1image', 'metaimage']);

        if ($request->hasFile('headerbgimage')) {
            $headerBgImage = $request->file('headerbgimage');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $data['headerbgimage'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }

        if ($request->hasFile('section1image')) {
            $section1Image = $request->file('section1image');
            $customFileNameSection1Image = time() . '-' . $section1Image->getClientOriginalName();
            $path2 = $section1Image->storeAs('public/images', $customFileNameSection1Image);
            $data['section1image'] = 'storage/images/' . $customFileNameSection1Image;
        }

        if ($request->hasFile('metaimage')) {
            $metaImage = $request->file('metaimage');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path3 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $data['metaimage'] = 'storage/images/' . $customFileNameMetaImage;
        }

        PracticeAreaCategory::create($data);

        return redirect()->route('admin.practice-area-categories.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'headertitle' => 'required|string',
            'headerdescription' => 'nullable|string',
            'slug' => 'nullable|string',
            'headerbgimage' => 'nullable|image|max:2048',
            'section1title' => 'nullable|string',
            'section1description' => 'nullable|string',
            'section1image' => 'nullable|image|max:2048',
            'section1buttonlabel' => 'nullable|string',
            'section1buttonlink' => 'nullable|string',
            'section2title' => 'nullable|string',
            'section2description' => 'nullable|string',
            'metatitle' => 'nullable|string',
            'metadescription' => 'nullable|string',
            'metatags' => 'nullable|string',
            'metaimage' => 'nullable|image|max:2048',
        ]);

        $category = PracticeAreaCategory::findOrFail($id);
        $data = $request->except(['headerbgimage', 'section1image', 'metaimage']);

        if ($request->hasFile('headerbgimage')) {
            $headerBgImage = $request->file('headerbgimage');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $data['headerbgimage'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }

        if ($request->hasFile('section1image')) {
            $section1Image = $request->file('section1image');
            $customFileNameSection1Image = time() . '-' . $section1Image->getClientOriginalName();
            $path2 = $section1Image->storeAs('public/images', $customFileNameSection1Image);
            $data['section1image'] = 'storage/images/' . $customFileNameSection1Image;
        }

        if ($request->hasFile('metaimage')) {
            $metaImage = $request->file('metaimage');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path3 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $data['metaimage'] = 'storage/images/' . $customFileNameMetaImage;
        }

        $category->update($data);

        return redirect()->route('admin.practice-area-categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = PracticeAreaCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.practice-area-categories.index')->with('success', 'Category deleted successfully.');
    }
}
