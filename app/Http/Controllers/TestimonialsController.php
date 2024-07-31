<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('admin/testimonials', compact('testimonials'));
    }
    public function create(){
        $testimonial = Testimonials::all();
        return view('admin/add_testimonial', compact('testimonial'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string|max:255',
            'img'=> 'nullable|image|max:2048',
            'position'=> 'nullable|string|max:255',
            'comment'=> 'nullable|string|max:2048',
        ]);
        $testimonial = new Testimonials;

        $data = $request->except(['img']);
        if($request->hasFile('img'))
        {
            $img = $request->file('img');
            $customFileNameImage = time().'_'.$img->getClientOriginalName();
            $path = $img->storeAs('public/images', $customFileNameImage);
            $data['img'] = 'storage/images/'.$customFileNameImage;
        }
        Testimonials::create($data);
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Added Successfully');
    }
    public function edit(Request $request, $id){
        $testimonials = Testimonials::findOrFail($id);
        return view('admin/edit_testimonial', compact('testimonials'));
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required|string|max:255',
            'img'=> 'nullable|image|max:2048',
            'position'=> 'nullable|string|max:255',
            'comment'=> 'nullable|string|max:2048',
        ]);
        $testimonial = Testimonials::findOrFail($id);
        $data = $request->except(['img']);
        if($request->hasFile('img'))
        {
            $img = $request->file('img');
            $customFileNameImage = time().'_'.$img->getClientOriginalName();
            $path = $img->storeAs('public/images', $customFileNameImage);
            $data['img'] = 'storage/images/'.$customFileNameImage;
        }
        $testimonial->update($data);
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Updated Successfully');
    }
    public function destroy($id){
        $testimonial = Testimonials::find($id)->delete();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial Deleted Successfully');
    }


}
