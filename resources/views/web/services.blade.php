<?php
use App\Http\Controllers\FrontEndController;
$services = FrontEndController::servicesdata();
?>
@extends('layouts.web')
@section('meta')
<title>{{ @$services['meta_title'] ?? 'HouseClosing' }}</title>
<meta name="description" content="{{ @$services['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:title" content="{{ @$services['meta_title'] ?? 'HouseClosing' }}">
<meta property="og:description" content="{{ @$services['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:image" content="{{ asset(@$services['meta_image']) }}">
<meta name="keywords" content="{{ @$services['meta_tags'] ?? 'HouseClosing' }}">
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
                            <span>Services</span>
                        </li>
                    </ul>
                    <h2>{{@$services['header_title']}}</h2>
                    <p> {{@$services['header_description']}} </p>
                    <a href="/{{@$services['header_button_link']}}" class="read-more text-primary">
                        {{@$services['header_button_label']}}
                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="{{asset(@$services['header_img'])}}" class="img" alt="banner-img">
                    <img src="{{asset('assets/images/shape-7.png')}}" class="shape shape-7" alt="shape">
                    <img src="{{asset('assets/images/shape-8.png')}}" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="buying-area overflow-hidden ptb-130">
    <div class="container mw-1380">
        <div class="section-title mw-760">
            <h2>{{@$services['section1_title']}}</h2>
        </div>
        <div class="row">
            @foreach (@$services['categories'] as $servicelist )
            <div class="col-lg-4 col-md-6">
                <div class="buying-single-item mb-4 transition-y">
                    <a href="{{url('service-areas', @$servicelist['slug'])}}" class="d-block buying-img">
                        <img src="{{asset(@$servicelist['header_img'])}}" alt="banner" style="height: 258px; width:100%;">
                    </a>
                    <div class="buying-content">
                        <h3>
                            <a href="{{url('service-areas', @$servicelist['slug'])}}">{{@$servicelist['header_title']}}</a>
                        </h3>
                        <p style="height: 120px;"> {{@$servicelist['header_description']}} </p>
                        <div class="border-top">
                            <a href="{{url('service-areas', @$servicelist['slug'])}}" class="read-more">
                                Learn More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
</div>
@endsection