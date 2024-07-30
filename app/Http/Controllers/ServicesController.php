<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function edit()
    {
        $services = Services::first();
        return view('admin.services_areas', compact('services'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'header_title' => 'required|string|max:255',
            'header_description' => 'nullable|string',
            'header_button_label' => 'nullable|string|max:255',
            'header_button_link' => 'nullable|string|max:255',
            'header_img' => 'nullable|image|max:2048',
            'section1_img' => 'nullable|image|max:2048',
            'section1_title' => 'nullable|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('header_img')) {
            $header_img = $request->file('header_img');
            $customFileNameMetaImage = time() . '-' . $header_img->getClientOriginalName();
            $path = $header_img->storeAs('public/images', $customFileNameMetaImage);
            $data['header_img'] = 'storage/images/' . $customFileNameMetaImage;
        }

        if ($request->hasFile('section1_img')) {
            $section1_img = $request->file('section1_img');
            $customFileNameMetaImage = time() . '-' . $section1_img->getClientOriginalName();
            $path = $section1_img->storeAs('public/images', $customFileNameMetaImage);
            $data['section1_img'] = 'storage/images/' . $customFileNameMetaImage;
        }

        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path1 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $data['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }
        $services = Services::first();
        if ($services) {
            $services->update($data);
        } else {
            Services::create($data);
        }

        return redirect()->route('admin.service-area.edit')->with('success', 'Services Area updated successfully.');
    }
}
