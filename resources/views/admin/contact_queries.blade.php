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
                    <h3 class="mb-5" style="display: inline-block;">Contact Us Queries</h3>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$queries as $query)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ @$query->name }}</td>
                                <td>{{ @$query->email }}</td>
                                <td>{{@$query->created_at->setTimezone('Canada/Newfoundland')->format('Y-m-d h:i A')}}</td>
                                <td>
                                    <a type="button" href="{{url('admin/contact-query/view', @$query->id)}}" class="btn btn-warning btn-sm" >View</a>
                                    <form action="{{ route('admin.query.delete', @$query->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Query?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <!-- Pagination Links -->
                     <div class="mt-4">
                        {{ $queries->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection