@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center">
            Welcome, {{Auth::user()->name}}
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection