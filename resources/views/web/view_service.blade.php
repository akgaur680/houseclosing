@extends('layouts.web')
@section('meta')
<title>{{ @$servicecategory['meta_title'] ?? 'HouseClosing' }}</title>
<meta name="description" content="{{ @$servicecategory['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:title" content="{{ @$servicecategory['meta_title'] ?? 'HouseClosing' }}">
<meta property="og:description" content="{{ @$servicecategory['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:image" content="{{ asset(@$servicecategory['meta_image']) }}">
<meta name="keywords" content="{{ @$servicecategory['meta_tags'] ?? 'HouseClosing' }}">
@endsection
@section('content')
<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/services">Services</a>
                        </li>
                        <li>
                            <span>{{$servicecategory['header_title']}}</span>
                        </li>
                    </ul>
                    <h2>{{$servicecategory['header_title']}} - HouseClosing.CA</h2>
                    <p> {{$servicecategory['header_description']}} </p>
                    <a href="/{{$servicecategory['header_button_link']}}" class="read-more text-primary">
                        {{$servicecategory['header_button_label']}}
                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="{{asset($servicecategory['header_img'])}}" class="img" alt="banner-img">
                    <img src="{{asset('assets/images/shape-7.png')}}" class="shape shape-7" alt="shape">
                    <img src="{{asset('assets/images/shape-8.png')}}" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="details-contenet-area ptb-130">
    <div class="container">
        <div class="details-contenet mw-1095">
            <div class="buying-img">
                <img src="{{asset($servicecategory['section1_img'])}}" alt="buying" style="width:100%;">
            </div>
            {!!$servicecategory['section1_description']!!}
            <div class="mb-2">
                <a href="/quote" class="btn btn-primary">Get Free Quote</a>
            </div>
            @if ($servicecategory['section2_description'])
            <div class="mb-40"></div>
            <div class="bg-gray2 p-4  rounded-4 border">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="why-us-single-item">
                            <div class="d-flex align-items-center">
                                <i class="flaticon-currency"></i>
                                <h3>Regulatory Compliance</h3>
                            </div>
                            <p>Navigate complex real estate regulations with ease. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="why-us-single-item">
                            <div class="d-flex align-items-center">
                                <i class="flaticon-credit-card"></i>
                                <h3>Transaction Management</h3>
                            </div>
                            <p>Seamlessly handle all legal aspects of buying and selling property.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="why-us-single-item">
                            <div class="d-flex align-items-center">
                                <i class="flaticon-rating"></i>
                                <h3>Property Development Advice</h3>
                            </div>
                            <p>Provide legal guidance on zoning, permits, and development projects.</p>
                        </div>
                    </div>
                    <div class="border-bottom"></div>
                    <h3 class="text-center pt-4">We offer Legal Services on properties including:</h3>
                    <ul class="ps-0 mb-0 list-unstyled d-flex flex-wrap justify-content-center gap-3 gap-lg-4 properties-list">
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Retail</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Apartments</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Factories</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Strip Centers</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Factories</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Office Buildings</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Warehouses</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Industrial</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Non-Profits</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Religious Institutions & Buildings</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Mixed-Use / Single Use</span>
                        </li>
                    </ul>
                </div>
                <div class="mb-40"></div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2>What is needed from you to get started?</h2>
                        <div>
                            <h3>STEP 1:</h3>
                            <h5>Send Us Your Agreement of Purchase and Sale:</h5>
                            <p>Forward your Assignment Agreement along with any other documents to our office. (Can be sent by you or your Real Estate Agent).</p>
                        </div>
                        <div>
                            <h3>STEP 2:</h3>
                            <h5>Contact your Lender:</h5>
                            <p>Contact your Mortgage Broker or Lender (Bank)</p>
                            <ul>
                                <li>Contact your Mortgage Broker or Lender (Bank)</li>
                                <li>Ask them to forward Mortgage Instructions to our office.</li>
                            </ul>
                        </div>
                        <div>
                            <h5>All documentation can be sent by:</h5>
                            <p>Email : <span>docs.@laks.ca</span> Or </p>
                            <p>Toll Free Fax: 1 (855) 466-3803 or 905-477-6778</p>
                            <ul>
                                <li>Contact your Mortgage Broker or Lender (Bank)</li>
                                <li>Ask them to forward Mortgage Instructions to our office.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="easy-img mt-4 mt-lg-0 text-center">
                            <img src="{{asset('assets/images/buying-6.jpg')}}" class="rounded-4" alt="buying">
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection