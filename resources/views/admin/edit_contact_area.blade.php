@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
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
                    <h2 class="text-center mb-4">Contact Page</h2>

                    <hr>
                    <form class="form-sample" action=" {{route('admin.contact-area.update')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3 class="text-center mb-4">1. Section (Header)</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_title">Title :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_title" name="header_title" placeholder="Header Title" value="{{ old('header_title', @$contact->header_title) }}" required>
                                        @error('header_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_description">
                                        Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_description" name="header_description" placeholder="Header Description" value="{{ old('header_description', @$contact->header_description) }}" required>
                                        @error('header_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_label">Button
                                        Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_label" name="header_button_label" placeholder="Header Button Label" value="{{ old('header_button_label', @$contact->header_button_label) }}">
                                        @error('header_button_label')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_link">Button
                                        Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_link" name="header_button_link" placeholder="Header Button Link" value="{{ old('header_button_link', @$contact->header_button_link) }}">
                                        @error('header_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_img">Header Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_img" id="header_img" class="form-control">
                                        @if (!empty(@$contact->header_img))
                                        <img src="{{ asset(@$contact->header_img) }}" alt="Homepage Image" height="100px">
                                        @endif
                                        @error('header_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <h3 class="text-center mb-4">2. Meta Section</h3>
                                <!--Section Short Title -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="{{ old('meta_title', @$contact->meta_title) }}">
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
                                            <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="{{ old('meta_description', @$contact->meta_description) }}">
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
                                            <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="{{ old('meta_tag', @$contact->meta_tag) }}">
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
                                            <input type="file" name="meta_img" id="meta_img" class="form-control" value="{{@$contact->meta_img}}">
                                            @if (!empty(@$contact->meta_img))
                                            <img src="{{ asset(@$contact->meta_img) }}" alt="Meta Image" height="100px">
                                            @endif
                                            @error('meta_img')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row text-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection