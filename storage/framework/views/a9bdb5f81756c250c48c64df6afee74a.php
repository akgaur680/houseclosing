<?php

use App\Models\ServiceCategory;
use App\Http\Controllers\FrontEndController;
use App\Models\Lawyer_Members;

$homepage = FrontEndController::Homepage();
$settings = FrontEndController::settings();
$services = ServiceCategory::all()->take(4);
$lawyers = Lawyer_Members::all()->take(4);
$about = FrontEndController::about();
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
      <h1> <?php echo e(@$homepage['header_title']); ?> </h1>
      <p> <?php echo e(@$homepage['header_description']); ?> </p>
      <div class="banner-btn d-flex align-items-center justify-content-center">
        <a href=" <?php echo e(url(@$homepage['header_button_link1'])); ?> " class="btn btn-dark border-0">
          <?php echo e(@$homepage['header_button_label1']); ?>

          <!-- <img src="assets/images/cart.svg" alt="cart"> -->
        </a>
        <a href="<?php echo e(url(@$homepage['header_button_link2'])); ?>" class="read-more read-dark">
          <?php echo e(@$homepage['header_button_label2']); ?>

          <i class="flaticon-right-arrow"></i>
        </a>
      </div>
    </div>
    <img src="<?php echo e(asset(@$homepage['header_img'])); ?>" class="shape shape-4" alt="shape">
    <img src="<?php echo e(asset(@$homepage['header_img2'])); ?>" class="shape shape-5" alt="shape">
  </div>
</div>
<div class="why-us-area pb-105 position-relative">
  <div class="container mw-1570">
    <div class="why-us-img-2">
      <img src="<?php echo e(asset(@$homepage['section1_img'])); ?>" alt="why-us">
    </div>
  </div>
  <div class="container mw-1380">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-sm-6">
        <div class="why-us-single-item">
          <div class="d-flex align-items-center">
            <i class="flaticon-currency"></i>
            <h3><?php echo e(@$homepage['section1_card1_title']); ?></h3>
          </div>
          <p><?php echo e(@$homepage['section1_card1_description']); ?> </p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="why-us-single-item">
          <div class="d-flex align-items-center">
            <i class="flaticon-credit-card"></i>
            <h3><?php echo e(@$homepage['section1_card2_title']); ?></h3>
          </div>
          <p><?php echo e(@$homepage['section1_card2_description']); ?></p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="why-us-single-item">
          <div class="d-flex align-items-center">
            <i class="flaticon-rating"></i>
            <h3><?php echo e(@$homepage['section1_card3_title']); ?></h3>
          </div>
          <p><?php echo e(@$homepage['section1_card3_description']); ?></p>
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
          <a href="<?php echo e(url('about')); ?>" class="read-more">
            Know More About Us
            <i class="flaticon-right-arrow"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-content">
          <p> <?php echo e(@$about['header_description']); ?> </p>
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
          <?php $__currentLoopData = @$services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-6 col-sm-6">
            <div class="service-single-item transition-y style-two">
              <!-- <i class="flaticon-house icon"></i> -->
              <img src="<?php echo e(asset(@$service['icon'])); ?>">
              <h3 class="mt-3">
                <a href="<?php echo e(url('services', @$service['slug'])); ?>"><?php echo e(@$service['header_title']); ?></a>
              </h3>
              <p style="height:120px; overflow:hidden"> <?php echo e(@$service['header_description']); ?> </p>
              <a href="<?php echo e(url('services', @$service['slug'])); ?>" class="read-more">
                Learn More
                <i class="flaticon-right-arrow"></i>
              </a>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-12 col-sm-12 text-center">
            <div class="service-single-item transition-y style-two">
              <h3>
                <a href="<?php echo e(url('services')); ?>" class="read-more fs-3">
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
<div class="about-us-area ptb-130   ">
  <div class="container mw-1380">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-us-content style-two">
          <h2><?php echo e(@$homepage['section2_title']); ?></h2>
          <p><?php echo e(@$homepage['section2_description']); ?></p>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="fan-facet-single-item">
                <h1><span class="counter"><?php echo e(@$homepage['section2_successrate']); ?></span><span>%</span></h1>
                <span>Our Success Rate</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="fan-facet-single-item ms-xl-5">
                <h1><span class="counter"><?php echo e(@$homepage['section2_casesdone']); ?></span><span>+</span></h1>
                <span>Cases Done</span>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="fan-facet-single-item ms-xl-5">
                <h1><span class="counter"><?php echo e(@$homepage['section2_years_in_business']); ?></span><span>+</span></h1>
                <span>Years in Business</span>
              </div>
            </div>
          </div>
          <!-- <a href="<?php echo e(@$homepage['section2_button_link']); ?>" class="read-more text-primarydiv mt-lg-5 d-inline-block">
            <?php echo e(@$homepage['section2_button_label']); ?>

            <i class="flaticon-right-arrow"></i>
          </a> -->
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-us-wrap text-center text-lg-end">
          <div class="about-img-3">
            <img src="<?php echo e(asset(@$homepage['section2_img1'])); ?>" class="img" alt="about">
            <img src="<?php echo e(asset('assets/images/shape-6.png')); ?>" class="ms-4 shapes" alt="shape">
          </div>
          <div class="about-img-3 mt-4 pt-1">
            <img src="<?php echo e(asset('assets/images/shape-7.png')); ?>" class="me-4 shapes" alt="shape">
            <img src="<?php echo e(asset(@$homepage['section2_img2'])); ?>" class="img" alt="about">
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
          <?php $__currentLoopData = @$lawyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lawyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-xl-6 col-sm-6">
            <div class="team-member-single-item border transition-y">
              <a href="<?php echo e(url('lawyers')); ?>" class="d-block mb-4">
                <img src="<?php echo e(asset(@$lawyer['lawyer_img'])); ?>" class="mw-100" alt="team">
              </a>
              <div class="text-center">
                <span class="title"> <?php echo e(@$lawyer['lawyer_designation']); ?> </span>
                <h3>
                  <a href="<?php echo e(url('lawyers')); ?>"> <?php echo e(@$lawyer['lawyer_name']); ?> </a>
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
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="team-member-content">
          <h2> <?php echo e(@$homepage['section3_title']); ?> </h2>
          <p> <?php echo @$homepage['section3_description']; ?> </p>
          <!-- <a href="<?php echo e(@$homepage['section3_button_link']); ?>" class="read-more text-primarydiv">
            <?php echo e(@$homepage['section3_button_label']); ?>

            <i class="flaticon-right-arrow"></i>
          </a> -->
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
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/web/index.blade.php ENDPATH**/ ?>