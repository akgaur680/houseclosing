

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- List of Categories -->
    <div class="row">
        <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                      <!-- Breadcrumbs -->
                      <div class="page-banner-content">
                        <ul class="list-unstyled breadcrumbs" style="display:inline-block;">
                            <li style="display: inline;">
                                <a href="<?php echo e(url('admin/dashboard')); ?>" style="text-decoration: none; color:black" class="fw-bold fs-6" >Home/ </a>
                            </li>
                            <li style="display: inline;">
                                <a href="<?php echo e(url('admin/testimonials')); ?>" style="text-decoration: none; color:green" class="fw-bold fs-6">Testimonials Area/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" >Edit Testimonial - <?php echo e($testimonials['id']); ?></span>
                            </li>
                        </ul>
                    </div>
                        <hr>
                        <div id="add-category-form-container" >
                        <h2 class="text-center my-3">Edit Testimonial</h2>
                        <form id="create-category-form" action="<?php echo e(route('admin.testimonial.update', $testimonials['id'])); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <br>
                            <div class="row">
                                <!--  Name -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($testimonials['name']); ?>" placeholder="Name" required>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <!--  Position -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <input class="form-control" id="position" name="position" value="<?php echo e($testimonials['position']); ?>" placeholder="Position"></input>
                                        <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <!--  Comment -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="comment">comment</label>
                                        <textarea type="text" class="form-control" id="comment" name="comment" rows="5" placeholder="Comment"><?php echo e($testimonials['comment']); ?></textarea>
                                        <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <!--  Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <input type="file" class="form-control" id="img" name="img">
                                        <?php if(!empty(@$testimonials['img'])): ?>
                                        <img src="<?php echo e(asset(@$testimonials['img'])); ?>" alt="Image" height="100px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit Testimonial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\edit_testimonial.blade.php ENDPATH**/ ?>