<?php
namespace App\Http\Controllers;
use App\Models\HireusForm;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Homepage;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\About;
use App\Models\Experience;
use App\Models\Setting;
use App\Models\ContactForm;
use App\Models\ContactArea;
use App\Models\TaxCalculator;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Function for editing the homepage
    public function editHomepage()
    {
        $homepage = Homepage::first();
        if (!$homepage) {
            $homepage = new Homepage();
        }
        return view('admin.edit_homepage', compact('homepage'));
    }
    // Function for updating the homepage.
    public function updateHomepage(Request $request)
    {
        $request->validate([
            'header_title' => 'required|string|max:255',
            'header_description' => 'required|string|max:2048',
            'header_img' => 'nullable|image|max:2048',
            'header_img2' => 'nullable|image|max:2048',
            'header_button_label1' => 'required|string|max:255',
            'header_button_link1' => 'required|string|max:255',
            'header_button_label2' => 'required|string|max:255',
            'header_button_link2' => 'required|string|max:255',
            'section1_img' => 'nullable|image|max:2048',
            'section1_card1_title' => 'required|string|max:255',
            'section1_card1_description' => 'required|string|max:255',
            'section1_card2_title' => 'required|string|max:255',
            'section1_card2_description' => 'required|string|max:2048',
            'section1_card3_title' => 'required|string|max:255',
            'section1_card3_description' => 'required|string|max:255',
            'section2_title' => 'required|string|max:255',
            'section2_description' => 'required|string|max:255',
            'section2_img1' => 'nullable|image|max:2048',
            'section2_img2' => 'nullable|image|max:2048',
            'section2_successrate' => 'required|string|max:255',
            'section2_casesdone' => 'required|string|max:255',
            'section2_years_in_business' => 'required|string|max:255',
            'section2_button_label' => 'required|string|max:255',
            'section2_button_link' => 'required|string|max:255',
            'section3_title' => 'required|string|max:255',
            'section3_description' => 'required|string|max:2048',
            'section3_button_label' => 'required|string|max:255',
            'section3_button_link' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);
        $homepage = new Homepage;
        $newData = $request->except(['header_img', 'header_img2', 'section1_img', 'section2_img1', 'section2_img2', 'meta_img']);
        $homepage = Homepage::first();
        // $factsData = $request->input('facts', []);
        if ($request->hasFile('header_img')) {
            $headerBgImage = $request->file('header_img');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $newData['header_img'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }
        if ($request->hasFile('header_img2')) {
            $headerBgImage = $request->file('header_img2');
            $customFileNameHeaderBgImage = time() . '-' . $headerBgImage->getClientOriginalName();
            $path1 = $headerBgImage->storeAs('public/images', $customFileNameHeaderBgImage);
            $newData['header_img2'] = 'storage/images/' . $customFileNameHeaderBgImage;
        }
        if ($request->hasFile('section1_img')) {
            $bottomSectionImage = $request->file('section1_img');
            $customFileNameBottomSectionImage = time() . '-' . $bottomSectionImage->getClientOriginalName();
            $path2 = $bottomSectionImage->storeAs('public/images', $customFileNameBottomSectionImage);
            $newData['section1_img'] = 'storage/images/' . $customFileNameBottomSectionImage;
        }
        if ($request->hasFile('section2_img1')) {
            $section2_img = $request->file('section2_img1');
            $customFileNameMetaImage = time() . '-' . $section2_img->getClientOriginalName();
            $path1 = $section2_img->storeAs('public/images', $customFileNameMetaImage);
            $newData['section2_img1'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($request->hasFile('section2_img2')) {
            $section2_img2 = $request->file('section2_img2');
            $customFileNameMetaImage = time() . '-' . $section2_img2->getClientOriginalName();
            $path1 = $section2_img2->storeAs('public/images', $customFileNameMetaImage);
            $newData['section2_img2'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path1 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $newData['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }
        if ($homepage) {
            $homepage->update($newData);
        } else {
            Homepage::create($newData);
        }
        // $this->syncFacts($homepage, $factsData);
        return redirect()->route('admin.homepage.edit')->with('success', 'Homepage updated successfully.');
    }
    // Function for editing the setting.
    public function Setting()
    {
        $setting = Setting::first();
        if (!$setting) {
            $setting = new Setting();
        }
        return view('admin.setting', compact('setting'));
    }
    // Function for updating the setting.
    public function updateSetting(Request $request)
    {
        $request->validate([
            'contact_no' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'map'=> 'nullable',
            'copyright_content' => 'nullable',
            'contact_address' => 'nullable',
            'consultation_bar_button_link' => 'nullable',
            'consultation_bar_button_label' => 'nullable',
            'consultation_bar_title' => 'nullable',
            'consultation_bar_description' => 'nullable',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'instagram_link' => 'nullable',
            'header_logo' => 'nullable|image|max:2048',
            'footer_logo' => 'nullable|image|max:2048',
            'footer_title' => 'nullable|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_tag' => 'required|string|max:255',
            'meta_img' => 'nullable|image|max:2048',
        ]);
        $newData = $request->except(['header_logo', 'footer_logo', 'meta_img']);
        if ($request->hasFile('header_logo')) {
            $headerLogo = $request->file('header_logo');
            $customFileNameHeaderLogo = time() . '-' . $headerLogo->getClientOriginalName();
            $path1 = $headerLogo->storeAs('public/images', $customFileNameHeaderLogo);
            $newData['header_logo'] = 'storage/images/' . $customFileNameHeaderLogo;
        }
        if ($request->hasFile('footer_logo')) {
            $footerLogo = $request->file('footer_logo');
            $customFileNameFooterLogo = time() . '-' . $footerLogo->getClientOriginalName();
            $path1 = $footerLogo->storeAs('public/images', $customFileNameFooterLogo);
            $newData['footer_logo'] = 'storage/images/' . $customFileNameFooterLogo;
        }
        if ($request->hasFile('meta_img')) {
            $metaImage = $request->file('meta_img');
            $customFileNameMetaImage = time() . '-' . $metaImage->getClientOriginalName();
            $path1 = $metaImage->storeAs('public/images', $customFileNameMetaImage);
            $newData['meta_img'] = 'storage/images/' . $customFileNameMetaImage;
        }
        $setting = Setting::first();
        if ($setting) {
            $setting->update($newData);
        } else {
            Setting::create($newData);
        }
        return redirect()->route('admin.setting.edit')->with('success', 'Setting updated successfully.');
    }

    //ABOUT SECTION
    public function editabout()
    {
        $about = About::first(); 
        if (!$about) {
            $about = new About();
        }
        return view('admin/about_us', compact('about'));
    }
    public function updateabout(Request $request){
        $request->validate([
        'header_title'=>'required|string|max:255',
        'header_description'=>'nullable|string|max:2048',
        'header_button_label'=>'nullable|string|max:255',
        'header_button_link'=>'nullable|string|max:255',
        'header_img'=>'nullable|image|max:2048',
        'section1_description'=>'nullable|string|max:2048',
        'section1_business_referrals'=>'nullable|string|max:255',
        'section1_verbal_commitment'=>'nullable|string|max:255',
        'section1_img1'=>'nullable|image|max:2048',
        'section1_img2'=>'nullable|image|max:2048',
        'section2_title'=>'nullable|string|max:255',
        'section2_description'=>'nullable|string|max:2048',
        'section2_successful_txn'=>'nullable|string|max:255',
        'section2_clients_served'=>'nullable|string|max:255',
        'section2_years_in_business'=>'nullable|string|max:255',
        'section2_industry_awards'=>'nullable|string|max:255',
        'section2_img'=>'nullable|image|max:2048',
        'section2_card1_title'=>'nullable|string|max:255',
        'section2_card1_description'=>'nullable|string|max:2048',
        'section2_card1_icon'=>'nullable|string|max:255',
        'section2_card2_title'=>'nullable|string|max:255',
        'section2_card2_description'=>'nullable|string|max:2048',
        'section2_card2_icon'=>'nullable|string|max:255',
        'section2_card3_title'=>'nullable|string|max:255',
        'section2_card3_description'=>'nullable|string|max:2048',
        'section2_card3_icon'=>'nullable|string|max:255',
        'section2_card4_title'=>'nullable|string|max:255',
        'section2_card4_description'=>'nullable|string|max:2048',
        'section2_card4_icon'=>'nullable|string|max:255',
        'meta_title'=>'nullable|string|max:255',
        'meta_description'=>'nullable|string|max:2048',
        'meta_tag'=>'nullable|string|max:255',
        'meta_img'=>'nullable|image|max:2048',
        ]);
        $data = $request->except(['header_img', 'section1_img1', 'section1_img2', 'section2_img', 'meta_img']);
        if($request->hasFile('header_img')){
            $header_img = $request->file('header_img');
            $customeFileNameHeaderImg = time().'_'.$header_img->getClientOriginalName();
            $path1 = $header_img->storeAs('public/images',$customeFileNameHeaderImg);
            $data['header_img'] = 'storage/images/'.$customeFileNameHeaderImg;
        }
        if($request->hasFile('section1_img1')){
            $section1_img1 = $request->file('section1_img1');
            $customeFileNameSection1Img = time().'_'.$section1_img1->getClientOriginalName();
            $path1 = $section1_img1->storeAs('public/images',$customeFileNameSection1Img);
            $data['section1_img1'] = 'storage/images/'.$customeFileNameSection1Img;
        }
        if($request->hasFile('section1_img2')){
            $section1_img2 = $request->file('section1_img2');
            $customeFileNameSection1Img2 = time().'_'.$section1_img2->getClientOriginalName();
            $path1 = $section1_img2->storeAs('public/images',$customeFileNameSection1Img2);
            $data['section1_img2'] = 'storage/images/'.$customeFileNameSection1Img2;
        }
        if($request->hasFile('section2_img')){
            $section2_img = $request->file('section2_img');
            $customeFileNameSection2Img = time().'_'.$section2_img->getClientOriginalName();
            $path1 = $section2_img->storeAs('public/images',$customeFileNameSection2Img);
            $data['section2_img'] = 'storage/images/'.$customeFileNameSection2Img;
        }
        if($request->hasFile('meta_img')){
            $meta_img = $request->file('meta_img');
            $customeFileNameMetaImg = time().'_'.$meta_img->getClientOriginalName();
            $path1 = $meta_img->storeAs('public/images',$customeFileNameMetaImg);
            $data['meta_img'] = 'storage/images/'.$customeFileNameMetaImg;
        }
        $about = About::first();
        if($about){
            $about->update($data);
        }
        else{
            About::create($data);
        }
        return redirect()->route('admin.about.edit')->with('success', 'About Page Updated Successfully');

    }
  

  
}
