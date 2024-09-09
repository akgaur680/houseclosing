<?php
use App\Http\Controllers\FrontEndController;
$settings = FrontEndController::settings();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CMS - Panel</title>
  <link rel="stylesheet" href="{{ asset('adminassets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminassets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('adminassets/css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('adminassets/images/favicon.ico') }}">
  <script src="https://cdn.tiny.cloud/1/rhmjhy4d4ie52kbm64vwjpq0g48tk3s5dvqvnej2vi0y9cnc/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  
</head>
<body>
  @stack('scripts')
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mt-2" href="{{url('/admin/dashboard')}}"><img src="{{ asset(@$settings['header_logo']) }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/admin/dashboard')}}"><img src="{{ asset(@$settings['header_logo']) }}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="{{asset("adminassets/images/faces/dummy.jpeg")}}" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"> {{Auth::user()->name}}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{url('logout')}}">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/homepage')}}">
              <span class="menu-title">Homepage</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Services</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/services-areas')}}">Service Areas Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/service-area-categories')}}">Service Areas Categories</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/setting')}}">
              <span class="menu-title">Setting</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-lawyer" aria-expanded="false" aria-controls="ui-basic-lawyer">
              <span class="menu-title">Lawyers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-lawyer">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/lawyers-area')}}">Lawyers Area</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/lawyer-member-area')}}">Lawyer Members Area</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/testimonials')}}">
              <span class="menu-title">Testimonials</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/about')}}">
              <span class="menu-title">About Us</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-contact" aria-expanded="false" aria-controls="ui-basic-contact">
              <span class="menu-title">Contact Us</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-contact">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/contact-query')}}">Contact Us Queries</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/contact-area')}}">Contact Us Area</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-hireus" aria-expanded="false" aria-controls="ui-basic-hireus">
              <span class="menu-title">Hire Us</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-hireus">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/hireus-query')}}">Hire Us Queries</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/hireus-area')}}">Hire Us Area</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-faq" aria-expanded="false" aria-controls="ui-basic-faq">
              <span class="menu-title"> FAQ </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-faq">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/faq-question-answer')}}">FAQ Q & A</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/faq-area')}}">FAQ Area</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
        @yield('content')
        <footer class="footer">
          <div class="copy-right-area">
            <p> {!!$settings['copyright_content']!!} </p>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="{{ asset('adminassets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('adminassets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('adminassets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('adminassets/js/misc.js') }}"></script>
  @yield('scripts')
</body>
</html>