

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
                                <a href="<?php echo e(url('admin/lawyer-member-area')); ?>" style="text-decoration: none; color:green" class="fw-bold fs-6">Lawyer Member Area/ </a>
                            </li>
                            <li style="display: inline;">
                                <span class="fs-6" ><?php echo e(@$member->lawyer_name); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div id="add-category-form-container" class="mt-5">
                        <hr>
                        <h2 class="text-center my-3">Edit Lawyer</h2>
                        <form id="create-category-form" action="<?php echo e(route('admin.lawyer-member.update', @$member->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <h3 class="text-center">1. Member Details</h3>
                            <br>
                            <input type="hidden" name="lawyers_id" value="<?php echo e($lawyers->id); ?>">
                            <div class="row">
                                <!-- Lawyer Name -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_name">Name</label>
                                        <input type="text" class="form-control" id="lawyer_name" name="lawyer_name" value="<?php echo e(@$member['lawyer_name']); ?>" placeholder="Name" required>
                                        <?php $__errorArgs = ['lawyer_name'];
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
                                <!-- Lawyer Designation -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_designation">Designation</label>
                                        <input class="form-control" id="lawyer_designation" name="lawyer_designation" value="<?php echo e(@$member['lawyer_designation']); ?>" placeholder="Designation"></input>
                                        <?php $__errorArgs = ['lawyer_designation'];
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
                                <!-- Lawyer About -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_about">About</label>
                                        <input type="text" class="form-control" id="lawyer_about" name="lawyer_about" value="<?php echo e(@$member['lawyer_about']); ?>" placeholder="About">
                                        <?php $__errorArgs = ['lawyer_about'];
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
                                <!-- Lawyer Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lawyer_img">Image</label>
                                        <input type="file" class="form-control" id="lawyer_img" name="lawyer_img">
                                        <?php if(!empty(@$member['lawyer_img'])): ?>
                                        <img src="<?php echo e(asset(@$member['lawyer_img'])); ?>" alt="Lawyer Image" height="100px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['lawyer_img'];
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

                                <!-- Meta Details -->
                                <div class="row">
                                    <hr>
                                    <h3 class="text-center mb-4">2. Meta Section</h3>
                                    <!--Section Short Title -->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?php echo e(@$member['meta_title']); ?>" placeholder="Meta Title" value="<?php echo e(old('meta_title')); ?>">
                                                <?php $__errorArgs = ['meta_title'];
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
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_description">Meta Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_description" name="meta_description" value="<?php echo e(@$member['meta_description']); ?>" placeholder="Meta Description" value="<?php echo e(old('meta_description')); ?>">
                                                <?php $__errorArgs = ['meta_description'];
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
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_tag">Meta Tag</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="<?php echo e(@$member['meta_tag']); ?>">
                                                <?php $__errorArgs = ['meta_tag'];
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
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_img">Meta Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="meta_img" id="meta_img" class="form-control">
                                                <?php if(!empty(@$member['meta_img'])): ?>
                                                <img src="<?php echo e(asset(@$member['meta_img'])); ?>" alt="Meta Image" height="100px">
                                                <?php endif; ?>
                                                <?php $__errorArgs = ['meta_img'];
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
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit Lawyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/admin/edit_lawyer.blade.php ENDPATH**/ ?>