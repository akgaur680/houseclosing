@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- List of Categories -->
    <div class="row">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                      <!-- Breadcrumbs -->
                      <div class="page-banner-content">
                        <ul class="list-unstyled breadcrumbs" style="display:inline-block;">
                            <li style="display: inline;">
                                <a href="{{url('admin/dashboard')}}" style="text-decoration: none; color:black" class="fw-bold fs-6" >Home/ </a>
                            </li>
                            <li style="display: inline;">
                                <a href="{{url('admin/lawyer-member-area')}}" style="text-decoration: none; color:green" class="fw-bold fs-6">Lawyer Member Area/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" >{{@$member->lawyer_name}}</span>
                            </li>
                        </ul>
                    </div>
                    <div id="add-category-form-container" class="mt-5">
                        <hr>
                        <h2 class="text-center my-3">Edit Lawyer</h2>
                        <form id="create-category-form" action="{{ route('admin.lawyer-member.update', @$member->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3 class="text-center">1. Member Details</h3>
                            <br>
                            <input type="hidden" name="lawyers_id" value="{{ $lawyers->id }}">
                            <div class="row">
                                <!-- Lawyer Name -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_name">Name</label>
                                        <input type="text" class="form-control" id="lawyer_name" name="lawyer_name" value="{{@$member['lawyer_name']}}" placeholder="Name" required>
                                        @error('lawyer_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Lawyer Designation -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_designation">Designation</label>
                                        <input class="form-control" id="lawyer_designation" name="lawyer_designation" value="{{@$member['lawyer_designation']}}" placeholder="Designation"></input>
                                        @error('lawyer_designation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Lawyer About -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_about">About</label>
                                        <input type="text" class="form-control" id="lawyer_about" name="lawyer_about" value="{{@$member['lawyer_about']}}" placeholder="About">
                                        @error('lawyer_about')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Lawyer Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_img">Image</label>
                                        <input type="file" class="form-control" id="lawyer_img" name="lawyer_img">
                                        @if (!empty(@$member['lawyer_img']))
                                        <img src="{{ asset(@$member['lawyer_img']) }}" alt="Lawyer Image" height="100px">
                                        @endif
                                        @error('lawyer_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Meta Details -->
                                <div class="row">
                                    <hr>
                                    <h3 class="text-center mb-4">2. Meta Section</h3>
                                    <!--Section Short Title -->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{@$member['meta_title']}}" placeholder="Meta Title" value="{{ old('meta_title') }}">
                                                @error('meta_title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_description">Meta Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{@$member['meta_description']}}" placeholder="Meta Description" value="{{ old('meta_description') }}">
                                                @error('meta_description')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_tag">Meta Tag</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="{{ @$member['meta_tag']   }}">
                                                @error('meta_tag')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_img">Meta Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="meta_img" id="meta_img" class="form-control">
                                                @if (!empty(@$member['meta_img']))
                                                <img src="{{ asset(@$member['meta_img']) }}" alt="Meta Image" height="100px">
                                                @endif
                                                @error('meta_img')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit Lawyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection