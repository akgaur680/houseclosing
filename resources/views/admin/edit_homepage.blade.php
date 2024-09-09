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
                    <h2 class="text-center mb-4">Homepage</h2>
                    <hr>
                    <form class="form-sample" action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h3 class="text-center mb-4">1. Section (Header)</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_title">Title :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_title" name="header_title" placeholder="Header Title" value="{{ old('header_title', $homepage->header_title) }}" required>
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
                                        <input type="text" class="form-control" id="header_description" name="header_description" placeholder="Homepage Description" value="{{ old('header_description', $homepage->header_description) }}" required>
                                        @error('header_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_label1">Button
                                        Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_label1" name="header_button_label1" placeholder="Homepage Button Label" value="{{ old('header_button_label1', $homepage->header_button_label1) }}">
                                        @error('header_button_label1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_link1">Button
                                        Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_link1" name="header_button_link1" placeholder="Homepage Button Link" value="{{ old('header_button_link1', $homepage->header_button_link1) }}">
                                        @error('header_button_link1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_label2">Button
                                        Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_label2" name="header_button_label2" placeholder="Homepage Second Button Label" value="{{ old('header_button_label2', $homepage->header_button_label2) }}">
                                        @error('header_button_label2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_link2">Button
                                        Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_link2" name="header_button_link2" placeholder="Homepage Second Button Link" value="{{ old('header_button_link2', $homepage->header_button_link2) }}">
                                        @error('header_button_link2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_img">Background
                                        Image 1</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_img" id="header_img" class="form-control">
                                        @if (!empty($homepage->header_img))
                                        <img src="{{ asset($homepage->header_img) }}" alt="Homepage Image" height="100px">
                                        @endif
                                        @error('header_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_img2">Background
                                        Image 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_img2" id="header_img2" class="form-control">
                                        @if (!empty($homepage->header_img2))
                                        <img src="{{ asset($homepage->header_img2) }}" alt="Homepage Image 2" height="100px">
                                        @endif
                                        @error('header_img2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">2. Section</h3>
                            <!--Section Card Area -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card1_title">First Card Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card1_title" name="section1_card1_title" placeholder="Section Title" value="{{ old('section1_card1_title', $homepage->section1_card1_title) }}">
                                        @error('section1_card1_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card1_description">First Card Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card1_description" name="section1_card1_description" placeholder="Section Title" value="{{ old('section1_card1_description', $homepage->section1_card1_description) }}">
                                        @error('section1_card1_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card2_title">Second Card Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card2_title" name="section1_card2_title" placeholder="Section Title" value="{{ old('section1_card2_title', $homepage->section1_card2_title) }}">
                                        @error('section1_card2_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card2_description">Second Card Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card2_description" name="section1_card2_description" placeholder="Section Title" value="{{ old('section1_card2_description', $homepage->section1_card2_description) }}">
                                        @error('section1_card2_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card3_title">Third Card Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card3_title" name="section1_card3_title" placeholder="Section Title" value="{{ old('section1_card3_title', $homepage->section1_card3_title) }}">
                                        @error('section1_card3_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card3_description">Third Card Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card3_description" name="section1_card3_description" placeholder="Section Title" value="{{ old('section1_card3_description', $homepage->section1_card3_description) }}">
                                        @error('section1_card3_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_img">Section Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="section1_img" id="section1_img" class="form-control">
                                        @if (!empty($homepage->section1_img))
                                        <img src="{{ asset($homepage->section1_img) }}" alt="Section Image" height="100px">
                                        @endif
                                        @error('section1_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">3. Section</h3>
                            <!--Section Short Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_title">Section Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_title" name="section2_title" placeholder="Section Short Title" value="{{ old('section2_title', $homepage->section2_title) }}">
                                        @error('section2_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_description">Section Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_description" name="section2_description" placeholder="Section Description" value="{{ old('section2_description', $homepage->section2_description) }}">
                                        @error('section2_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_successrate">Success Rate</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="section2_successrate" name="section2_successrate" placeholder="Success Rate" value="{{ old('section2_successrate', $homepage->section2_successrate) }}">
                                        @error('section2_successrate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_casesdone">Cases Done</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="section2_casesdone" name="section2_casesdone" placeholder="Cases Done" value="{{ old('section2_casesdone', $homepage->section2_casesdone) }}">
                                        @error('section2_casesdone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_years_in_business">Years in Business</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="section2_years_in_business" name="section2_years_in_business" placeholder="Years in Business" value="{{ old('section2_years_in_business', $homepage->section2_years_in_business) }}">
                                        @error('section2_years_in_business')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_button_label">Button Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_button_label" name="section2_button_label" placeholder="Section Button Label" value="{{ old('section2_button_label', $homepage->section2_button_label) }}">
                                        @error('section2_button_label')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_button_link">Button Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_button_link" name="section2_button_link" placeholder="Section Button Link" value="{{ old('section2_button_link', $homepage->section2_button_link) }}">
                                        @error('section2_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="section2_img1">Image 1</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="section2_img1" id="section2_img1" class="form-control" value="{{$homepage->section2_img1}}">
                                            @if (!empty($homepage->section2_img1))
                                            <img src="{{ asset($homepage->section2_img1) }}" alt="Meta Image" height="100px">
                                            @endif
                                            @error('section2_img1')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="section2_img2">Image 2</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="section2_img2" id="section2_img2" class="form-control" value="{{$homepage->section2_img2}}">
                                            @if (!empty($homepage->section2_img2))
                                            <img src="{{ asset($homepage->section2_img2) }}" alt="Meta Image" height="100px">
                                            @endif
                                            @error('section2_img2')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                                <h3 class="text-center mb-4">4. Section (Member)</h3>
                                <!--Section Title -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="section3_title">Section Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="section3_title" name="section3_title" placeholder="Section Short Title" value="{{ old('section3_title', $homepage->section3_title) }}">
                                            @error('section3_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="section3_description">Section Description</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="section3_description" name="section3_description" placeholder="Section Desciption"> {{ old('section3_description', $homepage->section3_description) }} </textarea>
                                            @error('section3_description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="section3_button_label">Button Label</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="section3_button_label" name="section3_button_label" placeholder="Section Button Label" value="{{ old('section3_button_label', $homepage->section3_button_label) }}">
                                            @error('section3_button_label')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="section3_button_link">Button Link</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="section3_button_link" name="section3_button_link" placeholder="Section Button Link" value="{{ old('section3_button_link', $homepage->section3_button_link) }}">
                                            @error('section3_button_link')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <hr>
                                <h3 class="text-center mb-4">5. Meta Section</h3>
                                <!--Section Short Title -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="{{ old('meta_title', $homepage->meta_title) }}">
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
                                            <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="{{ old('meta_description', $homepage->meta_description) }}">
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
                                            <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="{{ old('meta_tag', $homepage->meta_tag) }}">
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
                                            <input type="file" name="meta_img" id="meta_img" class="form-control" value="{{$homepage->meta_img}}">
                                            @if (!empty($homepage->meta_img))
                                            <img src="{{ asset($homepage->meta_img) }}" alt="Meta Image" height="100px">
                                            @endif
                                            @error('meta_img')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
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


@push('scripts')
<script type="text/javascript">
    tinymce.init({
        selector: '#section3_description',
        
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