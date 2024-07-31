<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyers;

class LawyersController extends Controller
{

    public function edit()
    {
        $lawyers = Lawyers::first();
        return view('admin/edit_lawyers_area', compact('lawyers'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'header_title' => 'required|string|max:255',
            'header_description' => 'nullable|string|max:255',
            'header_button_label' => 'nullable|string|max:255',
            'header_button_link' => 'nullable|string|max:255',
            'header_img' => 'nullable|image|max:2048',
            'section1_title' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_tag' => 'nullable|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);

        $data = $request->except(['header_img', 'meta_img']);

        if ($request->hasFile('header_img')) {
            $header_img = $request->file('header_img');
            $customeimagefilename = time() . '_' . $header_img->getClientOriginalName();
            $path = $header_img->storeAs('public/images' . $customeimagefilename);
            $data['header_img'] = 'storage/images' . $customeimagefilename;
        }

        if ($request->hasFile('meta_img')) {
            $meta_img = $request->file('meta_img');
            $customeimagefilename = time() . '_' . $meta_img->getClientOriginalName();
            $path2 = $meta_img->storeAs('public/images' . $customeimagefilename);
            $data['meta_img'] = 'storage/images' . $customeimagefilename;
        }

        $lawyers = Lawyers::first();
        if ($lawyers) {
            $lawyers->update($data);
        } else {
            Lawyers::create($data);
        }
        return redirect()->route('admin.lawyers-area.edit')->with('success', 'Services Area updated successfully.');
    }
}
