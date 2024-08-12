<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <h4 class="card-title">Setting</h4>
                    <form class="form-sample" action="<?php echo e(route('admin.setting.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <!-- Header Logo -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_logo">Header Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_logo" id="header_logo" class="form-control">
                                        <?php if(@$setting->header_logo): ?>
                                        <img src="<?php echo e(url(@$setting->header_logo)); ?>" alt="" height="50px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['header_logo'];
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
                            <!-- Footer Logo -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="footer_logo">Footer Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="footer_logo" id="footer_logo" class="form-control">
                                        <?php if(@$setting->footer_logo): ?>
                                        <img src="<?php echo e(url(@$setting->footer_logo)); ?>" alt="" height="50px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['footer_logo'];
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
                            <!-- Footer Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="footer_title">Footer Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="footer_title" name="footer_title" placeholder="Footer Title" value="<?php echo e(old('footer_title', $setting->footer_title)); ?>">
                                        <?php $__errorArgs = ['footer_title'];
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
                        <div class="row">
                            <!-- Contact No. -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="contact_no">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Phone" value="<?php echo e(old('contact_no', $setting->contact_no)); ?>">
                                        <?php $__errorArgs = ['contact_no'];
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
                            <!-- Contact Address -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="contact_address">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_address" name="contact_address" placeholder="Address" value="<?php echo e(old('contact_address', $setting->contact_address)); ?>">
                                        <?php $__errorArgs = ['contact_address'];
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
                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="email">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo e(old('email', $setting->email)); ?>">
                                        <?php $__errorArgs = ['email'];
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
                            <!-- Map -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="map">Map</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="map" name="map" placeholder="Map" value="<?php echo e(old('map', $setting->map)); ?>">
                                        <?php $__errorArgs = ['map'];
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

                        <!-- Copyright Content -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="copyright_content">Copyright Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="copyright_content" name="copyright_content" placeholder="Copyright Content" value="<?php echo e(old('copyright_content', $setting->copyright_content)); ?>">
                                        <?php $__errorArgs = ['copyright_content'];
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
                        <div class="row">
                            <!-- Consultation Bar Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_title">Consultation bar Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_title" name="consultation_bar_title" placeholder="Consultation Bar Title" value="<?php echo e(old('consultation_bar_title', $setting->consultation_bar_title)); ?>">
                                        <?php $__errorArgs = ['consultation_bar_title'];
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
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_description">Consultation bar Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_description" name="consultation_bar_description" placeholder="Consultation Bar Description" value="<?php echo e(old('consultation_bar_description', $setting->consultation_bar_description)); ?>">
                                        <?php $__errorArgs = ['consultation_bar_description'];
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
                        <!-- Consultation Bar Description -->
                        <div class="row">
                            <!-- Consultation Button Label -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_button_label">Consultation Bar Button Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_button_label" name="consultation_bar_button_label" placeholder="Consultation Bar Button label" value="<?php echo e(old('consultation_bar_button_label', $setting->consultation_bar_button_label)); ?>">
                                        <?php $__errorArgs = ['consultation_bar_button_label'];
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
                            <!-- Consultation Button Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="consultation_bar_button_link">Consultation Bar Button Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="consultation_bar_button_link" name="consultation_bar_button_link" placeholder="Consultation Bar Button Link" value="<?php echo e(old('consultation_bar_button_link', $setting->consultation_bar_button_link)); ?>">
                                        <?php $__errorArgs = ['consultation_bar_button_link'];
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
                        <div class="row">
                            <!-- Facebook Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="facebook_link">Facebook Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Facebook Link" value="<?php echo e(old('facebook_link', $setting->facebook_link)); ?>">
                                        <?php $__errorArgs = ['facebook_link'];
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
                            <!-- Twitter Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="twitter_link">Twitter Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Twitter Link" value="<?php echo e(old('twitter_link', $setting->twitter_link)); ?>">
                                        <?php $__errorArgs = ['twitter_link'];
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
                        <div class="row">
                            <!-- Instagram Link -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="instagram_link">Instagram Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="instagram_link" name="instagram_link" placeholder="Instagram Link" value="<?php echo e(old('instagram_link', $setting->instagram_link)); ?>">
                                        <?php $__errorArgs = ['instagram_link'];
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

                        <!-- Meta Details -->

                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">4. Meta Section</h3>
                            <!--Section Short Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="<?php echo e(old('meta_title', $setting->meta_title)); ?>">
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
                                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="<?php echo e(old('meta_description', $setting->meta_description)); ?>">
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
                                        <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="<?php echo e(old('meta_tag', $setting->meta_tag)); ?>">
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
                                        <?php if(!empty($setting->meta_img)): ?>
                                        <img src="<?php echo e(asset($setting->meta_img)); ?>" alt="Meta Image" height="100px">
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
                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        tinymce.init({
            selector: '#copyright_content',
            width: 800,
            height: 400,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'help', 'jsplus_maps'
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/admin/setting.blade.php ENDPATH**/ ?>