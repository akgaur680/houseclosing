<?php
use App\Http\Controllers\FrontEndController;
$services = FrontEndController::servicesdata();
?>

<?php $__env->startSection('meta'); ?>
<title><?php echo e(@$services['meta_title'] ?? 'HouseClosing'); ?></title>
<meta name="description" content="<?php echo e(@$services['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:title" content="<?php echo e(@$services['meta_title'] ?? 'HouseClosing'); ?>">
<meta property="og:description" content="<?php echo e(@$services['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:image" content="<?php echo e(asset(@$services['meta_image'])); ?>">
<meta name="keywords" content="<?php echo e(@$services['meta_tags'] ?? 'HouseClosing'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Services</span>
                        </li>
                    </ul>
                    <h2><?php echo e(@$services['header_title']); ?></h2>
                    <p> <?php echo e(@$services['header_description']); ?> </p>
                    <a href="/<?php echo e(@$services['header_button_link']); ?>" class="read-more text-primary">
                        <?php echo e(@$services['header_button_label']); ?>

                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="<?php echo e(asset(@$services['header_img'])); ?>" class="img" alt="banner-img">
                    <img src="<?php echo e(asset('assets/images/shape-7.png')); ?>" class="shape shape-7" alt="shape">
                    <img src="<?php echo e(asset('assets/images/shape-8.png')); ?>" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="buying-area overflow-hidden ptb-130">
    <div class="container mw-1380">
        <div class="section-title mw-760">
            <h2><?php echo e(@$services['section1_title']); ?></h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = @$services['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="buying-single-item mb-4 transition-y">
                    <a href="<?php echo e(url('service-areas', @$servicelist['slug'])); ?>" class="d-block buying-img">
                        <img src="<?php echo e(asset(@$servicelist['header_img'])); ?>" alt="banner" style="height: 258px; width:100%;">
                    </a>
                    <div class="buying-content">
                        <h3>
                            <a href="<?php echo e(url('service-areas', @$servicelist['slug'])); ?>"><?php echo e(@$servicelist['header_title']); ?></a>
                        </h3>
                        <p style="height: 120px;"> <?php echo e(@$servicelist['header_description']); ?> </p>
                        <div class="border-top">
                            <a href="<?php echo e(url('service-areas', @$servicelist['slug'])); ?>" class="read-more">
                                Learn More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\services.blade.php ENDPATH**/ ?>