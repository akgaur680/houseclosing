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
                                <a href="{{url('admin/faq-question-answer')}}" style="text-decoration: none; color:green" class="fw-bold fs-6">FAQ/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" >Add New FAQ</span>
                            </li>
                        </ul>
                    </div>
                    <div id="add-faq-container" class="mt-5">
                        <hr>
                        <h2 class="text-center my-3">Add New FAQ</h2>
                        <form id="create-category-form" action="{{ route('admin.faq.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="text-center">1. FAQ Details</h3>
                            <br>
                            <input type="hidden" name="faq_id" value="{{ $faq->id }}">

                            <div class="row">
                                <!-- Question -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="question">Question</label>
                                        <input type="text" class="form-control" id="question" name="question" placeholder="Question" required>
                                        @error('question')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Answer -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="answer">Answer</label>
                                        <textarea class="form-control" id="answer" rows="5" name="answer" placeholder="Answer" required></textarea>
                                        @error('answer')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                             
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-gradient-primary me-2">Add FAQ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection