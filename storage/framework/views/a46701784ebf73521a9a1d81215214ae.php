<?php

use App\Models\Lawyer_Members;
use App\Http\Controllers\FrontEndController;

$about = FrontEndController::about();
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
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <h2>Contact with us for any help needed from our company</h2>
                    <form class="contact-us-form" action="https://houseclosing.ca/contact" method="POST">
                        <input type="hidden" name="_token" value="rpPZusYgvYxPIv3rvBqhOXRqmdJcArSm75u6oTuI" autocomplete="off">
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Your email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" value="">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Your name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control" value="">
                            </div>
                        </div>

                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Zip Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="zipcode" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label label">Message</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" name="message" class="form-control"></textarea>
                                <div class="g-recaptcha" data-sitekey="6Lc4NBoqAAAAACD1FiX596PGkcmpPpcbhobQsDte" style="padding: 10px;
                                margin: 10px;">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-a526ulnn2kwg" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc4NBoqAAAAACD1FiX596PGkcmpPpcbhobQsDte&amp;co=aHR0cHM6Ly9ob3VzZWNsb3NpbmcuY2E6NDQz&amp;hl=en&amp;v=hfUfsXWZFeg83qqxrK27GB8P&amp;size=normal&amp;cb=rnolkkuskgfp"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div><iframe style="display: none;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="pt-lg-3 mb-3 row">
                            <label class="col-sm-2 col-form-label label"></label>
                            <div class="col-sm-10">
                                <button class="btn btn-dark border-0" type="submit">
                                    Submit Your Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.794509250526!2d-79.67194082333658!3d43.506622161898115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x882b437253d7d05b:0x9606cc87969b3a5!2s2010%20Winston%20Park%20Dr%20Suite%20200B,%20Oakville,%20ON%20L6H%206P5,%20Canada!5e0!3m2!1sen!2sin!4v1722136655926!5m2!1sen!2sin" style="width: 100%;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/web/about.blade.php ENDPATH**/ ?>