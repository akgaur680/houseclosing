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
                    
                    <!-- <table class="container table-bordered text-center"> -->

                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="p-2">#</th>
                                <th class="p-2">Name</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Date    </th>
                                <th class="p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (@$queries as $query)
                            <tr>
                                <td class="p-2">{{$loop->iteration}}</td>
                                <td class="p-2">{{ @$query->name }}</td>
                                <td class="p-2">{{ @$query->email }}</td>
                                <td class="p-2">{{@$query->created_at->setTimezone('Canada/Newfoundland')->format('Y-m-d h:i A')}}</td>
                                <td>
                                    <a type="button" href="{{url('admin/hireus-query/view', @$query->id)}}" class="btn btn-warning btn-sm" >View</a>
                                    <form action="{{ route('admin.hireus_query.delete', @$query->id) }}" method="POST" style="display:inline-block;">
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