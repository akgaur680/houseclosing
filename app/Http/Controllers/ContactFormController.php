<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactArea;
use GuzzleHttp\Client;

class ContactFormController extends Controller
{
    public function view(){
        return view('web/contact');
    }
    public function show(){
        return view('web/components/contact_form');
    }
    public function editcontact(){
        $contact = ContactArea::first();
        if(!$contact){
            $contact = new ContactArea();
        }
        return view('admin.edit_contact_area', compact('contact'));
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
        $queries = ContactForm::orderBy('id', 'desc')->paginate(20);
        return view('admin/contact_queries', compact('queries'));
    }
    
    
    public function store(Request $request){
      $validatedData =  $request->validate([
           'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => [
                'required',
                'string',
                'max:255',
                'regex:/^(\+1\s?)?(\(?\d{3}\)?[\s.-]?)?\d{3}[\s.-]?\d{4}$/',
            ],
            'message' => 'required|string',
            'zipcode' => 'required|string',
        ]);
        // Verify reCaptcha
            $client = new Client();
      $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
        'form_params' => [
            'secret' => '6Lc4NBoqAAAAAE5j384Lz1ePL3N5UIhwQDgHyDtT',
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ],
    ]);

    $body = json_decode((string)$response->getBody());
    if ($body->success) {
        $emailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'zipcode' => $request->input('zipcode'),
            'message' => $request->input('message'),
            
    ]; 
       Mail::send('emails.contact', ['form' => $emailData], function ($message) use ($emailData, $request) {
        $message->to('akgaur680@gmail.com')
            ->subject('New Query Form Submission')
            ->from('akgaur680@gmail.com', 'HouseClosing'); 
    });
    
    ContactForm::create($validatedData);
        return redirect()->back()->with('success', 'Thank You for Contacting Us');
    }
    else{
        return redirect()->back()->withErrors(['g-recaptcha-response' => 'Please verify that you are not a robot.'])->withInput();

    }
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
