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
                    <h3 class="mb-5" style="display: inline-block;">FAQ All Q & A</h3>
                    <a href="faq-question-answer/add" id="addfaq" style="display: inline-block; float: right;" class="btn btn-gradient-primary me-2">
                        Add FAQ
                    </a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$faq as $faqs)
                            <tr>
                                <td>{{@$loop->iteration}}</td>
                                <td>{{ @$faqs->question }}</td>
                                <td>{{ @$faqs->answer }}</td>
                                <td>
                                    <a type="button" href="{{url('admin/faq-question-answer/edit',@$faqs->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.faq.delete', @$faqs->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                                    </form>
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