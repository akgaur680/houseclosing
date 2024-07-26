<?php
use App\Http\Controllers\FrontEndController;
$testimonials = FrontEndController::testimonials();
$settings = FrontEndController::settings();
?>

<style>
div
{
    color:black;
}
</style>
<section aria-label="section" class="text-light" data-bgimage="linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) 0% -32px / cover,
url('<?php echo e(asset(@$settings['testimonial_bg_image'])); ?>') top"
    data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-light">
                    <h2>Testimonials</h2>
                    <div class="small-border"></div>
                </div>
                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3><?php echo e($testimonial['name']); ?></h3>
                                    <p><?php echo e($testimonial['review_text']); ?></p>
                                    <div class="de_testi_by">
                                        <span><?php echo e($testimonial['position']); ?></span>
                                    </div>
                                    <div class="de_testi_img">
                                        <img src="<?php echo e(asset($testimonial['image'])); ?>" alt="<?php echo e($testimonial['name']); ?>"
                                            style="display: block;width: 100%;height: 50px;width: auto;border-radius: 50%;">
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\components\testimonials.blade.php ENDPATH**/ ?>