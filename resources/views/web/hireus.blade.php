<?php

use App\Http\Controllers\FrontEndController;
use App\Models\ServiceCategory;

$services = ServiceCategory::all();
$hire = FrontEndController::hireus();
?>
@extends('layouts.web')
@section('meta')
<title>{{ @$hire['meta_title'] ?? 'HouseClosing' }}</title>
<meta name="description" content="{{ @$hire['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:title" content="{{ @$hire['meta_title'] ?? 'HouseClosing' }}">
<meta property="og:description" content="{{ @$hire['meta_description'] ?? 'HouseClosing' }}">
<meta property="og:image" content="{{ asset(@$hire['meta_image']) }}">
<meta name="keywords" content="{{ @$hire['meta_tags'] ?? 'HouseClosing' }}">
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
                            <span>Hire Us</span>
                        </li>
                    </ul>
                    <h2> {{@$hire['header_title']}} </h2>
                    <p> {!!@$hire['header_description']!!} </p>

                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset(@$hire['header_img'])}}" style="border-radius: 10px" alt="">
            </div>
        </div>
    </div>
</div>

<div class="contact-us-area overflow-hidden pb-130" style="margin: 40px;">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <h2>Hire Us Now</h2>
                    <div  >
                    @if ($errors->any())
                            <div class="alert alert-danger" id="hireus_form">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" id="hireus_form">
                                {{ session('success') }}
                            </div>
                        @endif
                        </div>
                    <form id="hireUsForm" class="contact-us-form" action="{{route('hireus.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control" value="{{old('phone')}}" required >
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Address</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control" name="address"> {{old('address')}} </textarea>
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Message</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control" name="message" required> {{old('message')}} </textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="g-recaptcha" data-sitekey="6Lc4NBoqAAAAACD1FiX596PGkcmpPpcbhobQsDte" style="padding: 10px;  margin: 10px;"></div>
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                            </div>
                        </div>
                        <input type="hidden" name="selected_services" id="selected_services" value="{{old('selected_services')}}" >
                        @error('selected_services')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="hidden" name="selected_service_names" id="selected_service_names" value="{{old('selected_service_names')}}"  >
                        @error('selected_service_names')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="pt-lg-3 row">
                            <label class="col-sm-2 col-form-label label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark border-0">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member-area pt-130 pb-105" style="padding-top: 90px;">
                    <div class="container mw-1380">
                        <div class="row justify-content-center">

                            @foreach (@$services as $service)
                            <div class="col-xl-6">
                                <div class="team-member-single-item-hireus border transition-y">
                                    <div class="d-md-flex align-items-center">
                                        <a class="flex-shrink-0 mb-4 mb-md-0 d-block">
                                            @if (@$service->icon)
                                            <img src="{{@$service->icon}}" alt="service" style="max-width: 35px; margin-right:10px;">
                                            @else
                                            <img src="{{asset('assets/images/1.png')}}" alt="service" style="max-width: 35px; margin-right:10px;">
                                            @endif
                                        </a>
                                        <div class="flex-grow-1 ms-34">
                                            <div class="form-check">
                                                <input class="form-check-input service-checkbox" type="checkbox" value="{{ @$service->slug }}" data-name="{{ @$service->header_title }}" id="{{ @@$service->slug }}">
                                                <label class="form-check-label" for="{{ @$service->slug }}" style="font-size: 17px;">
                                                    {{ @$service->header_title }}
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.service-checkbox');
        const selectedServicesInput = document.getElementById('selected_services');
        const selectedServiceNamesInput = document.getElementById('selected_service_names');

        document.getElementById('hireUsForm').addEventListener('submit', function(event) {
            const selectedServices = [];
            const selectedServiceNames = [];

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedServices.push(checkbox.value);
                    selectedServiceNames.push(checkbox.getAttribute('data-name'));
                }
            });

            selectedServicesInput.value = selectedServices.join(',');
            selectedServiceNamesInput.value = selectedServiceNames.join(',');

            console.log('Selected Services:', selectedServices);
            console.log('Selected Service Names:', selectedServiceNames);
        });
    });
</script>

<script type="text/javascript">
    jQuery("html").animate({
        scrollTop:jQuery("#hireus_form").offset().top - 200
    });

    
</script>

@endsection
