<?php
use App\Http\Controllers\FrontEndController;
$faq = FrontEndController::faq();

?>



<?php $__env->startSection('content'); ?>

<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="https://houseclosing.ca">Home</a>
                        </li>
                        <li>
                            <span>FAQ</span>
                        </li>
                    </ul>
                    
                    <h2> <?php echo e(@$faq['header_title']); ?> </h2>
                    <p> <?php echo e(@$faq['header_description']); ?> </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img text-center text-lg-end position-relative z-1">
                    <img src="<?php echo e(asset(@$faq['header_img'])); ?>" class="img" alt="banner-img">
                    <img src="https://houseclosing.ca/assets/images/shape-7.png" class="shape shape-7" alt="shape">
                    <img src="https://houseclosing.ca/assets/images/shape-8.png" class="shape shape-8" alt="shape">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-area ptb-130">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-lg-7">
                <div class="faq-content ms-0 mt-0">
                    <h2>Have any questions about real estate transactions?</h2>
                </div>
                <div class="accordion faq ms-0 me-111 mb-4 mb-lg-0" id="accordionExample3">
                    
                    <?php $__currentLoopData = @$faq['faqs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo e(@$faqs['id']); ?>" aria-controls="collapseOne<?php echo e(@$faqs['id']); ?>">
                                <?php echo e($faqs['question']); ?>

                            </button>
                        </h2>
                        <div id="collapseOne<?php echo e(@$faqs['id']); ?>" class="accordion-collapse collapse " >
                            <div class="accordion-body">
                                <p> <?php echo e(@$faqs['answer']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="faq-img">
                    <img src="<?php echo e(asset(@$faq['section1_img'])); ?>" style="height:587px" alt="faq">
                    <div class="text-end">
                        <a href="<?php echo e(@$faq['section1_button_link']); ?>" class="read-more">
                           <?php echo e(@$faq['section1_button_label']); ?>

                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\faq.blade.php ENDPATH**/ ?>