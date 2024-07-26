<?php

namespace App\Http\Controllers;

use App\Models\PracticeArea;
use Illuminate\Http\Request;

class PracticeAreaController extends Controller
{
    public function edit()
    {
        $practiceArea = PracticeArea::first();
        return view('admin.practice_areas', compact('practiceArea'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'metatitle' => 'nullable|string|max:255',
            'metadescription' => 'nullable|string',
            'metatags' => 'nullable|string|max:255',
            'metaimage' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('metaimage')) {
            $metaImage = $request->file('metaimage');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $data['metaimage'] = 'storage/images/' . $customFileNameMetaImage;
        }

        $practiceArea = PracticeArea::first();
        if ($practiceArea) {
            $practiceArea->update($data);
        } else {
            PracticeArea::create($data);
        }

        return redirect()->route('admin.practice-area.edit')->with('success', 'Practice Area updated successfully.');
    }
}
