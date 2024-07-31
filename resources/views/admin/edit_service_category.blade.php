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
                                <a href="{{url('admin/service-area-categories')}}" style="text-decoration: none; color:green" class="fw-bold fs-6">Service Area Categories/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" >{{@$category->header_title}}</span>
                            </li>
                        </ul>
                    </div>
                    <div id="add-category-form-container" class="mt-5">
                        <hr>
                        <h2 class="text-center my-3">Edit Service Area Category</h2>
                        <form id="edit-category-form" action="{{ route('admin.service-area-categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3 class="text-center">1. Header</h3>
                            <br>
                            <input type="hidden" name="services_id" value="{{$category->services_id}}">
                            <div class="row">
                                <!-- Header Title -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_title">Header Title</label>
                                        <input type="text" class="form-control" id="header_title" name="header_title" value="{{$category->header_title}}" placeholder="Header Title" required>
                                        @error('header_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Header Description -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_description">Header Description</label>
                                        <input class="form-control" id="header_description" value="{{$category->header_description}}" name="header_description" placeholder="Header Description"></input>
                                        @error('header_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Header Button Label -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_button_label">Button Label</label>
                                        <input type="text" class="form-control" id="header_button_label" value="{{$category->header_button_label}}" name="header_button_label" placeholder="Header Title" required>
                                        @error('header_button_label')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Header Button Link -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_button_link">Button Link</label>
                                        <input type="text" class="form-control" id="header_button_link" name="header_button_link" value="{{$category->header_button_link}}" placeholder="Header Title" required>
                                        @error('header_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Slug -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input class="form-control" id="slug" name="slug" value="{{$category->slug}}" placeholder="Slug"></input>
                                        @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Header Background Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_img">Header Background Image</label>
                                        <input type="file" class="form-control" id="header_img" name="header_img">
                                        <img src="{{asset($category->header_img)}}" height="70px">
                                        @error('header_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <h2 class="text-center">2. Section</h2>
                                <!-- Section 1 Description -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="section1_description">Section 1 Description</label>
                                        <textarea class="form-control" id="section1_description" name="section1_description" placeholder="Section 1 Description">{{$category->section1_description}}</textarea>
                                        @error('section1_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Section 1 Button Label -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section1_button_label">Section 1 Button Label</label>
                                        <input type="text" class="form-control" id="section1_button_label" name="section1_button_label" value="{{$category->section1_button_label}}" placeholder="Section 1 Button Label">
                                        @error('section1_button_label')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Section 1 Button Link -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section1_button_link">Section 1 Button Link</label>
                                        <input type="text" class="form-control" id="section1_button_link" name="section1_button_link" value="{{$category->section1_button_link}}" placeholder="Section 1 Button Link">
                                        @error('section1_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Section 1 Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section1_img">Section 1 Image</label>
                                        <input type="file" class="form-control" id="section1_img" name="section1_img">
                                        <img src="{{asset($category->section1_img)}}" height="70px">
                                        @error('section1_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <h2 class="text-center">3. Section</h2>
                                <!-- Section 2 Title -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section2_img">Section 2 Image</label>
                                        <input type="file" class="form-control" id="section2_img" name="section2_img">
                                        <img src="{{asset($category->section2_img)}}" height="70px">
                                        @error('section2_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Section 2 Description -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="section2_description">Section 2 Description</label>
                                        <input class="form-control" id="section2_description" name="section2_description" value="{{$category->section2_description}}" placeholder="Section 2 Description"></input>
                                        @error('section2_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Meta Details -->
                                <div class="row">
                                    <hr>
                                    <h3 class="text-center mb-4">4. Meta Section</h3>
                                    <!--Section Short Title -->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="{{ old('meta_title', $category->meta_title) }}">
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
                                                <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="{{ old('meta_description', $category->meta_description) }}">
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
                                                <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="{{ old('meta_tag', $category->meta_tag) }}">
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
                                                @if (!empty($category->meta_img))
                                                <img src="{{ asset($category->meta_img) }}" alt="Meta Image" height="100px">
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
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script type="text/javascript">
    tinymce.init({
        selector: '#section1_description, #section2_description',
        width: 800,
        height: 400,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
            'media', 'table', 'emoticons', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
        menu: {
            favs: {
                title: 'My Favorites',
                items: 'code visualaid | searchreplace | emoticons'
            }
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: '/www.tiny.cloud/css/codepen.min.css',
        readonly: false,
        disabled: false,
    });
</script>
@endpush
@endsection