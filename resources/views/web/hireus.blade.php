<?php

use App\Http\Controllers\FrontEndController;
use App\Models\ServiceCategory;

$services = ServiceCategory::all();
$hire = FrontEndController::hireus();
?>
@extends('layouts.web')
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
                            <a href="https://houseclosing.ca">Home</a>
                        </li>
                        <li>
                            <span>Hire Us</span>
                        </li>
                    </ul>
                    <h2> {{@$hire['header_title']}} </h2>
                    <p> {{@$hire['header_description']}} </p>

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
                    <form id="hireUsForm" class="contact-us-form" action="{{route('hireus.store')}}" method="POST">
                        @csrf
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" >
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" >
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Address</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control" name="address"></textarea>
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Message</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control" name="message" ></textarea>
                                @error('message')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="selected_services" id="selected_services" >
                        @error('selected_services')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="hidden" name="selected_service_names" id="selected_service_names" >
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

                            @foreach ($services as $service)
                            <div class="col-xl-6">
                                <div class="team-member-single-item-hireus border transition-y">
                                    <div class="d-md-flex align-items-center">
                                        <a class="flex-shrink-0 mb-4 mb-md-0 d-block">
                                            <img src="https://houseclosing.ca/assets/images/hireus/1.png" alt="service" style="max-width: 35px; margin-right:10px;">
                                        </a>
                                        <div class="flex-grow-1 ms-34">
                                            <div class="form-check">
                                                <input class="form-check-input service-checkbox" type="checkbox" value="{{ $service->slug }}" data-name="{{ $service->header_title }}" id="{{ $service->slug }}">
                                                <label class="form-check-label" for="{{ $service->slug }}" style="font-size: 17px;">
                                                    {{ $service->header_title }}
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

@endsection
