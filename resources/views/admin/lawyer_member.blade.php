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
                    <h3 class="mb-5" style="display: inline-block;">Lawyer Member Area</h3>
                    <a href="add-lawyer" id="addCategory" style="display: inline-block;  float:right;" class="btn btn-gradient-primary me-2">
                        Add New Member
                    </a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$members as $member)
                            <tr>
                                <td>{{ @$member->lawyer_name }}</td>
                                <td>{{ @$member->lawyer_designation }}</td>
                                <td>
                                    <a type="button" href="{{url('admin/edit-lawyer',@$member->id)}}" class="btn btn-warning btn-sm" >Edit</a>
                                    <form action="{{ route('admin.lawyer-member.destroy', @$member->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
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