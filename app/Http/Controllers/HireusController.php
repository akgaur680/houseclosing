<?php

namespace App\Http\Controllers;

use App\Models\HireusArea;
use App\Models\HireusForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class HireusController extends Controller
{
    public function edit()
    {
        $hire = HireusArea::first();
        if (!$hire) {
            $hire = new HireusArea();
        }
        return  view('admin/edit_hireus_area', compact('hire'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'header_title' => 'required|string|max:255',
            'header_description' => 'nullable|string|max:2048',
            'header_button_label' => 'nullable|string|max:255',
            'header_button_link' => 'nullable|string|max:255',
            'header_img' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:2048',
            'meta_tag' => 'nullable|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);
        $data = $request->except(['header_img', 'meta_img']);

        if ($request->hasFile('header_img')) {
            $header_img = $request->file('header_img');
            $customeFileNameHeaderImg = time() . '_' . $header_img->getClientOriginalName();
            $path1 = $header_img->storeAs('public/images', $customeFileNameHeaderImg);
            $data['header_img'] = 'storage/images/' . $customeFileNameHeaderImg;
        }

        if ($request->hasFile('meta_img')) {
            $meta_img = $request->file('meta_img');
            $customeFileNameMetaImg = time() . '_' . $meta_img->getClientOriginalName();
            $path1 = $meta_img->storeAs('public/images', $customeFileNameMetaImg);
            $data['meta_img'] = 'storage/images/' . $customeFileNameMetaImg;
        }
        $contact = HireusArea::first();
        if ($contact) {
            $contact->update($data);
        } else {
            HireusArea::create($data);
        }
        return redirect()->route('admin.hireus.edit')->with('success', 'Hire Us Page Updated Successfully');
    }
    public function storehireusform(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'nullable|string|max:2048',
            'message' => 'required|string',
            'selected_services' => 'nullable|string',
            'selected_service_names' => 'nullable|string',
        ]);
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
                'message' => $request->input('message'),
                'address' => $request->input('address'),
                'selected_services' =>$request->input('selected_services'),
                'selected_service_names' => $request->input('selected_service_names')
            ];
            Mail::send('emails.hireus', ['form' => $emailData], function ($message) use ($emailData, $request) {
                $message->to('akgaur680@gmail.com')
                    ->subject('New Hire Us Form Submission')
                    ->from('akgaur680@gmail.com', 'HouseClosing');
            });
            HireusForm::create($validatedData);


            return redirect()->back()->with('success', 'Thank You to Choose Us.');
        } else {
            return redirect()->back()->withErrors(['g-recaptcha-response' => 'Please verify that you are not a robot.'])->withInput();
        }
    }

    public function hireusqueries()
    {
        $queries = HireusForm::orderBy('id', 'desc')->paginate(20);
        return view('admin/hireus_queries', compact('queries'));
    }

    public function viewquery($queryid)
    {
        $query = HireusForm::findOrFail($queryid);
        return view('admin.view_hireus_query', compact('query'));
    }
    public function deletequery($queryid)
    {
        $query = HireusForm::findOrFail($queryid)->delete();
        return redirect()->back()->with('success', 'Query Deleted Successfully');
    }
}
