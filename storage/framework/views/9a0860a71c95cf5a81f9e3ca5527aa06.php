
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
                    <div id="add-category-form-container" class="mt-5">
                        <hr>
                        <h2 class="text-center my-3">Edit Service Area Category</h2>
                        <form id="edit-category-form" action="<?php echo e(route('admin.service-area-categories.update', $category->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <h3 class="text-center">1. Header</h3>
                            <br>
                            <input type="hidden" name="services_id" value="<?php echo e($category->services_id); ?>">
                            <div class="row">
                                <!-- Header Title -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_title">Header Title</label>
                                        <input type="text" class="form-control" id="header_title" name="header_title" value="<?php echo e($category->header_title); ?>" placeholder="Header Title" required>
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
                                <!-- Header Description -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_description">Header Description</label>
                                        <input class="form-control" id="header_description" value="<?php echo e($category->header_description); ?>" name="header_description" placeholder="Header Description"></input>
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
                                <!-- Header Button Label -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_button_label">Button Label</label>
                                        <input type="text" class="form-control" id="header_button_label" value="<?php echo e($category->header_button_label); ?>" name="header_button_label" placeholder="Header Title" required>
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
                                <!-- Header Button Link -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_button_link">Button Link</label>
                                        <input type="text" class="form-control" id="header_button_link" name="header_button_link" value="<?php echo e($category->header_button_link); ?>" placeholder="Header Title" required>
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
                                <!-- Slug -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input class="form-control" id="slug" name="slug" value="<?php echo e($category->slug); ?>" placeholder="Slug"></input>
                                        <?php $__errorArgs = ['slug'];
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
                                <!-- Header Background Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="header_img">Header Background Image</label>
                                        <input type="file" class="form-control" id="header_img" name="header_img">
                                        <img src="<?php echo e(asset($category->header_img)); ?>" height="70px">
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
                                <h2 class="text-center">2. Section</h2>
                                <!-- Section 1 Description -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="section1_description">Section 1 Description</label>
                                        <textarea class="form-control" id="section1_description" name="section1_description"  placeholder="Section 1 Description"><?php echo e($category->section1_description); ?></textarea>
                                        <?php $__errorArgs = ['section1_description'];
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
                                <!-- Section 1 Button Label -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section1_button_label">Section 1 Button Label</label>
                                        <input type="text" class="form-control" id="section1_button_label" name="section1_button_label"  value="<?php echo e($category->section1_button_label); ?>" placeholder="Section 1 Button Label">
                                        <?php $__errorArgs = ['section1_button_label'];
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
                                <!-- Section 1 Button Link -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section1_button_link">Section 1 Button Link</label>
                                        <input type="text" class="form-control" id="section1_button_link" name="section1_button_link" value="<?php echo e($category->section1_button_link); ?>" placeholder="Section 1 Button Link">
                                        <?php $__errorArgs = ['section1_button_link'];
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
                                <!-- Section 1 Image -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section1_img">Section 1 Image</label>
                                        <input type="file" class="form-control" id="section1_img" name="section1_img">
                                        <img src="<?php echo e(asset($category->section1_img)); ?>" height="70px" >
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
                                <hr>
                                <h2 class="text-center">3. Section</h2>
                                <!-- Section 2 Title -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="section2_img">Section 2 Image</label>
                                        <input type="file" class="form-control" id="section2_img" name="section2_img" >
                                        <img src="<?php echo e(asset($category->section2_img)); ?>" height="70px" >
                                        <?php $__errorArgs = ['section2_img'];
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
                                <!-- Section 2 Description -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="section2_description">Section 2 Description</label>
                                        <input class="form-control" id="section2_description" name="section2_description" value="<?php echo e($category->section2_description); ?>" placeholder="Section 2 Description"></input>
                                        <?php $__errorArgs = ['section2_description'];
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
                                <h3 class="text-center mb-4">4. Meta Section</h3>
                                <!--Section Short Title -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="<?php echo e(old('meta_title', $category->meta_title)); ?>">
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
                                            <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="<?php echo e(old('meta_description', $category->meta_description)); ?>">
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
                                            <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="<?php echo e(old('meta_tag', $category->meta_tag)); ?>">
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
                                            <?php if(!empty($category->meta_img)): ?>
                                            <img src="<?php echo e(asset($category->meta_img)); ?>" alt="Meta Image" height="100px">
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
                            <button type="submit" class="btn btn-gradient-primary me-2">Edit Category</button>
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
        selector: '#section1_description, #section2_description',
        width: 800,
        height: 400,
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\edit_service_category.blade.php ENDPATH**/ ?>