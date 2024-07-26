<?php

use App\Http\Controllers\FrontEndController;

$settings = FrontEndController::settings();
?>

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
            <img src="assets/images/shape-2.png" class="shape shape-2 d-none d-xxl-block" alt="shape">
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
                <div class="footer-single-item">
                    <a href="index.html" class="d-inline-block logo">
                        <img src="<?php echo e($settings['footer_logo']); ?>" alt="logo">
                    </a>
                    <p>Expert Legal Guidance for All Your Real Estate Needs—Your Trusted Partner in Property Transactions.</p>
                    <ul class="ps-0 mb-0 list-unstyled d-flex gap-4 flex-wrap social-link">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
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
                                    <a href="#">Services</a>
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
                                <li>
                                    <a href="loan-programs.html">Buying Real Estate</a>
                                </li>
                                <li>
                                    <a href="loan-programs.html">Selling Real Estate</a>
                                </li>
                                <li>
                                    <a href="loan-programs.html">Mortgage Transactions</a>
                                </li>
                                <li>
                                    <a href="loan-programs.html">Incorporations</a>
                                </li>
                                <li>
                                    <a href="loan-programs.html">Estates & Probate</a>
                                </li>
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
    <div class="container">
        <div class="copy-right-content">
            <p class="mb-0">© <span>Laks.</span> All Rights Reserved by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
        </div>
    </div>
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
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/scrollCue.min.js"></script>
<script src="assets/js/fslightbox.js"></script>
<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/laks/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2024 14:17:59 GMT -->

</html><?php /**PATH C:\wamp64\www\houseclosing\resources\views/layouts/footer.blade.php ENDPATH**/ ?>