<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
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
                    <h3 class="mb-5">Services Area</h3>
                    <div class="row text-center">
                        <form class="form-sample" action="<?php echo e(route('admin.service-area.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <h2>1. Header</h2>
                                <!-- Title -->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-md-3" for="title">Header Title</label>
                                        <div class="col-md-9" >
                                        <input type="text" class="form-control" id="header_title" name="header_title" placeholder="Title" value="<?php echo e(old('header_title', $services->header_title)); ?>" required>
                                        <?php $__errorArgs = ['header_title'];
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
                                <!-- Description -->
                                 <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-md-3" for="description">Header Description</label>
                                        <div class="col-md-9">
                                        <textarea type="text" class="form-control" id="header_description" name="header_description" placeholder="Description"> <?php echo e(old('header_description', @$services->header_description)); ?> </textarea>
                                        <?php $__errorArgs = ['header_description'];
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
                                <!-- Button Label -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="header_button_label">Button Label</label>
                                        <input type="text" class="form-control" id="header_button_label" name="header_button_label" placeholder="Button Label" value="<?php echo e(old('header_button_label', @$services->header_button_label)); ?>">
                                        <?php $__errorArgs = ['header_button_label'];
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
                                <!-- Button Link -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="header_button_link">Button Link</label>
                                        <input type="text" class="form-control" id="header_button_link" name="header_button_link" placeholder="Button Link" value="<?php echo e(old('header_button_link', @$services->header_button_link)); ?>">
                                        <?php $__errorArgs = ['header_button_link'];
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
                                <!-- Header Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="header_img">Header Image</label>
                                        <input type="file" class="form-control" id="header_img" name="header_img" placeholder="Header Image" value="<?php echo e(old('header_img', @$services->header_img)); ?>">
                                        <?php if(@$services->header_img): ?>
                                        <img src="<?php echo e(asset(@$services->header_img)); ?>" alt="Header Image" height="100px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['header_img'];
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
                                <hr>
                                <h2>2. Section</h2>
                                <!-- Section Title -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="section1_title">Section Title</label>
                                        <textarea class="form-control" id="section1_title" name="section1_title" placeholder="Title"><?php echo e(old('section1_title', @$services->section1_title)); ?></textarea>
                                        <?php $__errorArgs = ['section1_title'];
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
                                <!-- Section Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="section1_img">Section 1 Image</label>
                                        <input type="file" class="form-control" id="section1_img" name="section1_img">
                                        <?php if(@$services->section1_img): ?>
                                        <img src="<?php echo e(asset(@$services->section1_img)); ?>" alt="Section Image" height="100px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['section1_img'];
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
                                    <h3 class="text-center mb-4">3. Meta Section</h3>
                                    <!--Section Short Title -->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="<?php echo e(old('meta_title', $services->meta_title)); ?>">
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
                                                <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="<?php echo e(old('meta_description', $services->meta_description)); ?>">
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
                                                <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="<?php echo e(old('meta_tag', $services->meta_tag)); ?>">
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
                                                <?php if(!empty($services->meta_img)): ?>
                                                <img src="<?php echo e(asset($services->meta_img)); ?>" alt="Meta Image" height="100px">
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
                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    tinymce.init({
        selector: '#header_description',
        
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
            'media', 'table', 'emoticons', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons | help',
        menu: {
            favs: {
                title: 'My Favorites',
                items: 'code visualaid | searchreplace | emoticons'
            }
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: '/www.tiny.cloud/css/codepen.min.css',
        readonly: false,
        disabled: false,
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\services_areas.blade.php ENDPATH**/ ?>