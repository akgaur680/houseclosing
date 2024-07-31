<?php

use App\Http\Controllers\FrontEndController;

$lawyers = FrontEndController::lawyers();
?>
@extends('layouts.web')

@section('meta')
<title>{{ @$lawyers['meta_title'] ?? 'HouseClosing' }}</title>
<meta name="description" content="{{ @$lawyers['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:title" content="{{ @$lawyers['meta_title'] ?? 'HouseClosing' }}">
<meta property="og:description" content="{{ @$lawyers['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:image" content="{{ asset(@$lawyers['meta_image']) }}">
<meta name="keywords" content="{{ @$lawyers['meta_tags'] ?? 'HouseClosing' }}">
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
                            <span>Lawyers</span>
                        </li>
                    </ul>
                    <h2>{{@$lawyers['header_title']}}</h2>
                    <p> {{@$lawyers['header_description']}} </p>
                    <a href="{{@$lawyers['header_button_link']}}" class="read-more text-primary">
                        {{@$lawyers['header_button_label']}}
                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="{{asset(@$lawyers['header_img'])}}" class="img" alt="banner-img">
                    <img src="{{asset('assets/images/shape-7.png')}}" class="shape shape-7" alt="shape">
                    <img src="{{asset('assets/images/shape-8.png')}}" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-member-area pt-130 pb-105">
    <div class="container mw-1380">
        <div class="row justify-content-center">
            @foreach ($lawyers['members'] as $member )

            <div class="col-xl-6">
                <div class="team-member-single-item border transition-y">
                    <div class="d-md-flex align-items-center">
                        <a href="lawyers" class="flex-shrink-0 mb-4 mb-md-0 d-block">
                            <img src="{{asset($member['lawyer_img'])}}" alt="Tajinder Kaur Sivia">
                        </a>
                        <div class="flex-grow-1 ms-34 text-center">
                            <span class="title"> {{$member['lawyer_designation']}} </span>
                            <h3 class="text-center">
                                <a href="lawyers">{{$member['lawyer_name']}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection