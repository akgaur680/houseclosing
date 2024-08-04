<?php
use App\Http\Controllers\FrontEndController;
use App\Models\ServiceCategory;
$services = ServiceCategory::all();
$settings = FrontEndController::settings();
?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/laks/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2024 14:16:49 GMT -->
<head>
    <?php echo $__env->yieldContent('meta'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/scrollCue.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nouislider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/remixicon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset($settings['header_logo'])); ?>">
</head>
<body>
    <div id="preloader">
        <div class="preloader">
            <div class="waviy">
                <span>H</span>
                <span>O</span>
                <span>U</span>
                <span>S</span>
                <span>E</span>
                <span>C</span>
                <span>L</span>
                <span>O</span>
                <span>S</span>
                <span>I</span>
                <span>N</span>
                <span>G</span>
            </div>
        </div>
    </div>
    <div class="top-header-area position-relative z-2 ptb-20">
        <div class="container mw-1380">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="ps-0 mb-0 list-unstyled info-link d-sm-flex text-center flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <li>
                            <a href="tel:+1332455533">
                                <i class="ri-phone-fill"></i>
                                <?php echo e($settings['contact_no']); ?>

                            </a>
                        </li>
                        <li>
                            <i class="ri-calendar-line"></i>
                            M-F 7 AM - 5:30 PM PT
                        </li>
                        <li>
                            <i class="ri-map-pin-line"></i>
                            <?php echo e($settings['contact_address']); ?>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="ps-0 mb-0 list-unstyled import-link d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
                        <li>
                            <a href="career.html">Career</a>
                        </li>
                        <li>
                            <a href="history-fidelity.html">Story</a>
                        </li>
                        <li>
                            <a href="history-fidelity.html">Become A Partner</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg ptb-19 bg-gray2 border" id="navbar">
        <div class="container mw-1380">
            <a class="navbar-brand" href="/">
                <img src="<?php echo e(asset($settings['header_logo'])); ?>" style="height: 70px; width:100px;" class="main-logo" alt="white-logo">
                <img src="<?php echo e(asset('assets/images/white-logo.svg')); ?>" class="white-logo d-none" alt="white-logo">
            </a>
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                <span class="burger-menu">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="/" role="button">
                            Home
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="about" role="button">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/services" role="button"> Services</a>
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('service-areas',$service['slug'])); ?>">
                                    <?php echo e($service['header_title']); ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="hire-us" role="button">
                            Hire Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/faq">
                            FAQ’s
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="calculate-tax" role="button">
                            Tax Calculator
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/lawyers">
                            Lawyers
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="others-options ps-0 mb-0 list-unstyled justify-content-end">
                <li>
                    <a href="contactus" class="btn btn-primary">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- FOOTER -->
    <div class="guide-area bg-50 bottom border-tops-0">
        <div class="container mw-1380">
            <div class="guide-wrap position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="guide-content">
                            <h2><?php echo e($settings['consultation_bar_title']); ?></h2>
                            <p><?php echo e($settings['consultation_bar_description']); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="guide-info">
                            <ul class="ps-0 list-unstyled">
                                <li>
                                    <i class="ri-phone-fill"></i>
                                    <a href="tel:<?php echo e($settings['contact_no']); ?>"><?php echo e($settings['contact_no']); ?></a>
                                </li>
                                <li>
                                    <i class="ri-mail-line"></i>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#325a575e5e5d5e535941414742425d4046725e5359411c515d5f"><span class="__cf_email__" data-cfemail="2e464b424241424f455d5d5b5e5e415c5a6e424f455d004d4143"><?php echo e($settings['email']); ?></span></a>
                                </li>
                            </ul>
                            <a href="<?php echo e($settings['consultation_bar_button_link']); ?>" class="btn border-0 bg-white">
                                <?php echo e($settings['consultation_bar_button_label']); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <img src="<?php echo e(asset('assets/images/shape-2.png')); ?>" class="shape shape-2 d-none d-xxl-block" alt="shape">
            </div>
        </div>
    </div>
    <div class="footer-area pt-130 pb-105 bg-gray2 border border-top-0">
        <div class="container mw-1380">
            <form class="subscribe-content">
                <div class="d-flex align-items-center justify-content-center flex-wrap gap-4">
                    <span>Enter your email here</span>
                    <input type="text" class="form-control" placeholder="Email">
                    <button type="submit" class="btn border-0">Subscribe Now</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="footer-single-item text-center">
                        <a href="/" class="d-inline-block logo">
                            <img src="<?php echo e(asset($settings['footer_logo'])); ?>" alt="logo" style="height: 100px; width: 100%;">
                        </a>
                        <p>Expert Legal Guidance for All Your Real Estate Needs—Your Trusted Partner in Property Transactions.</p>
                        <ul class="ps-0 mb-0 list-unstyled d-flex gap-4 flex-wrap social-link">
                            <li>
                                <a href="<?php echo e($settings['facebook_link']); ?>" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e($settings['instagram_link']); ?>" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e($settings['twitter_link']); ?>" target="_blank">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 ms-72">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-single-item">
                                <h3>Quick Links</h3>
                                <ul class="ps-0 mb-0 list-unstyled additional-link">
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Members</a>
                                    </li>
                                    <li>
                                        <a href="services">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ’s</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-single-item">
                                <h3>Services</h3>
                                <ul class="ps-0 mb-0 list-unstyled additional-link">
                                    <?php $__currentLoopData = $services->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(url('service-areas',$service['slug'])); ?>"><?php echo e($service['header_title']); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-single-item">
                                <h3>Company</h3>
                                <ul class="ps-0 mb-0 list-unstyled additional-link">
                                    <li>
                                        <a href="terms-conditions.html">Terms & Condition</a>
                                    </li>
                                    <li>
                                        <a href="history-fidelity.html">Our History</a>
                                    </li>
                                    <li>
                                        <a href="history-fidelity.html">Our Gallery</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="index.html">Testimonial</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-single-item">
                                <h3>Our Contact</h3>
                                <ul class="ps-0 mb-0 list-unstyled info-links">
                                    <li class="d-flex align-items-center">
                                        <i class="ri-mail-line"></i>
                                        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#523a373e3e3d3e33392112353f333b3e7c313d3f"><span class="__cf_email__" data-cfemail="6b030e070704070a00182b0c060a020745080406"><?php echo e($settings['email']); ?></span></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="ri-phone-fill"></i>
                                        <a href="tel:+487432602396">+48 74326 02396</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="ri-phone-fill"></i>
                                        <a href="tel:+486445396533">+48 64453 96533</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="ri-calendar-2-line"></i>
                                        <span>Mon - Fri 12:00 - 18:00</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="ri-map-pin-line"></i>
                                        <span><?php echo e($settings['contact_address']); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-area">
        <p> <?php echo $settings['copyright_content']; ?> </p>
    </div>
    <button type="button" id="backtotop">
        <i class="ri-upload-line"></i>
    </button>
    <div class="settings-btn rtl-btn">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrollCue.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/fslightbox.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>
<!-- Mirrored from templates.hibootstrap.com/laks/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2024 14:17:59 GMT -->
</html><?php /**PATH C:\wamp64\www\houseclosing\resources\views/layouts/web.blade.php ENDPATH**/ ?>