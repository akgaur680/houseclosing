<?php
use App\Http\Controllers\FrontEndController;
$experience = FrontEndController::experience();
?>

<section data-bgcolor="#f2f2f2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <span class="p-title"><?php echo e($experience['label']); ?></span><br>
                <h2><?php echo e($experience['title']); ?></h2>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <?php $__currentLoopData = $experience['experience_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo e($index == 0 ? 'active' : ''); ?>" id="pills-tab-<?php echo e($category['id']); ?>" data-toggle="pill" href="#tab-content-<?php echo e($category['id']); ?>" role="tab" aria-controls="tab-content-<?php echo e($category['id']); ?>" aria-selected="<?php echo e($index == 0 ? 'true' : 'false'); ?>">
                                <?php echo e($category['label']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <?php $__currentLoopData = $experience['experience_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php echo e($index == 0 ? 'show active' : ''); ?>" id="tab-content-<?php echo e($category['id']); ?>" role="tabpanel" aria-labelledby="pills-tab-<?php echo e($category['id']); ?>">
                            <p><?php echo e($category['description']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pull-right" data-bgimage="linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) 0% 0% / cover,
    url('<?php echo e(@$experience['image']); ?>') center">
    </div>
</section>
<?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\components\Experiences.blade.php ENDPATH**/ ?>