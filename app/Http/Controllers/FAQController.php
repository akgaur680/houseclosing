<?php

namespace App\Http\Controllers;

use App\Models\FAQ_Q_A;
use App\Models\FAQArea;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function edit(){
        $faq = FAQArea::first();
        if(!$faq)
        {
            $faq = new FAQArea();
        }
        return view('admin/edit_faq_area', compact('faq'));
    }
    public function update(Request $request){
        $request->validate([
        'header_title'=>'required|string|max:255',
        'header_description'=>'nullable|string|max:255',
        'header_img'=>'nullable|image|max:2048',
        'header_button_label'=>'nullable|string|max:255',
        'header_button_link'=>'nullable|string|max:255',
        'section1_img'=>'nullable|image|max:2048',
        'section1_button_label'=>'nullable|string|max:255',
        'section1_button_link'=>'nullable|string|max:255',
        'meta_title'=>'nullable|string|max:255',
        'meta_description'=>'nullable|string|max:255',
        'meta_tag'=>'nullable|string|max:255',
        'meta_img'=>'nullable|image|max:2048',
        ]);
        $data = $request->except(['header_img', 'meta_img', 'section1_img']);
        if($request->hasFile('header_img')){
            $header_img = $request->file('header_img');
            $customFileNameHeaderImg = time().'_'.$header_img->getClientOriginalName();
            $path1 = $header_img->storeAs('public/images', $customFileNameHeaderImg);
            $data['header_img'] = 'storage/images/'.$customFileNameHeaderImg;
        }
        if($request->hasFile('meta_img')){
            $meta_img = $request->file('meta_img');
            $customFileNameMetaImg = time().'_'.$meta_img->getClientOriginalName();
            $path1 = $meta_img->storeAs('public/images', $customFileNameMetaImg);
            $data['meta_img'] = 'storage/images/'.$customFileNameMetaImg;
        }
        
        if($request->hasFile('section1_img')){
            $section1_img = $request->file('section1_img');
            $customFileNameSectionImg = time().'_'.$section1_img->getClientOriginalName();
            $path1 = $section1_img->storeAs('public/images', $customFileNameSectionImg);
            $data['section1_img'] = 'storage/images/'.$customFileNameSectionImg;
        }
        $faq = FAQArea::first();
        if($faq)
        {
            $faq->update($data);
        }
        else
        {
            FAQArea::create($data);
        }

        return redirect()->route('admin.faq-area.edit')->with('success', 'FAQ Page Updated Successfully');

    }

    public function index(){
        $faq = FAQ_Q_A::all();
        return view('admin/faq', compact('faq'));
    }
    public function faqadd(){
        $faq_q_a = FAQ_Q_A::all();
        $faq = FAQArea::first();
        return view('admin/add_faq', compact('faq', 'faq_q_a'));
    }
    public function faqstore(Request $request){
       $request->validate([
        'faq_id' => 'required|string|max:255',
        'question' => 'required|string|max:2048',
        'answer'=> 'required|string|max:2048',
       ]);
       $data = $request->all();
       FAQ_Q_A::create($data);
       return redirect()->route('admin.faq.index')->with('success', 'FAQ Added Successfully');
    }
}
