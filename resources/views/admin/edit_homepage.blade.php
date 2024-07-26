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
                            <h3 class="text-center mb-4">2. Section (Common Settings)</h3>
                            <div class="col-md-12 text-center mb-4">
                                <h4>
                                    <a href="{{ url('admin/setting') }}" style="text-decoration:none">
                                        Counsultation Bar Settings <i class="mdi mdi-logout-variant"></i>
                                    </a>
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">3. Section</h3>

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
                            <h3 class="text-center mb-4">4. Section</h3>

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


                            <!-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_image1">Section Image 1</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="section2_image1" id="section2_image1" class="form-control">
                                        @if (!empty($homepage->section2_image1))
                                        <img src="{{ asset($homepage->section2_image1) }}" alt="Section Image" height="100px">
                                        @endif
                                        @error('section2_image1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_image2">Section Image 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="section2_image2" id="section2_image2" class="form-control">
                                        @if (!empty($homepage->section2_image2))
                                        <img src="{{ asset($homepage->section2_image2) }}" alt="Section Image" height="100px">
                                        @endif
                                        @error('section2_image2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                        <div class="col-md-12 text-center mb-4">
                            <h4>
                                +
                            </h4>
                        </div>

                        <div class="col-md-12 text-center mb-4">
                            <h4>
                                <a href="{{ url('admin/practice-area-categories') }}" style="text-decoration:none">
                                    Practice Area Categories <i class="mdi mdi-logout-variant"></i>
                                </a>
                            </h4>
                        </div>

                </div>


                <div class="row">
                    <hr>
                    <h3 class="text-center mb-4">4. Section - Experiences (Common)</h3>
                    <div class="col-md-12 text-center mb-4">
                        <h4>
                            <a href="{{ url('admin/experiences') }}" style="text-decoration:none">
                                Experiences <i class="mdi mdi-logout-variant"></i>
                            </a>
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <hr>
                    <h3 class="text-center mb-4">5. Practice Areas </h3>
                    <div class="col-md-12 text-center mb-4">
                        <h4>
                            <a href="{{ url('admin/practice-areas') }}" style="text-decoration:none">
                                Practice Area <i class="mdi mdi-logout-variant"></i>
                            </a>
                        </h4>
                    </div>

                    <div class="col-md-12 text-center mb-4">
                        <h4>
                            +
                        </h4>
                    </div>

                    <div class="col-md-12 text-center mb-4">
                        <h4>
                            <a href="{{ url('admin/practice-area-categories') }}" style="text-decoration:none">
                                Practice Area Categories <i class="mdi mdi-logout-variant"></i>
                            </a>
                        </h4>
                    </div>
                </div>


                <div class="row">
                    <hr>
                    <h3 class="text-center mb-4">6. Section</h3>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="bottom_section_image"> Section
                                Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="bottom_section_image" id="bottom_section_image" class="form-control">
                                @if (@$homepage->bottom_section_image)
                                <img src="{{ url(@$homepage->bottom_section_image) }}" alt="" height="100px">
                                @endif
                                @error('bottom_section_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="bottom_section_short_title">
                                Section Short Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bottom_section_short_title" name="bottom_section_short_title" placeholder="Bottom Section Short Title" value="{{ old('bottom_section_short_title', $homepage->bottom_section_short_title) }}">
                                @error('bottom_section_short_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="bottom_section_title"> Section
                                Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bottom_section_title" name="bottom_section_title" placeholder="Bottom Section Title" value="{{ old('bottom_section_title', $homepage->bottom_section_title) }}">
                                @error('bottom_section_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="bottom_section_description">
                                Section Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bottom_section_description" name="bottom_section_description" placeholder="Bottom Section Description" value="{{ old('bottom_section_description', $homepage->bottom_section_description) }}">
                                @error('bottom_section_description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <h5>Facts</h5>
                        <table class="table table-bordered" id="facts-table">
                            <thead>
                                <tr>
                                    <th>Label</th>
                                    <th>Count</th>
                                    <th style="width: 30%" class="mx-3">Actions <button type="button" class="btn btn-success" id="add-fact">+</button></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($homepage->sectionTwoFacts))
                                @foreach ($homepage->sectionTwoFacts as $fact)
                                <tr>
                                    <td><input type="text" name="facts[{{ $loop->index }}][label]" class="form-control" value="{{ $fact->label }}" /></td>
                                    <td><input type="text" name="facts[{{ $loop->index }}][count]" class="form-control" value="{{ $fact->count }}" /></td>
                                    <td><button type="button" class="btn btn-danger remove-fact" onclick="return confirm('Are you sure you want to delete this page?')">Remove</button>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <hr>
                    <h3 class="text-center mb-4">7. Meta Tags </h3>
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
                            <label class="col-sm-3 col-form-label" for="meta_description">Meta
                                Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="{{ old('meta_description', $homepage->meta_description) }}">
                                @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div> -->

                            <!--Banner Area Section -->

                            <!-- 
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="meta_tags">Meta Tags</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="meta_tags" name="meta_tags" placeholder="Meta Tags" value="{{ old('meta_tags', $homepage->meta_tags) }}">
                                @error('meta_tags')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="meta_image">Meta Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="meta_image" id="meta_image" class="form-control">
                                @if (!empty($homepage->meta_image))
                                <img src="{{ asset($homepage->meta_image) }}" alt="Meta Image" height="100px">
                                @endif
                                @error('meta_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>  -->

                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        var factIndex = {
            {
                !empty($homepage - > sectionTwoFacts) ? count($homepage - > sectionTwoFacts) : 0
            }
        };
        var maxFacts = 6; // Maximum number of facts allowed

        // Initially hide the button if the number of facts is at least maxFacts
        if (factIndex >= maxFacts) {
            $('#add-fact').hide();
        }

        $('#add-fact').click(function() {
            var newRow = `
                <tr>
                    <td><input type="text" name="facts[${factIndex}][label]" class="form-control" required /></td>
                    <td><input type="text" name="facts[${factIndex}][count]" class="form-control" required /></td>
                    <td><button type="button" class="btn btn-danger remove-fact">Remove</button></td>
                </tr>`;
            $('#facts-table tbody').append(newRow);
            factIndex++;

            // Check if the maximum number of facts is reached
            if (factIndex >= maxFacts) {
                $('#add-fact').hide(); // Hide the button
            }
        });

        $(document).on('click', '.remove-fact', function() {
            $(this).closest('tr').remove();
            factIndex--;

            // Show the add button when a fact is removed
            if (factIndex < maxFacts) {
                $('#add-fact').show(); // Show the button
            }
        });
    });
</script>

</script>
@endsection