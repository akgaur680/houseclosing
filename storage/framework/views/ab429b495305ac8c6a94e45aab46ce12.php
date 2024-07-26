<?php
use App\Http\Controllers\FrontEndController;
$settings = FrontEndController::settings();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('adminassets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminassets/vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminassets/css/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('adminassets/images/favicon.ico')); ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?php echo e(asset(@$settings['header_logo'])); ?>">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>

                <?php if($errors->any()): ?>
                  <div class="alert alert-danger" id="error-alert">
                    <ul class="mb-0">
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </div>
                <?php endif; ?>

                <form class="pt-3" method="POST" action="<?php echo e(route('login.submit')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo e(asset('adminassets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('adminassets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('adminassets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('adminassets/js/misc.js')); ?>"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
          setTimeout(() => {
            errorAlert.style.display = 'none';
          }, 3000);
        }
      });
    </script>

  </body>
</html>
<?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\login.blade.php ENDPATH**/ ?>