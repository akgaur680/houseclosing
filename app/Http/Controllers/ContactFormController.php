<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactArea;

class ContactFormController extends Controller
{
    public function view(){
        return view('web/contact');
    }
    public function show(){
        return view('web/components/contact_form');
    }
    public function updatecontact(Request $request){
        $request->validate([
        'header_title'=>'required|string|max:255',
        'header_description'=>'nullable|string|max:2048',
        'header_button_label'=>'nullable|string|max:255',
        'header_button_link'=>'nullable|string|max:255',
        'header_img'=>'nullable|image|max:2048',    
        'meta_title'=>'nullable|string|max:255',
        'meta_description'=>'nullable|string|max:2048',
        'meta_tag'=>'nullable|string|max:255',
        'meta_img'=>'nullable|image|max:2048',
        ]);
        $data = $request->except(['header_img', 'meta_img']);

        if($request->hasFile('header_img')){
            $header_img = $request->file('header_img');
            $customeFileNameHeaderImg = time().'_'.$header_img->getClientOriginalName();
            $path1 = $header_img->storeAs('public/images',$customeFileNameHeaderImg);
            $data['header_img'] = 'storage/images/'.$customeFileNameHeaderImg;
        }

        if($request->hasFile('meta_img')){
            $meta_img = $request->file('meta_img');
            $customeFileNameMetaImg = time().'_'.$meta_img->getClientOriginalName();
            $path1 = $meta_img->storeAs('public/images',$customeFileNameMetaImg);
            $data['meta_img'] = 'storage/images/'.$customeFileNameMetaImg;
        }
        $contact = ContactArea::first();
        if($contact)
        {
            $contact->update($data);
        }
        else
        {
            ContactArea::create($data);
        }
        return redirect()->route('admin.contact-area.edit')->with('success', 'Contact Page Updated Successfully');
    }
    public function contactqueries(){
        $queries = ContactForm::orderBy('id', 'desc')->paginate(10);
        return view('admin/contact_queries', compact('queries'));
    }
    
    
    public function store(Request $request){
        $request->validate([
            'email'=> 'required|string|max:255',
            'name'=> 'required|string|max:255',
            'phone'=> 'nullable|string|max:255',
            'zipcode'=> 'nullable|string|max:255',
            'message'=> 'required|string',
        ]);
        $contact = $request->all();
      $form =  ContactForm::create($contact);
       
       Mail::send('emails.contact', ['form' => $form], function ($message) use ($form, $request) {
        $message->to('akgaur680@gmail.com')
            ->subject('New Query Form Submission')
            ->from('akgaur680@gmail.com', 'HouseClosing'); 
    });
        return redirect()->back()->with('success', 'Thank You for Contacting Us');
    }
    public function viewquery($queryid){
        $query = ContactForm::findOrFail($queryid);
        return view('admin.view_contact_query', compact('query'));
    }
    public function deletequery($queryid){
        $query = ContactForm::findOrFail($queryid)->delete();
        return redirect()->back()->with('success', 'Query Deleted Successfully');

    }
}
