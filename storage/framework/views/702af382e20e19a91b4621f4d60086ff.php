<?php

use App\Http\Controllers\FrontEndController;

$lawyers = FrontEndController::lawyers();
?>


<?php $__env->startSection('meta'); ?>
<title><?php echo e(@$lawyers['meta_title'] ?? 'HouseClosing'); ?></title>
<meta name="description" content="<?php echo e(@$lawyers['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:title" content="<?php echo e(@$lawyers['meta_title'] ?? 'HouseClosing'); ?>">
<meta property="og:description" content="<?php echo e(@$lawyers['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:image" content="<?php echo e(asset(@$lawyers['meta_image'])); ?>">
<meta name="keywords" content="<?php echo e(@$lawyers['meta_tags'] ?? 'HouseClosing'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                        </li>
                        <li>
                            <span>Lawyers</span>
                        </li>
                    </ul>
                    <h2><?php echo e(@$lawyers['header_title']); ?></h2>
                    <p> <?php echo e(@$lawyers['header_description']); ?> </p>
                    <!-- <a href="<?php echo e(@$lawyers['header_button_link']); ?>" class="read-more text-primary">
                        <?php echo e(@$lawyers['header_button_label']); ?>

                        <i class="flaticon-right-arrow"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="<?php echo e(asset(@$lawyers['header_img'])); ?>" class="img" alt="banner-img">
                    <img src="<?php echo e(asset('assets/images/shape-7.png')); ?>" class="shape shape-7" alt="shape">
                    <img src="<?php echo e(asset('assets/images/shape-8.png')); ?>" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-member-area pt-130 pb-105">
    <div class="container mw-1380">
        <div class="row justify-content-center">
            <?php $__currentLoopData = $lawyers['members']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-xl-6">
                <div class="team-member-single-item border transition-y">
                    <div class="d-md-flex align-items-center">
                        <a href="<?php echo e(url('lawyers')); ?>" class="flex-shrink-0 mb-4 mb-md-0 d-block">
                            <img src="<?php echo e(asset($member['lawyer_img'])); ?>" alt="Tajinder Kaur Sivia">
                        </a>
                        <div class="flex-grow-1 ms-34 text-center">
                            <span class="title"> <?php echo e($member['lawyer_designation']); ?> </span>
                            <h3 class="text-center">
                                <a href="<?php echo e(url('lawyers')); ?>"><?php echo e($member['lawyer_name']); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/web/lawyers.blade.php ENDPATH**/ ?>