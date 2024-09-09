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
                <div class="card-body table-responsive">
                    <h3 class="mb-5" style="display: inline-block;">All Testimonials</h3>
                    <a href="testimonial/create" id="addtestimonial" style="display: inline-block;  float:right;" class="btn btn-gradient-primary me-2">
                        Add New Testimonial
                    </a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$testimonials as $testimonial)
                            <tr>
                                <td>{{ @$testimonial->name }}</td>
                                <td>{{ @$testimonial->position }}</td>
                                <td>
                                    <a type="button" href="{{url('admin/testimonial/edit',@$testimonial->id)}}" class="btn btn-warning btn-sm" >Edit</a>
                                    <a type="button" href="{{url('admin/testimonial/delete', @$testimonial->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this testimonial?')" style="display:inline-block;">Delete</a>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection