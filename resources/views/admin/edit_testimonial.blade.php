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
                                <a href="{{url('admin/testimonials')}}" style="text-decoration: none; color:green" class="fw-bold fs-6">Testimonials Area/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" >Edit Testimonial - {{$testimonials['id']}}</span>
                            </li>
                        </ul>
                    </div>
                        <hr>
                        <div id="add-category-form-container" >
                        <h2 class="text-center my-3">Edit Testimonial</h2>
                        <form id="create-category-form" action="{{ route('admin.testimonial.update', $testimonials['id']) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <br>
                            <div class="row">
                                <!--  Name -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$testimonials['name']}}" placeholder="Name" required>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--  Position -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <input class="form-control" id="position" name="position" value="{{$testimonials['position']}}" placeholder="Position"></input>
                                        @error('position')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--  Comment -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="comment">comment</label>
                                        <textarea type="text" class="form-control" id="comment" name="comment" rows="5" placeholder="Comment">{{$testimonials['comment']}}</textarea>
                                        @error('comment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--  Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <input type="file" class="form-control" id="img" name="img">
                                        @if (!empty(@$testimonials['img']))
                                        <img src="{{ asset(@$testimonials['img']) }}" alt="Image" height="100px">
                                        @endif
                                        @error('img')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit Testimonial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection