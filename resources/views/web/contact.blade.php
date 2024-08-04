<?php
use App\Http\Controllers\FrontEndController;
$contact = FrontEndController::contact();
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
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="/">Home</a>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.794509250526!2d-79.67194082333658!3d43.506622161898115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x882b437253d7d05b:0x9606cc87969b3a5!2s2010%20Winston%20Park%20Dr%20Suite%20200B,%20Oakville,%20ON%20L6H%206P5,%20Canada!5e0!3m2!1sen!2sin!4v1722136655926!5m2!1sen!2sin" style="width: 100%;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection