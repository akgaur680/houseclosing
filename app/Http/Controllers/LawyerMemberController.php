<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer_Members;
use App\Models\Lawyers;

class LawyerMemberController extends Controller
{
   public function index()
   {
    $lawyers = Lawyers::first();
    $members = Lawyer_Members::all();
    
    return view('admin.lawyer_member', compact('members', 'lawyers'));
   }
   public function add()
   {
    $lawyers = Lawyers::first();
    $members = Lawyer_Members::all();
    
    return view('admin/add_lawyer', compact('members', 'lawyers'));
   }

   public function store(Request $request){
    $request->validate([
        'lawyers_id'=> 'required|exists:lawyers,id',
        'lawyer_name'=> 'nullable|string|max:255',
        'lawyer_designation'=> 'nullable|string|max:255',
        'lawyer_img'=> 'nullable|image|max:2048',
        'lawyer_about'=> 'nullable|string|max:255',
        'meta_title'=> 'nullable|string|max:255',
        'meta_description'=> 'nullable|string|max:255',
        'meta_tag'=> 'nullable|string|max:255',
        'meta_img'=> 'nullable|image|max:2048',
    ]);
    $data = $request->except(['lawyer_img', 'meta_img']);
    if ($request->hasFile('lawyer_img')) {
        $lawyer_img = $request->file('lawyer_img');
        $customeimagefilename = time() . '_' . $lawyer_img->getClientOriginalName();
        $path = $lawyer_img->storeAs('public/images' . $customeimagefilename);
        $data['lawyer_img'] = 'storage/images' . $customeimagefilename;
    }

    if ($request->hasFile('meta_img')) {
        $meta_img = $request->file('meta_img');
        $customeimagefilename = time() . '_' . $meta_img->getClientOriginalName();
        $path2 = $meta_img->storeAs('public/images' . $customeimagefilename);
        $data['meta_img'] = 'storage/images' . $customeimagefilename;
    }
    $member = Lawyer_Members::create($data);
    return redirect()->route('admin.lawyer-member.index')->with('success', 'Lawyer Added successfully.');
   }

   public function edit($id)
   {
    $member = Lawyer_Members::findOrFail($id);
    return view('admin/edit_lawyer', compact('member'));
   }

   
   public function update(Request $request, $id){
    $request->validate([
        'lawyer_name'=> 'nullable|string|max:255',
        'lawyer_designation'=> 'nullable|string|max:255',
        'lawyer_img'=> 'nullable|image|max:2048',
        'lawyer_about'=> 'nullable|string|max:255',
        'meta_title'=> 'nullable|string|max:255',
        'meta_description'=> 'nullable|string|max:255',
        'meta_tag'=> 'nullable|string|max:255',
        'meta_img'=> 'nullable|image|max:2048',
    ]);
    $member = Lawyer_Members::findOrFail($id);
    $data = $request->except(['lawyer_img', 'meta_img']);
    if ($request->hasFile('lawyer_img')) {
        $lawyer_img = $request->file('lawyer_img');
        $customeimagefilename = time() . '_' . $lawyer_img->getClientOriginalName();
        $path = $lawyer_img->storeAs('public/images' . $customeimagefilename);
        $data['lawyer_img'] = 'storage/images' . $customeimagefilename;
    }

    if ($request->hasFile('meta_img')) {
        $meta_img = $request->file('meta_img');
        $customeimagefilename = time() . '_' . $meta_img->getClientOriginalName();
        $path2 = $meta_img->storeAs('public/images' . $customeimagefilename);
        $data['meta_img'] = 'storage/images' . $customeimagefilename;
    }
    $member->update($data);

    return redirect()->route('admin.lawyer-member.index')->with('success', 'Lawyer Added successfully.');
   }
   public function delete($id)
   {

    $member = Lawyer_Members::findOrFail($id);
    $member->delete();

    return redirect()->route('admin.lawyer-member.index')->with('success', 'Lawyer deleted successfully.');
   }
}
