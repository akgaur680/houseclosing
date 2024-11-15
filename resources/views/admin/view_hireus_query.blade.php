@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <!-- Breadcrumbs -->
        <div class="page-banner-content m-3">
          <ul class="list-unstyled breadcrumbs" style="display:inline-block;">
            <li style="display: inline;">
              <a href="{{url('admin/dashboard')}}" style="text-decoration: none; color:black" class="fw-bold fs-6">Home/ </a>
            </li>
            <li style="display: inline;">
              <a href="{{url('admin/hireus-query')}}" style="text-decoration: none; color:green" class="fw-bold fs-6">Hire Us Queries/ </a>
            </li>
            <li style="display: inline;">
              <span class="fs-6">View Query</span>
            </li>
          </ul>
        </div>
        <div class="">

          <div class="container">

            <div class="card">
              <div class="card-header">
                <h3>View Hire Us Query Form </h3>
              </div>
              <div class="m-1 table-responsive">
                <table class="table">
                  <tr>
                    <td>Name: </td>
                    <td>{{ @$query->name }}</td>
                  </tr>
                  <tr>
                    <td>Phone: </td>
                    <td>{{ @$query->phone }}</td>
                  </tr>
                  <tr>
                    <td>Email: </td>
                    <td>{{ @$query->email }}</td>
                  </tr>
                  <tr>
                    <td>Message: </td>
                    <td style="white-space: break-space;">{{ @$query->message }}</td>
                  </tr>
                  <tr>
                    <td>Selected Services: </td>
                    <td style="white-space: break-space; line-height:1.6;" >
                      @if(!empty(@$query['selected_service_names']))
                      @php
                      $query = explode(',', @$query['selected_service_names']);
                      @endphp
                      @foreach(@$query as $index => $service)
                      {{ (int)@$index + 1 }}.{{ trim(@$service) }}<br>
                      @endforeach
                      @endif
                    </td>
                  </tr>
                </table>
              </div>
              <div class="card-footer">
                <a href="{{ route('admin.hireus.query') }}" class="btn btn-primary">Back to List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection