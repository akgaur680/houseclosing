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
  <link rel="stylesheet" href="<?php echo e(asset('adminassets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminassets/vendors/css/vendor.bundle.base.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('adminassets/css/style.css')); ?>">
  <link rel="shortcut icon" href="<?php echo e(asset('adminassets/images/favicon.ico')); ?>">
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo e(url('/admin/dashboard')); ?>"><img src="<?php echo e(asset(@$settings['header_logo'])); ?>" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('/admin/dashboard')); ?>"><img src="<?php echo e(asset(@$settings['header_logo'])); ?>" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?php echo e(asset("adminassets/images/faces/dummy.jpeg")); ?>" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"> <?php echo e(Auth::user()->name); ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo e(url('logout')); ?>">
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
            <a class="nav-link" href="<?php echo e(url('admin/dashboard')); ?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Practice Areas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/practice-areas')); ?>">Practice Areas Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('admin/practice-area-categories')); ?>">Practice Areas Categories</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('admin/homepage')); ?>">
              <span class="menu-title">Homepage</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('admin/setting')); ?>">
              <span class="menu-title">Setting</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
        <?php echo $__env->yieldContent('content'); ?>
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © S and S Lawyers</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Designed & Developed By : <a href="https://thedevolutions.com/" target="_blank">The</a></span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="<?php echo e(asset('adminassets/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <script src="<?php echo e(asset('adminassets/js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('adminassets/js/hoverable-collapse.js')); ?>"></script>
  <script src="<?php echo e(asset('adminassets/js/misc.js')); ?>"></script>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\wamp64\www\houseclosing\resources\views\layouts\admin.blade.php ENDPATH**/ ?>