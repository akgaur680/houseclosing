<?php

use App\Models\Lawyer_Members;
use App\Http\Controllers\FrontEndController;

$about = FrontEndController::about();
$settings = FrontEndController::settings();
$members = Lawyer_Members::all()->take(4);
?>


<?php $__env->startSection('meta'); ?>
<title><?php echo e(@$about['meta_title'] ?? 'HouseClosing'); ?></title>
<meta name="description" content="<?php echo e(@$about['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:title" content="<?php echo e(@$about['meta_title'] ?? 'HouseClosing'); ?>">
<meta property="og:description" content="<?php echo e(@$about['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:image" content="<?php echo e(asset(@$about['meta_image'])); ?>">
<meta name="keywords" content="<?php echo e(@$about['meta_tags'] ?? 'HouseClosing'); ?>">
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
                            <span>About Us</span>
                        </li>
                    </ul>
                    <h2> <?php echo e(@$about['header_title']); ?> </h2>
                    <p> <?php echo e(@$about['header_description']); ?> </p>
                    <!-- <a href="loan-programs.html" class="read-more text-primary">
                        View All Program Loans
                        <i class="flaticon-right-arrow"></i>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="<?php echo e(asset(@$about['header_img'])); ?>" class="img" alt="banner-img">
                    <img src="https://houseclosing.ca/assets/images/shape-7.png" class="shape shape-7" alt="shape">
                    <img src="https://houseclosing.ca/assets/images/shape-8.png" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-us-area ptb-130">
    <div class="container mw-1380">
        <div class="about-us-content">
            <p> <?php echo e(@$about['section1_description']); ?> </p>
            <div class="row align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="about-img-1 mb-4 mb-sm-0">
                                <img src="<?php echo e(asset(@$about['section1_img1'])); ?>" alt="about">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="about-img-2 mb-4 mb-sm-0">
                                <img src="<?php echo e(asset(@$about['section1_img2'])); ?>" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ms-lg-5 ps-lg-3">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="fan-facet-single-item">
                                    <h1><span class="counter"><?php echo e(@$about['section1_business_referrals']); ?></span><span>%</span></h1>
                                    <span>Business from Referrals</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="fan-facet-single-item ms-xl-5">
                                    <h1><span class="counter"><?php echo e(@$about['section1_verbal_commitment']); ?></span><span>+</span></h1>
                                    <span>Minute Verbal Commitment</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="why-us-area pt-130 pb-105">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-lg-7">
                <div class="why-us-content">
                    <h2><?php echo e(@$about['section2_title']); ?></h2>
                    <p><?php echo e(@$about['section2_description']); ?></p>
                </div>
                <div class="why-us-item-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="why-us-single-item">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-<?php echo e(@$about['section2_card1_icon']); ?>"></i>
                                    <h3><?php echo e(@$about['section2_card1_title']); ?></h3>
                                </div>
                                <p><?php echo e(@$about['section2_card1_description']); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="why-us-single-item">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-<?php echo e(@$about['section2_card2_icon']); ?>"></i>
                                    <h3><?php echo e(@$about['section2_card2_title']); ?></h3>
                                </div>
                                <p><?php echo e(@$about['section2_card2_description']); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="why-us-single-item">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-<?php echo e(@$about['section2_card3_icon']); ?>"></i>
                                    <h3><?php echo e(@$about['section2_card3_title']); ?></h3>
                                </div>
                                <p><?php echo e(@$about['section2_card3_description']); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="why-us-single-item">
                                <div class="d-flex align-items-center">
                                    <i class="flaticon-<?php echo e(@$about['section2_card4_icon']); ?>"></i>
                                    <h3><?php echo e(@$about['section2_card4_title']); ?></h3>
                                </div>
                                <p><?php echo e(@$about['section2_card4_description']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="why-us-img text-center border-bottom">
                    <img src="<?php echo e(asset(@$about['section2_img'])); ?>" alt="why-us">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="fan-facet-area pb-105">
    <div class="container mw-1380">
        <div class="d-sm-flex justify-content-between align-items-center flex-wrap">
            <div class="fan-facet-single-item">
                <h1><span class="counter"><?php echo e(@$about['section2_successful_txn']); ?>k</span><span>+</span></h1>
                <p>Successful Transactions
                </p>
            </div>
            <div class="fan-facet-single-item">
                <h1><span class="counter"><?php echo e(@$about['section2_clients_served']); ?></span><span>k+</span></h1>
                <p>Clients Served
                </p>
            </div>
            <div class="fan-facet-single-item">
                <h1><span class="counter"><?php echo e(@$about['section2_years_in_business']); ?></span><span>+</span></h1>
                <p>Years in Business</p>
            </div>
            <div class="fan-facet-single-item">
                <h1><span class="counter"><?php echo e(@$about['section2_industry_awards']); ?></span><span>+</span></h1>
                <p>Industry Awards

                </p>
            </div>
        </div>
    </div>
</div>
<div class="team-member-area pb-105">
    <div class="container mw-1380">
        <div class="section-title">
            <h2>Visit our professional team member for your any help from us</h2>
        </div>
        <div class="row justify-content-center">
            <?php $__currentLoopData = @$members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-xl-6 text-center">
                <div class="team-member-single-item border transition-y">
                    <div class="d-md-flex align-items-center">
                        <a href="lawyers" class="flex-shrink-0 mb-4 mb-md-0 d-block">
                            <img src="<?php echo e(@$member['lawyer_img']); ?>" alt="team">
                        </a>
                        <div class="flex-grow-1 ms-34">
                            <span class="title"><?php echo e(@$member['lawyer_designation']); ?></span>
                            <h3 class="text-center">
                                <a href="lawyers"><?php echo e(@$member['lawyer_name']); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('web.components.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/web/about.blade.php ENDPATH**/ ?>