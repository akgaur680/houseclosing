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
                    <h2 class="text-center mb-4">Homepage</h2>
                    <hr>
                    <form class="form-sample" action="<?php echo e(route('admin.homepage.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <h3 class="text-center mb-4">1. Section (Header)</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_title">Title :</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_title" name="header_title" placeholder="Header Title" value="<?php echo e(old('header_title', $homepage->header_title)); ?>" required>
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
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_description">
                                        Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_description" name="header_description" placeholder="Homepage Description" value="<?php echo e(old('header_description', $homepage->header_description)); ?>" required>
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
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_button_label1">Button
                                        Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_label1" name="header_button_label1" placeholder="Homepage Button Label" value="<?php echo e(old('header_button_label1', $homepage->header_button_label1)); ?>">
                                        <?php $__errorArgs = ['header_button_label1'];
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
                                    <label class="col-sm-3 col-form-label" for="header_button_link1">Button
                                        Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_link1" name="header_button_link1" placeholder="Homepage Button Link" value="<?php echo e(old('header_button_link1', $homepage->header_button_link1)); ?>">
                                        <?php $__errorArgs = ['header_button_link1'];
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
                                    <label class="col-sm-3 col-form-label" for="header_button_label2">Button
                                        Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_label2" name="header_button_label2" placeholder="Homepage Second Button Label" value="<?php echo e(old('header_button_label2', $homepage->header_button_label2)); ?>">
                                        <?php $__errorArgs = ['header_button_label2'];
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
                                    <label class="col-sm-3 col-form-label" for="header_button_link2">Button
                                        Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="header_button_link2" name="header_button_link2" placeholder="Homepage Second Button Link" value="<?php echo e(old('header_button_link2', $homepage->header_button_link2)); ?>">
                                        <?php $__errorArgs = ['header_button_link2'];
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
                                    <label class="col-sm-3 col-form-label" for="header_img">Background
                                        Image 1</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_img" id="header_img" class="form-control">
                                        <?php if(!empty($homepage->header_img)): ?>
                                        <img src="<?php echo e(asset($homepage->header_img)); ?>" alt="Homepage Image" height="100px">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="header_img2">Background
                                        Image 2</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="header_img2" id="header_img2" class="form-control">
                                        <?php if(!empty($homepage->header_img2)): ?>
                                        <img src="<?php echo e(asset($homepage->header_img2)); ?>" alt="Homepage Image 2" height="100px">
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['header_img2'];
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
                            <hr>
                            <h3 class="text-center mb-4">2. Section</h3>
                            <!--Section Card Area -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section1_card1_title">First Card Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card1_title" name="section1_card1_title" placeholder="Section Title" value="<?php echo e(old('section1_card1_title', $homepage->section1_card1_title)); ?>">
                                        <?php $__errorArgs = ['section1_card1_title'];
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
                                    <label class="col-sm-3 col-form-label" for="section1_card1_description">First Card Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card1_description" name="section1_card1_description" placeholder="Section Title" value="<?php echo e(old('section1_card1_description', $homepage->section1_card1_description)); ?>">
                                        <?php $__errorArgs = ['section1_card1_description'];
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
                                    <label class="col-sm-3 col-form-label" for="section1_card2_title">Second Card Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card2_title" name="section1_card2_title" placeholder="Section Title" value="<?php echo e(old('section1_card2_title', $homepage->section1_card2_title)); ?>">
                                        <?php $__errorArgs = ['section1_card2_title'];
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
                                    <label class="col-sm-3 col-form-label" for="section1_card2_description">Second Card Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card2_description" name="section1_card2_description" placeholder="Section Title" value="<?php echo e(old('section1_card2_description', $homepage->section1_card2_description)); ?>">
                                        <?php $__errorArgs = ['section1_card2_description'];
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
                                    <label class="col-sm-3 col-form-label" for="section1_card3_title">Third Card Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card3_title" name="section1_card3_title" placeholder="Section Title" value="<?php echo e(old('section1_card3_title', $homepage->section1_card3_title)); ?>">
                                        <?php $__errorArgs = ['section1_card3_title'];
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
                                    <label class="col-sm-3 col-form-label" for="section1_card3_description">Third Card Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section1_card3_description" name="section1_card3_description" placeholder="Section Title" value="<?php echo e(old('section1_card3_description', $homepage->section1_card3_description)); ?>">
                                        <?php $__errorArgs = ['section1_card3_description'];
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
                                    <label class="col-sm-3 col-form-label" for="section1_img">Section Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="section1_img" id="section1_img" class="form-control">
                                        <?php if(!empty($homepage->section1_img)): ?>
                                        <img src="<?php echo e(asset($homepage->section1_img)); ?>" alt="Section Image" height="100px">
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
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">3. Section</h3>
                            <!--Section Short Title -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_title">Section Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_title" name="section2_title" placeholder="Section Short Title" value="<?php echo e(old('section2_title', $homepage->section2_title)); ?>">
                                        <?php $__errorArgs = ['section2_title'];
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
                                    <label class="col-sm-3 col-form-label" for="section2_description">Section Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_description" name="section2_description" placeholder="Section Description" value="<?php echo e(old('section2_description', $homepage->section2_description)); ?>">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="section2_successrate">Success Rate</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="section2_successrate" name="section2_successrate" placeholder="Success Rate" value="<?php echo e(old('section2_successrate', $homepage->section2_successrate)); ?>">
                                        <?php $__errorArgs = ['section2_successrate'];
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
                                    <label class="col-sm-3 col-form-label" for="section2_casesdone">Cases Done</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="section2_casesdone" name="section2_casesdone" placeholder="Cases Done" value="<?php echo e(old('section2_casesdone', $homepage->section2_casesdone)); ?>">
                                        <?php $__errorArgs = ['section2_casesdone'];
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
                                    <label class="col-sm-3 col-form-label" for="section2_years_in_business">Years in Business</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="section2_years_in_business" name="section2_years_in_business" placeholder="Years in Business" value="<?php echo e(old('section2_years_in_business', $homepage->section2_years_in_business)); ?>">
                                        <?php $__errorArgs = ['section2_years_in_business'];
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
                                    <label class="col-sm-3 col-form-label" for="section2_button_label">Button Label</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_button_label" name="section2_button_label" placeholder="Section Button Label" value="<?php echo e(old('section2_button_label', $homepage->section2_button_label)); ?>">
                                        <?php $__errorArgs = ['section2_button_label'];
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
                                    <label class="col-sm-3 col-form-label" for="section2_button_link">Button Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="section2_button_link" name="section2_button_link" placeholder="Section Button Link" value="<?php echo e(old('section2_button_link', $homepage->section2_button_link)); ?>">
                                        <?php $__errorArgs = ['section2_button_link'];
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

                            <div class="row">
                                <hr>
                                <h3 class="text-center mb-4">4. Meta Section</h3>
                                <!--Section Short Title -->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="meta_title">Meta Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="<?php echo e(old('meta_title', $homepage->meta_title)); ?>">
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
                                            <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="<?php echo e(old('meta_description', $homepage->meta_description)); ?>">
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
                                            <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="<?php echo e(old('meta_tag', $homepage->meta_tag)); ?>">
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
                                            <input type="file" name="meta_img" id="meta_img" class="form-control" value="<?php echo e($homepage->meta_img); ?>">
                                            <?php if(!empty($homepage->meta_img)): ?>
                                            <img src="<?php echo e(asset($homepage->meta_img)); ?>" alt="Meta Image" height="100px">
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

                            <div class="row text-center">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    tinymce.init({
        selector: '',
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/admin/edit_homepage.blade.php ENDPATH**/ ?>