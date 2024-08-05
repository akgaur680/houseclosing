<?php
use App\Http\Controllers\FrontEndController;
$contact = FrontEndController::contact();
$settings = FrontEndController::settings();
?>


<?php $__env->startSection('meta'); ?>
<title><?php echo e(@$contact['meta_title'] ?? 'HouseClosing'); ?></title>
<meta name="description" content="<?php echo e(@$contact['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:title" content="<?php echo e(@$contact['meta_title'] ?? 'HouseClosing'); ?>">
<meta property="og:description" content="<?php echo e(@$contact['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:image" content="<?php echo e(asset(@$contact['meta_image'])); ?>">
<meta name="keywords" content="<?php echo e(@$contact['meta_tags'] ?? 'HouseClosing'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Contact Us</span>
                        </li>
                    </ul>
                    <h2><?php echo e(@$contact['header_title']); ?></h2>
                    <p> <?php echo e(@$contact['header_description']); ?> </p>
                    <!-- <a href="<?php echo e(@$contact['header_button_link']); ?>" class="read-more text-primary">
                        <?php echo e(@$contact['header_button_label']); ?>

                        <i class="flaticon-right-arrow"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="<?php echo e(asset(@$contact['header_img'])); ?>" class="img" alt="banner-img">
                    <img src="<?php echo e(asset('assets/images/shape-7.png')); ?>" class="shape shape-7" alt="shape">
                    <img src="<?php echo e(asset('assets/images/shape-8.png')); ?>" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Area -->
<div class="contact-us-area overflow-hidden pt-130">
    <div class="container">
        <div class="row">
          <?php echo $__env->make('web.components.contact_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-6">
                <div class="google-map">
                <?php echo @$settings['map']; ?>

            </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\contact.blade.php ENDPATH**/ ?>