<?php

use App\Http\Controllers\FrontEndController;

$settings = FrontEndController::settings();
?>

<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/laks/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2024 14:16:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/scrollCue.css">
    <link rel="stylesheet" href="assets/css/nouislider.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <title>Laks - Real Estate Mortgage & Loans HTML Template</title>
</head>

<body>
    <div id="preloader">
        <div class="preloader">
            <div class="waviy">
                <span>L</span>
                <span>A</span>
                <span>K</span>
                <span>S</span>
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
                <img src="<?php echo e($settings['header_logo']); ?>" class="main-logo" alt="white-logo">
                <img src="assets/images/white-logo.svg" class="white-logo d-none" alt="white-logo">
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
                        <a class="nav-link" href="quote" role="button">
                            Free Quote
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button">
                            Hire Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="services" role="button" > Services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="buying-real-estate">
                                    Buying Real Estate
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="selling-real-estate">
                                    Selling Real Estate
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Buying & Selling Real Estate
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="privacy-policy.html">
                                    Mortgage Transactions
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="terms-conditions.html">
                                    Transfer of Ownership /Title
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="error-404.html">
                                    Assignment of Property
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Wills & Power of Attorney</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Estates & Probate</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Incorporations</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Joint Venture & Lease Agreements</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Corporate & Commercial Matters</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">Notarizing & Commissioning</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Lawyers
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="others-options ps-0 mb-0 list-unstyled justify-content-end">
                <li>
                    <a href="/calculate-mortgage" class="btn btn-primary">
                        Apply Now
                    </a>
                </li>
            </ul>
        </div>
    </nav><?php /**PATH C:\wamp64\www\houseclosing\resources\views\layouts\header.blade.php ENDPATH**/ ?>