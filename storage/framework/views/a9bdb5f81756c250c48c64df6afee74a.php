<?php

use App\Models\ServiceCategory;
use App\Http\Controllers\FrontEndController;

$homepage = FrontEndController::Homepage();
$services = ServiceCategory::all()->take(4);
?>

<?php $__env->startSection('meta'); ?>
<title><?php echo e(@$homepage['meta_title'] ?? 'HouseClosing'); ?></title>
<meta name="description" content="<?php echo e(@$homepage['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:title" content="<?php echo e(@$homepage['meta_title'] ?? 'HouseClosing'); ?>">
<meta property="og:description" content="<?php echo e(@$homepage['meta_description'] ?? 'HouseClosing'); ?>">
<meta property="og:image" content="<?php echo e(asset(@$homepage['meta_image'])); ?>">
<meta name="keywords" content="<?php echo e(@$homepage['meta_tags'] ?? 'HouseClosing'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="banner-area banner-bg-3">
    <div class="container mw-1570 position-relative z-1">
        <div class="banner-content style-three">
            <h1> <?php echo e($homepage['header_title']); ?> </h1>
            <p> <?php echo e($homepage['header_description']); ?> </p>
            <div class="banner-btn d-flex align-items-center justify-content-center">
                <a href=" <?php echo e(@$homepage['header_button_link1']); ?> " class="btn btn-dark border-0">
                    <?php echo e($homepage['header_button_label1']); ?>

                    <!-- <img src="assets/images/cart.svg" alt="cart"> -->
                </a>
                <a href="<?php echo e(@$homepage['header_button_link2']); ?>" class="read-more read-dark">
                    <?php echo e(@$homepage['header_button_label2']); ?>

                    <i class="flaticon-right-arrow"></i>
                </a>
            </div>
        </div>
        <img src="<?php echo e(asset($homepage['header_img'])); ?>" class="shape shape-4" alt="shape">
        <img src="<?php echo e(asset($homepage['header_img2'])); ?>" class="shape shape-5" alt="shape">
    </div>
</div>
<div class="why-us-area pb-105 position-relative">
    <div class="container mw-1570">
        <div class="why-us-img-2">
            <img src="<?php echo e(asset($homepage['section1_img'])); ?>" alt="why-us">
        </div>
    </div>
    <div class="container mw-1380">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="why-us-single-item">
                    <div class="d-flex align-items-center">
                        <i class="flaticon-currency"></i>
                        <h3><?php echo e($homepage['section1_card1_title']); ?></h3>
                    </div>
                    <p><?php echo e($homepage['section1_card1_description']); ?> </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="why-us-single-item">
                    <div class="d-flex align-items-center">
                        <i class="flaticon-credit-card"></i>
                        <h3><?php echo e($homepage['section1_card2_title']); ?></h3>
                    </div>
                    <p><?php echo e($homepage['section1_card2_description']); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="why-us-single-item">
                    <div class="d-flex align-items-center">
                        <i class="flaticon-rating"></i>
                        <h3><?php echo e($homepage['section1_card3_title']); ?></h3>
                    </div>
                    <p><?php echo e($homepage['section1_card3_description']); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-area pb-105">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-content">
                    <h2>Why You Hire Us.</h2>
                    <a href="about_us" class="read-more">
                        Know More About Us
                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-content">
                    <p>We specialize in providing expert legal services for all real estate matters. With years of experience in navigating the complexities of property transactions, disputes, and regulatory requirements, our team is dedicated to delivering tailored solutions to meet your needs. Whether you’re buying, selling, or developing property, we offer comprehensive support to ensure your real estate dealings are handled with the utmost professionalism and care. Trust us to protect your interests and guide you through every step of the process.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="services-img">
                    <img src="<?php echo e(asset('assets/images/services.png')); ?>" alt="services">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-6 col-sm-6">
                        <div class="service-single-item transition-y style-two">
                            <!-- <i class="flaticon-house icon"></i> -->
                            <img src="<?php echo e(asset($service['header_img'])); ?>" style="border-radius: 50%;" width="100px">
                            <h3>
                                <a href="<?php echo e(url('service-areas', $service['slug'])); ?>"><?php echo e($service['header_title']); ?></a>
                            </h3>
                            <p style="height:120px; overflow:hidden"> <?php echo e($service['header_description']); ?> </p>
                            <a href="<?php echo e(url('service-areas', $service['slug'])); ?>" class="read-more">
                                Learn More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-12 col-sm-12 text-center">
                        <div class="service-single-item transition-y style-two">
                            <h3>
                                <a href="services" class="read-more fs-3">
                                    View All Services
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="private-loan-area bg-gray2 border border-bottom-0">
    <div class="container">
        <div class="row align-items-center" style="height:750px;">
            <div class="col-lg-6">
                <div class="faq-container">
                    <h2>Frequently Asked Questions (FAQ)</h2>
                    <div class="faq-item">
                        <button class="faq-question" id="faq1">What services do you offer?</button>
                        <div class="faq-answer" id="answer1" style="display:none;">
                            <p>We provide comprehensive legal services for real estate transactions, dispute resolution, contract review, title examination, regulatory compliance, and more.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" id="faq2">How can a real estate lawyer help me with buying or selling property?</button>
                        <div class="faq-answer" id="answer2" style="display:none;">
                            <p>We assist with drafting and reviewing contracts, ensuring legal compliance, conducting title searches, and handling any disputes or issues that arise during the transaction.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" id="faq3">What should I do if I encounter a property dispute?</button>
                        <div class="faq-answer" id="answer3" style="display:none;">
                            <p>Contact us immediately for expert legal advice and representation to resolve disputes related to property ownership, boundaries, or contractual issues.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question" id="faq4">How do you handle landlord-tenant issues?</button>
                        <div class="faq-answer" id="answer4" style="display:none;">
                            <p>We offer legal support in drafting leases, resolving disputes, and addressing issues related to eviction and rental agreements.</p>
                        </div>
                    </div>
                    <!-- Add more FAQ items here -->
                    <div class="col-xl-12 col-sm-12 text-center mt-4">
                        <div class="service-single-item transition-y style-two">
                            <h3>
                                <a href="#" class="read-more fs-3">
                                    View All FAQ’s
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6">
                <div class="private-loan-content">
                    <h2>Private Mortgage Home Loans</h2>
                    <p>Most people find that mortgage financing is complicated and confusing. We help you buy your dream home by simplifying the mortgage financing process with personalized loan options that save you time and money.</p>
                    <a href="loan-program-details.html" class="read-more text-primary">
                        View Details
                        <i class="flaticon-right-arrow"></i>
                    </a>
                    <div class="private-loan-img">
                        <img src="assets/images/private-loan.jpg" alt="private-loan">
                    </div>
                </div>
            </div> -->
            <div class="col-lg-6" style="height:730px;">
                <div class=" faq-container">
                    <h2>Find an Office Near you</h2>
                    <p>Providing expert legal solutions for all your real estate needs, from transactions to disputes. To find your nearest location please type in your postal code below.</p>
                    <form method="get" action="#" role="search" target="">
                        <input class="form-control" type="search" placeholder="Enter your city or postal code " value="" name="s" autocomplete="off">
                        <button class="btn btn-info m-3" type="submit" aria-label="search submit">Search ➝</button>
                        <div class="private-loan-img">
                            <img src="https://static.biospace.com/dims4/default/e7bbb6a/2147483647/strip/true/crop/622x350+2+0/resize/1000x563!/quality/90/?url=https%3A%2F%2Fk1-prod-biospace.s3.us-east-2.amazonaws.com%2Fbrightspot%2Flegacy%2FBioSpace-Assets%2FB957B887-193A-425A-8F50-829DFEEDA28E.jpg" style="border-radius: 10px;" alt="private-loan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us-area ptb-130   ">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-us-content style-two">
                    <h2><?php echo e($homepage['section2_title']); ?></h2>
                    <p><?php echo e($homepage['section2_description']); ?></p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fan-facet-single-item">
                                <h1><span class="counter"><?php echo e($homepage['section2_successrate']); ?></span><span>%</span></h1>
                                <span>Our Success Rate</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fan-facet-single-item ms-xl-5">
                                <h1><span class="counter"><?php echo e($homepage['section2_casesdone']); ?></span><span>+</span></h1>
                                <span>Cases Done</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fan-facet-single-item ms-xl-5">
                                <h1><span class="counter"><?php echo e($homepage['section2_years_in_business']); ?></span><span>+</span></h1>
                                <span>Years in Business</span>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo e($homepage['section2_button_link']); ?>" class="read-more text-primarydiv mt-lg-5 d-inline-block">
                        <?php echo e($homepage['section2_button_label']); ?>

                        <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-wrap text-center text-lg-end">
                    <div class="about-img-3">
                        <img src="<?php echo e(asset('assets/images/about-3.jpg')); ?>" class="img" alt="about">
                        <img src="<?php echo e(asset('assets/images/shape-6.png')); ?>" class="ms-4 shapes" alt="shape">
                    </div>
                    <div class="about-img-3 mt-4 pt-1">
                        <img src="<?php echo e(asset('assets/images/shape-7.png')); ?>" class="me-4 shapes" alt="shape">
                        <img src="<?php echo e(asset('assets/images/about-4.jpg')); ?>" class="img" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-member-area pb-0">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-xl-6">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-sm-6">
                        <div class="team-member-single-item border transition-y">
                            <a href="management-details.html" class="d-block mb-4">
                                <img src="<?php echo e(asset('assets/images/team-1.jpg')); ?>" class="mw-100" alt="team">
                            </a>
                            <div>
                                <span class="title">Office Manager</span>
                                <h3>
                                    <a href="management-details.html">Michael Anderson</a>
                                </h3>
                                <!-- <ul class="ps-0 mb-0 list-unstyled">
                                    <li>
                                        <i class="ri-phone-fill"></i>
                                        <a href="tel:+1332455533">+1 3324 55 533</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="team-member-single-item border transition-y">
                            <a href="management-details.html" class="d-block mb-4">
                                <img src="<?php echo e(asset('assets/images/team-3.jpg')); ?>" class="mw-100" alt="team">
                            </a>
                            <div>
                                <span class="title">Loan Officer</span>
                                <h3>
                                    <a href="management-details.html">Laura Martinez</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="team-member-single-item border transition-y">
                            <a href="management-details.html" class="d-block mb-4">
                                <img src="<?php echo e(asset('assets/images/team-2.jpg')); ?>" class="mw-100" alt="team">
                            </a>
                            <div>
                                <span class="title">Business Manager</span>
                                <h3>
                                    <a href="management-details.html">Jennifer Brown</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="team-member-single-item border transition-y">
                            <a href="management-details.html" class="d-block mb-4">
                                <img src="<?php echo e(asset('assets/images/team-4.jpg')); ?>" class="mw-100" alt="team">
                            </a>
                            <div>
                                <span class="title">CEO at Laks</span>
                                <h3>
                                    <a href="management-details.html">Richard Jackson</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="team-member-content">
                    <h2>Visit our professional team member for your any help from our real estate legal support</h2>
                    <p>Meet with our professional team to receive expert legal support for all your real estate needs. We're here to provide personalized assistance and ensure your transactions are smooth and secure.</p>
                    <a href="management.html" class="read-more text-primarydiv">
                        View All Professional Member
                        <i class="flaticon-right-arrow"></i>
                    </a>
                    <div class="team-img mt-1 mb-1">
                        <img src="<?php echo e(asset('assets/images/team-img.png')); ?>" alt="team-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('web.components.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="contact-us-area overflow-hidden pt-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <h2>Contact with us for your any help needed from our company</h2>
                    <form class="contact-us-form">
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Your email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Your name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Zip Code</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Message</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="pt-lg-3 row">
                            <label class="col-sm-2 col-form-label label"></label>
                            <div class="col-sm-10">
                                <button class="btn btn-dark border-0">
                                    Submit Your Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d193128.60170401802!2d-74.06876187081797!3d40.85794995846174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sHilton%2C%20TY56%2F90%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1707033454996!5m2!1sen!2sbd" style="width: 100%;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area ptb-130 overflow-hidden">
      <div class="container mw-1380 position-relative z-1">
        <div class="section-title">
          <h2>Read the latest news on lending from Laks Mortgage company</h2>
        </div>
        <img
          src="assets/images/shape-3.png"
          class="shape shape-6"
          alt="shape"
        />
      </div>
      <div class="container-fluid p-0">
        <div class="swiper blog-slide">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="blog-single-item style-three">
                <div class="blog-content">
                  <ul class="tags d-flex ps-0 list-unstyled flex-wrap gap-2">
                    <li>
                      <a href="tags.html">London</a>
                    </li>
                    <li>
                      <a href="tags.html">Europe</a>
                    </li>
                  </ul>
                  <h3>
                    <a href="blog-details.html"
                      >Why Slovenia its dining should Be on your this is
                      European bucket List in the dribbble</a
                    >
                  </h3>
                  <p>
                    If you are looking for a lender who offers competitive
                    prices and products, stands behind its commitments, is
                    honest and will not walk away from you after your loan
                    closes, call us to speak to one of our knowledgeable loan
                    originators.
                  </p>
                  <ul
                    class="ps-0 mb-0 list-unstyled d-flex flex-wrap blog-info"
                  >
                    <li>
                      <a href="author.html">
                        <i class="ri-user-3-line"></i>
                        <span>Admin</span>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="ri-message-2-line"></i>
                        <span>02 Comments</span>
                      </a>
                    </li>
                    <li>
                      <i class="ri-calendar-2-line"></i>
                      <span>08 June, 2024</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="blog-single-item style-three">
                <div class="blog-content">
                  <ul class="tags d-flex ps-0 list-unstyled flex-wrap gap-2">
                    <li>
                      <a href="tags.html">Driving</a>
                    </li>
                    <li>
                      <a href="tags.html">Striking</a>
                    </li>
                  </ul>
                  <h3>
                    <a href="blog-details.html"
                      >Super Bowl ad features a literally striking visual full
                      self-driving for your project</a
                    >
                  </h3>
                  <p>
                    If you are looking for a lender who offers competitive
                    prices and products, stands behind its commitments, is
                    honest and will not walk away from you after your loan
                    closes, call us to speak to one of our knowledgeable loan
                    originators.
                  </p>
                  <ul
                    class="ps-0 mb-0 list-unstyled d-flex flex-wrap blog-info"
                  >
                    <li>
                      <a href="author.html">
                        <i class="ri-user-3-line"></i>
                        <span>Admin</span>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="ri-message-2-line"></i>
                        <span>45 Comments</span>
                      </a>
                    </li>
                    <li>
                      <i class="ri-calendar-2-line"></i>
                      <span>07 June, 2024</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="blog-single-item style-three">
                <div class="blog-content">
                  <ul class="tags d-flex ps-0 list-unstyled flex-wrap gap-2">
                    <li>
                      <a href="tags.html">Work</a>
                    </li>
                    <li>
                      <a href="tags.html">Artists</a>
                    </li>
                  </ul>
                  <h3>
                    <a href="blog-details.html"
                      >These three young artists are redefining jewelry with
                      deeply personal work</a
                    >
                  </h3>
                  <p>
                    If you are looking for a lender who offers competitive
                    prices and products, stands behind its commitments, is
                    honest and will not walk away from you after your loan
                    closes, call us to speak to one of our knowledgeable loan
                    originators.
                  </p>
                  <ul
                    class="ps-0 mb-0 list-unstyled d-flex flex-wrap blog-info"
                  >
                    <li>
                      <a href="author.html">
                        <i class="ri-user-3-line"></i>
                        <span>Admin</span>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="ri-message-2-line"></i>
                        <span>22 Comments</span>
                      </a>
                    </li>
                    <li>
                      <i class="ri-calendar-2-line"></i>
                      <span>28 June, 2024</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="blog-single-item style-three">
                <div class="blog-content">
                  <ul class="tags d-flex ps-0 list-unstyled flex-wrap gap-2">
                    <li>
                      <a href="tags.html">ChatGPT</a>
                    </li>
                    <li>
                      <a href="tags.html">Internet</a>
                    </li>
                  </ul>
                  <h3>
                    <a href="blog-details.html"
                      >ChatGPT frenzy sweeps China as firms as that scramble
                      home-grown</a
                    >
                  </h3>
                  <p>
                    If you are looking for a lender who offers competitive
                    prices and products, stands behind its commitments, is
                    honest and will not walk away from you after your loan
                    closes, call us to speak to one of our knowledgeable loan
                    originators.
                  </p>
                  <ul
                    class="ps-0 mb-0 list-unstyled d-flex flex-wrap blog-info"
                  >
                    <li>
                      <a href="author.html">
                        <i class="ri-user-3-line"></i>
                        <span>Admin</span>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <i class="ri-message-2-line"></i>
                        <span>06 Comments</span>
                      </a>
                    </li>
                    <li>
                      <i class="ri-calendar-2-line"></i>
                      <span>05 June, 2024</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination1 text-center"></div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/web/index.blade.php ENDPATH**/ ?>