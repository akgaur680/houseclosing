<?php

use App\Http\Controllers\FrontEndController;

$homepage = FrontEndController::homepage();
?>



<?php $__env->startSection('meta'); ?>
<title><?php echo e(@$servicecategory['meta_title'] ?? 'HouseClosing'); ?></title>
<meta name="description" content="<?php echo e(@$servicecategory['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:title" content="<?php echo e(@$servicecategory['meta_title'] ?? 'HouseClosing'); ?>">
<meta property="og:description" content="<?php echo e(@$servicecategory['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:image" content="<?php echo e(asset(@$servicecategory['meta_image'])); ?>">
<meta name="keywords" content="<?php echo e(@$servicecategory['meta_tags'] ?? 'HouseClosing'); ?>">
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
                            <a href="/services">Services</a>
                        </li>
                        <li>
                            <span><?php echo e(@$servicecategory['header_title']); ?></span>
                        </li>
                    </ul>
                    <h2><?php echo e(@$servicecategory['header_title']); ?> - HouseClosing.CA</h2>
                    <p> <?php echo e(@$servicecategory['header_description']); ?> </p>
                    <!-- <a href="/<?php echo e(@$servicecategory['header_button_link']); ?>" class="read-more text-primary">
                        <?php echo e(@$servicecategory['header_button_label']); ?>

                        <i class="flaticon-right-arrow"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="<?php echo e(asset(@$servicecategory['header_img'])); ?>" class="img" alt="banner-img">
                    <img src="<?php echo e(asset('assets/images/shape-7.png')); ?>" class="shape shape-7" alt="shape">
                    <img src="<?php echo e(asset('assets/images/shape-8.png')); ?>" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="details-contenet-area ptb-130">
    <div class="container">
        <div class="details-contenet mw-1095">
            <div class="buying-img">
                <img src="<?php echo e(asset(@$servicecategory['section1_img'])); ?>" alt="buying" style="width:100%;">
            </div>
            <?php echo @$servicecategory['section1_description']; ?>

            <div class="mb-2">
                <a href="/<?php echo e(@$servicecategory['section1_button_link']); ?>" class="btn btn-primary"><?php echo e(@$servicecategory['section1_button_label']); ?></a>
            </div>
            <?php if(@$servicecategory['section2_description']): ?>
            <div class="mb-40"></div>
            <div class="bg-gray2 p-4  rounded-4 border">
                <div class="row justify-content-center">
                    <h3 class="text-center pt-4">We Do it All:</h3>
                    <ul class="ps-0 mb-0 list-unstyled d-flex flex-wrap justify-content-center gap-3 gap-lg-4 properties-list">
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Retail</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Apartments</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Factories</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Strip Centers</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Factories</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Office Buildings</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Warehouses</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Industrial</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Non-Profits</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Religious Institutions & Buildings</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Mixed-Use / Single Use</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <?php echo @$servicecategory['section2_description']; ?>

                </div>
                <div class="col-lg-6">
                    <div class="easy-img mt-4 mt-lg-0 text-center">
                        <img src="<?php echo e(asset(@$servicecategory['section2_img'])); ?>" class="rounded-4" alt="buying">
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\view_service.blade.php ENDPATH**/ ?>