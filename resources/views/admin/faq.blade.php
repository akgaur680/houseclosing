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
        <div class="col-12 grid-margin stretch-card m-auto">
            <div class="container p-4" style="background-color: white; border-radius:10px; margin:auto;">
                <div class="table-responsive">
                    <h3 class="mb-5" style="display: inline-block;">FAQ All Q & A</h3>
                    <a href="faq-question-answer/add" id="addfaq" style="display: inline-block; float: right;" class="btn btn-gradient-primary me-2 mb-2">
                        Add FAQ
                    </a>
                    <table class=" table-bordered text-center m-auto" style="width:90%; line-height:1.6; border:1px solid lightgrey;">
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
                                <td class="p-2">{{@$loop->iteration}}</td>
                                <td class="p-2" style="width:30%;">{{ @$faqs->question }}</td>
                                <td class="p-2" style="width:50%;">{{ @$faqs->answer }}</td>
                                <td class="p-2">
                                    <a type="button" href="{{url('admin/faq-question-answer/edit',@$faqs->id)}}" class="btn btn-warning btn-sm m-auto">Edit</a> 
                                    <form action="{{ route('admin.faq.delete', @$faqs->id) }}" method="POST" style="display:inline-block;" class="mt-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <!-- Pagination Links -->
                     <div class="mt-4">
                        {{ $faq->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection