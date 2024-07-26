<?php
use App\Http\Controllers\FrontEndController;
$teams = FrontEndController::teams();
?>
<section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?php echo e(@$teams['title']); ?></h2>
                <div class="small-border"></div>
            </div>
            <?php $__currentLoopData = @$teams['team_members']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                <div class="f-profile text-center">
                    <div class="fp-wrap f-invert">
                        <div class="fpw-overlay">
                            
                        </div>
                        <div class="fpw-overlay-btm"></div>
                        <img src="<?php echo e(asset(@$team['image'])); ?>" class="fp-image img-fluid"
                            alt="">
                    </div>
                    <h4><?php echo e(@$team['name']); ?></h4>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\components\teams.blade.php ENDPATH**/ ?>