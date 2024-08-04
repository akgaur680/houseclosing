<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function view(){
        return view('web/contact');
    }
    public function show(){
        return view('web/components/contact_form');
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
}
