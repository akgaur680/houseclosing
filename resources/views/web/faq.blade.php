<?php
use App\Http\Controllers\FrontEndController;
$faq = FrontEndController::faq();

?>

@extends('layouts.web')
@section('meta')
<title>{{ @$faq['meta_title'] ?? 'HouseClosing' }}</title>
<meta name="description" content="{{ @$faq['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:title" content="{{ @$faq['meta_title'] ?? 'HouseClosing' }}">
<meta property="og:description" content="{{ @$faq['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:image" content="{{ asset(@$faq['meta_image']) }}">
<meta name="keywords" content="{{ @$faq['meta_tags'] ?? 'HouseClosing' }}">
@endsection
@section('content')

<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="https://houseclosing.ca">Home</a>
                        </li>
                        <li>
                            <span>FAQ</span>
                        </li>
                    </ul>
                    
                    <h2> {{@$faq['header_title']}} </h2>
                    <p> {{@$faq['header_description']}} </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="{{asset(@$faq['header_img'])}}" class="img" alt="banner-img">
                    <img src="https://houseclosing.ca/assets/images/shape-7.png" class="shape shape-7" alt="shape">
                    <img src="https://houseclosing.ca/assets/images/shape-8.png" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-area ptb-130">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-lg-7">
                <div class="faq-content ms-0 mt-0">
                    <h2>Have any questions about real estate transactions?</h2>
                </div>
                <div class="accordion faq ms-0 me-111 mb-4 mb-lg-0" id="accordionExample3">
                    
                    @foreach (@$faq['faqs'] as $faqs )
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{@$faqs['id']}}" aria-expanded="true" aria-controls="collapseOne{{@$faqs['id']}}">
                                {{@$faqs['question']}}
                            </button>
                        </h2>
                        <div id="collapseOne{{@$faqs['id']}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample3" >
                            <div class="accordion-body">
                                <p> {{@$faqs['answer']}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5">
                <div class="faq-img">
                    <img src="{{asset(@$faq['section1_img'])}}" style="height:587px" alt="faq">
                    <div class="text-end">
                        <a href="{{@$faq['section1_button_link']}}" class="read-more">
                           {{@$faq['section1_button_label']}}
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection