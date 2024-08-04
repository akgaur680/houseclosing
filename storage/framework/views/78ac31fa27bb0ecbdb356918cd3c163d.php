

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
                                <a href="<?php echo e(url('admin/lawyer-member-area')); ?>" style="text-decoration: none; color:green" class="fw-bold fs-6">Lawyer Members Area/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" >Add New FAQ</span>
                            </li>
                        </ul>
                    </div>
                    <div id="add-faq-container" class="mt-5">
                        <hr>
                        <h2 class="text-center my-3">Add New Lawyer</h2>
                        <form id="create-category-form" action="<?php echo e(route('admin.faq.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <h3 class="text-center">1. FAQ Details</h3>
                            <br>
                            <input type="hidden" name="faq_id" value="<?php echo e($faq->id); ?>">

                            <div class="row">
                                <!-- Question -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="question">Question</label>
                                        <input type="text" class="form-control" id="question" name="question" placeholder="Question" required>
                                        <?php $__errorArgs = ['question'];
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
                                <!-- Answer -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="answer">Answer</label>
                                        <textarea class="form-control" id="answer" rows="5" name="answer" placeholder="Answer" required></textarea>
                                        <?php $__errorArgs = ['answer'];
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
                            <button type="submit" class="btn btn-gradient-primary me-2">Add FAQ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\add_faq.blade.php ENDPATH**/ ?>