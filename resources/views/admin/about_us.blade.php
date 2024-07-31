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
                    <h2 class="text-center mb-4">About Page</h2>
                    <hr>
                    <form class="form-sample" action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <h3 class="text-center mb-4">1. Section (Header)</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_title">Title :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_title" name="header_title" placeholder="Header Title" value="{{ old('header_title', @$about['header_title']) }}" required>
                                        @error('header_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_description">
                                        Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_description" name="header_description" placeholder=" Description" value="{{ old('header_description', @$about['header_description']) }}" >
                                        @error('header_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_button_label">Button
                                        Label</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_button_label" name="header_button_label" placeholder="Button Label" value="{{ old('header_button_label', @$about['header_button_label']) }}">
                                        @error('header_button_label')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_button_link">Button
                                        Link</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_button_link" name="header_button_link" placeholder=" Button Link" value="{{ old('header_button_link', @$about['header_button_link']) }}">
                                        @error('header_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_img">Header Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="header_img" id="header_img" class="form-control">
                                        @if (!empty(@$about['header_img']))
                                        <img src="{{ asset(@$about['header_img']) }}" alt="Header Image" height="100px">
                                        @endif
                                        @error('header_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">2. Section</h3>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section1_description">Section Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section1_description" name="section1_description" placeholder="Section Description" value="{{ old('section1_description', @$about['section1_description']) }}">
                                        @error('section1_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section1_business_referrals">Business from Referrals</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section1_business_referrals" name="section1_business_referrals" placeholder="Business from Referrals" value="{{ old('section1_business_referrals', @$about['section1_business_referrals']) }}">
                                        @error('section1_business_referrals')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section1_verbal_commitment">Minute Verbal Commitment</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section1_verbal_commitment" name="section1_verbal_commitment" placeholder="Minute Verbal Commitment" value="{{ old('section1_verbal_commitment', @$about['section1_verbal_commitment']) }}">
                                        @error('section1_verbal_commitment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section1_img1">Section 1 Image 1</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="section1_img1" id="section1_img1" class="form-control" value="{{@$about->section1_img1}}">
                                            @if (!empty(@$about['section1_img1']))
                                            <img src="{{ asset(@$about['section1_img1']) }}" alt="Section1 Image1" height="100px">
                                            @endif
                                            @error('section1_img1')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section1_img2">Section 1 Image 2</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="section1_img2" id="section1_img2" class="form-control" value="{{@$about->section1_img2}}">
                                            @if (!empty(@$about['section1_img2']))
                                            <img src="{{ asset(@$about['section1_img2']) }}" alt="Section1 Image2" height="100px">
                                            @endif
                                            @error('section1_img2')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Section 3  -->

                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">3. Section</h3>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_title">Section Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_title" name="section2_title" placeholder="Section Title" value="{{ old('section2_title', @$about['section2_title']) }}">
                                        @error('section2_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_description">Section Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_description" name="section2_description" placeholder="Section Description" value="{{ old('section2_description', @$about['section2_description']) }}">
                                        @error('section2_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_successful_txn">Successful Transactions</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_successful_txn" name="section2_successful_txn" placeholder="Successful Transactions" value="{{ old('section2_successful_txn', @$about['section2_successful_txn']) }}">
                                        @error('section2_successful_txn')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_clients_served">Clients Served</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_clients_served" name="section2_clients_served" placeholder="Clients Served" value="{{ old('section2_clients_served', @$about['section2_clients_served']) }}">
                                        @error('section2_clients_served')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_years_in_business">Years in Business</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_years_in_business" name="section2_years_in_business" placeholder="Years in Business" value="{{ old('section2_years_in_business', @$about['section2_years_in_business']) }}">
                                        @error('section2_years_in_business')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_industry_awards">Industry Awards</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_industry_awards" name="section2_industry_awards" placeholder="Industry Awards" value="{{ old('section2_industry_awards', @$about['section2_industry_awards']) }}">
                                        @error('section2_industry_awards')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_img">Section 2 Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="section2_img" id="section2_img" class="form-control" value="{{@$about['section2_img']}}">
                                        @if (!empty(@$about['section2_img']))
                                        <img src="{{ asset(@$about['section2_img']) }}" alt="Section 2 Image" height="100px">
                                        @endif
                                        @error('section2_img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 Area -->
                            <div class="row">
                                <h4>Card 1</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card1_title">First Card Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card1_title" name="section2_card1_title" placeholder="Card Title" value="{{ old('section2_card1_title', @$about['section2_card1_title']) }}">
                                            @error('section2_card1_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card1_description">First Card Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card1_description" name="section2_card1_description" placeholder="Card Description" value="{{ old('section2_card1_description', @$about['section2_card1_description']) }}">
                                            @error('section2_card1_description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card1_icon">First Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card1_icon" name="section2_card1_icon" placeholder="Card Icon" value="{{ old('section2_card1_icon', @$about['section2_card1_icon']) }}">
                                            @error('section2_card1_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Card 2 Area -->
                            <div class="row">
                                <h4>Card 2</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card2_title">Second Card Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card2_title" name="section2_card2_title" placeholder="Card Title" value="{{ old('section2_card2_title', @$about['section2_card2_title']) }}">
                                            @error('section2_card2_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card2_description">Second Card Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card2_description" name="section2_card2_description" placeholder="Card Description" value="{{ old('section2_card2_description', @$about['section2_card2_description']) }}">
                                            @error('section2_card2_description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card2_icon">Second Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card2_icon" name="section2_card2_icon" placeholder="Card Icon" value="{{ old('section2_card2_icon', @$about['section2_card2_icon']) }}">
                                            @error('section2_card2_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Third Card -->
                             <div class="row">
                             <h4>Card 3</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_card3_title">Third Card Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card3_title" name="section2_card3_title" placeholder="Card Title" value="{{ old('section2_card3_title', @$about['section2_card3_title']) }}">
                                        @error('section2_card3_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_card3_description">Third Card Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card3_description" name="section2_card3_description" placeholder="Card Description" value="{{ old('section2_card3_description', @$about['section2_card3_description']) }}">
                                        @error('section2_card3_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card3_icon">Third Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card3_icon" name="section2_card3_icon" placeholder="Card Icon" value="{{ old('section2_card3_icon', @$about['section2_card3_icon']) }}">
                                            @error('section2_card3_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                             </div>
                              <!-- Fourth Card -->
                              <div class="row">
                             <h4>Card 4</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_card4_title">Fourth Card Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card4_title" name="section2_card4_title" placeholder="Card Title" value="{{ old('section2_card4_title', @$about['section2_card4_title']) }}">
                                        @error('section2_card4_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_card4_description">Fourth Card Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card4_description" name="section2_card4_description" placeholder="Card Description" value="{{ old('section2_card4_description', @$about['section2_card4_description']) }}">
                                        @error('section2_card4_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card4_icon">Fourth Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card4_icon" name="section2_card4_icon" placeholder="Card Icon" value="{{ old('section2_card4_icon', @$about['section2_card4_icon']) }}">
                                            @error('section2_card4_icon')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                             </div>

                        </div>


                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">4. Meta Section</h3>
                            <!--Meta Details -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="meta_title">Meta Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="{{ old('meta_title', @$about['meta_title']) }}">
                                        @error('meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="meta_description">Meta Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="{{ old('meta_description', @$about['meta_description']) }}">
                                        @error('meta_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="meta_tag">Meta Tag</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="{{ old('meta_tag', @$about['meta_tag']) }}">
                                        @error('meta_tag')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="meta_img">Meta Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="meta_img" id="meta_img" class="form-control" value="{{@$about->meta_img}}">
                                        @if (!empty(@$about['meta_img']))
                                        <img src="{{ asset(@$about['meta_img']) }}" alt="Meta Image" height="100px">
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

@endsection