<?php
use App\Http\Controllers\FrontEndController;
$contact = FrontEndController::contact();
$settings = FrontEndController::settings();
?>

@extends('layouts.web')
@section('meta')
<title>{{ @$contact['meta_title'] ?? 'HouseClosing' }}</title>
<meta name="description" content="{{ @$contact['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:title" content="{{ @$contact['meta_title'] ?? 'HouseClosing' }}">
<meta property="og:description" content="{{ @$contact['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:image" content="{{ asset(@$contact['meta_image']) }}">
<meta name="keywords" content="{{ @$contact['meta_tags'] ?? 'HouseClosing' }}">
@endsection
@section('content')
<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <span>Contact Us</span>
                        </li>
                    </ul>
                    <h2>{{@$contact['header_title']}}</h2>
                    <p> {{@$contact['header_description']}} </p>
                    <!-- <a href="{{@$contact['header_button_link']}}" class="read-more text-primary">
                        {{@$contact['header_button_label']}}
                        <i class="flaticon-right-arrow"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="{{asset(@$contact['header_img'])}}" class="img" alt="banner-img">
                    <img src="{{asset('assets/images/shape-7.png')}}" class="shape shape-7" alt="shape">
                    <img src="{{asset('assets/images/shape-8.png')}}" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Area -->
<div class="contact-us-area overflow-hidden pt-130">
    <div class="container">
        <div class="row">
          @include('web.components.contact_form')
            <div class="col-lg-6">
                <div class="google-map">
                {!!@$settings['map']!!}
            </div>
            </div>
        </div>
    </div>
</div>

@endsection