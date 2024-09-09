@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <h4 class="card-title">Setting</h4>
                    <form class="form-sample" action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Header Logo -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_logo">Header Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_logo" id="header_logo" class="form-control">
                                        @if(@$setting->header_logo)
                                        <img src="{{ url(@$setting->header_logo) }}" alt="" height="50px">
                                        @endif
                                        @error('header_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Logo -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="footer_logo">Footer Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="footer_logo" id="footer_logo" class="form-control">
                                        @if(@$setting->footer_logo)
                                        <img src="{{ url(@$setting->footer_logo) }}" alt="" height="50px">
                                        @endif
                                        @error('footer_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="footer_title">Footer Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="footer_title" name="footer_title" placeholder="Footer Title" value="{{ old('footer_title', $setting->footer_title) }}">
                                        @error('footer_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Contact No. -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="contact_no">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Phone" value="{{ old('contact_no', $setting->contact_no) }}">
                                        @error('contact_no')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Address -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="contact_address">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_address" name="contact_address" placeholder="Address" value="{{ old('contact_address', $setting->contact_address) }}">
                                        @error('contact_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="email">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $setting->email) }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Map -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="map">Map</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="map" name="map" placeholder="Map" value="{{ old('map', $setting->map) }}">
                                        @error('map')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Copyright Content -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="copyright_content">Copyright Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="copyright_content" name="copyright_content" placeholder="Copyright Content" value="{{ old('copyright_content', $setting->copyright_content) }}">
                                        @error('copyright_content')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Consultation Bar Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_title">Consultation bar Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_title" name="consultation_bar_title" placeholder="Consultation Bar Title" value="{{ old('consultation_bar_title', $setting->consultation_bar_title) }}">
                                        @error('consultation_bar_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_description">Consultation bar Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_description" name="consultation_bar_description" placeholder="Consultation Bar Description" value="{{ old('consultation_bar_description', $setting->consultation_bar_description) }}">
                                        @error('consultation_bar_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Consultation Bar Description -->
                        <div class="row">
                            <!-- Consultation Button Label -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_button_label">Consultation Bar Button Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_button_label" name="consultation_bar_button_label" placeholder="Consultation Bar Button label" value="{{ old('consultation_bar_button_label', $setting->consultation_bar_button_label) }}">
                                        @error('consultation_bar_button_label')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Consultation Button Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_button_link">Consultation Bar Button Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_button_link" name="consultation_bar_button_link" placeholder="Consultation Bar Button Link" value="{{ old('consultation_bar_button_link', $setting->consultation_bar_button_link) }}">
                                        @error('consultation_bar_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Facebook Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="facebook_link">Facebook Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Facebook Link" value="{{ old('facebook_link', $setting->facebook_link) }}">
                                        @error('facebook_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Twitter Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="twitter_link">Twitter Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Twitter Link" value="{{ old('twitter_link', $setting->twitter_link) }}">
                                        @error('twitter_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Instagram Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="instagram_link">Instagram Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="Instagram Link" value="{{ old('instagram_link', $setting->instagram_link) }}">
                                        @error('instagram_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
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
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="{{ old('meta_title', $setting->meta_title) }}">
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
                                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="{{ old('meta_description', $setting->meta_description) }}">
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
                                        <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="{{ old('meta_tag', $setting->meta_tag) }}">
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
                                        @if (!empty($setting->meta_img))
                                        <img src="{{ asset($setting->meta_img) }}" alt="Meta Image" height="100px">
                                        @endif
                                        @error('meta_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script type="text/javascript">
        tinymce.init({
            selector: '#copyright_content',
            
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'help', 'jsplus_maps'
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