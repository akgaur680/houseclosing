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
                    <h3 class="mb-5" style="display: inline-block;">Hire Us Queries</h3>
                    
                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Message</th>
                                <th>Services</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$queries as $query)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ @$query->name }}</td>
                                <td>{{ @$query->email }}</td>
                                <td>{{ @$query->phone }}</td>
                                <td>{{ @$query->address }}</td>
                                <td>{{ @$query->message }}</td>
                                <td>{{ @$query->selected_service_names }}</td>
                                <td>
                                    <a type="button" href="#" class="btn btn-warning btn-sm" >Reply</a>
                                    <form action="{{ route('admin.lawyer-member.destroy', @$query->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        <!-- @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?')">Delete</button> -->
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