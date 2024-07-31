

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
                    <h2 class="text-center mb-4">About Page</h2>
                    <hr>
                    <form class="form-sample" action="<?php echo e(route('admin.about.update')); ?>" method="POST" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <h3 class="text-center mb-4">1. Section (Header)</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_title">Title :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_title" name="header_title" placeholder="Header Title" value="<?php echo e(old('header_title', @$about['header_title'])); ?>" required>
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
                                    <label class="col-sm-4 col-form-label" for="header_description">
                                        Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_description" name="header_description" placeholder=" Description" value="<?php echo e(old('header_description', @$about['header_description'])); ?>" >
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
                                    <label class="col-sm-4 col-form-label" for="header_button_label">Button
                                        Label</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_button_label" name="header_button_label" placeholder="Button Label" value="<?php echo e(old('header_button_label', @$about['header_button_label'])); ?>">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_button_link">Button
                                        Link</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="header_button_link" name="header_button_link" placeholder=" Button Link" value="<?php echo e(old('header_button_link', @$about['header_button_link'])); ?>">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="header_img">Header Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="header_img" id="header_img" class="form-control">
                                        <?php if(!empty(@$about['header_img'])): ?>
                                        <img src="<?php echo e(asset(@$about['header_img'])); ?>" alt="Header Image" height="100px">
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
                        </div>

                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">2. Section</h3>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section1_description">Section Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section1_description" name="section1_description" placeholder="Section Description" value="<?php echo e(old('section1_description', @$about['section1_description'])); ?>">
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section1_business_referrals">Business from Referrals</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section1_business_referrals" name="section1_business_referrals" placeholder="Business from Referrals" value="<?php echo e(old('section1_business_referrals', @$about['section1_business_referrals'])); ?>">
                                        <?php $__errorArgs = ['section1_business_referrals'];
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
                                    <label class="col-sm-4 col-form-label" for="section1_verbal_commitment">Minute Verbal Commitment</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section1_verbal_commitment" name="section1_verbal_commitment" placeholder="Minute Verbal Commitment" value="<?php echo e(old('section1_verbal_commitment', @$about['section1_verbal_commitment'])); ?>">
                                        <?php $__errorArgs = ['section1_verbal_commitment'];
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
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section1_img1">Section 1 Image 1</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="section1_img1" id="section1_img1" class="form-control" value="<?php echo e(@$about->section1_img1); ?>">
                                            <?php if(!empty(@$about['section1_img1'])): ?>
                                            <img src="<?php echo e(asset(@$about['section1_img1'])); ?>" alt="Section1 Image1" height="100px">
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['section1_img1'];
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
                                        <label class="col-sm-4 col-form-label" for="section1_img2">Section 1 Image 2</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="section1_img2" id="section1_img2" class="form-control" value="<?php echo e(@$about->section1_img2); ?>">
                                            <?php if(!empty(@$about['section1_img2'])): ?>
                                            <img src="<?php echo e(asset(@$about['section1_img2'])); ?>" alt="Section1 Image2" height="100px">
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['section1_img2'];
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
                        <!-- Section 3  -->

                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">3. Section</h3>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_title">Section Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_title" name="section2_title" placeholder="Section Title" value="<?php echo e(old('section2_title', @$about['section2_title'])); ?>">
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
                                    <label class="col-sm-4 col-form-label" for="section2_description">Section Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_description" name="section2_description" placeholder="Section Description" value="<?php echo e(old('section2_description', @$about['section2_description'])); ?>">
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
                                    <label class="col-sm-4 col-form-label" for="section2_successful_txn">Successful Transactions</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_successful_txn" name="section2_successful_txn" placeholder="Successful Transactions" value="<?php echo e(old('section2_successful_txn', @$about['section2_successful_txn'])); ?>">
                                        <?php $__errorArgs = ['section2_successful_txn'];
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
                                    <label class="col-sm-4 col-form-label" for="section2_clients_served">Clients Served</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_clients_served" name="section2_clients_served" placeholder="Clients Served" value="<?php echo e(old('section2_clients_served', @$about['section2_clients_served'])); ?>">
                                        <?php $__errorArgs = ['section2_clients_served'];
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
                                    <label class="col-sm-4 col-form-label" for="section2_years_in_business">Years in Business</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_years_in_business" name="section2_years_in_business" placeholder="Years in Business" value="<?php echo e(old('section2_years_in_business', @$about['section2_years_in_business'])); ?>">
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
                                    <label class="col-sm-4 col-form-label" for="section2_industry_awards">Industry Awards</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="section2_industry_awards" name="section2_industry_awards" placeholder="Industry Awards" value="<?php echo e(old('section2_industry_awards', @$about['section2_industry_awards'])); ?>">
                                        <?php $__errorArgs = ['section2_industry_awards'];
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
                                    <label class="col-sm-4 col-form-label" for="section2_img">Section 2 Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="section2_img" id="section2_img" class="form-control" value="<?php echo e(@$about['section2_img']); ?>">
                                        <?php if(!empty(@$about['section2_img'])): ?>
                                        <img src="<?php echo e(asset(@$about['section2_img'])); ?>" alt="Section 2 Image" height="100px">
                                        <?php endif; ?>
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
                            </div>
                            <!-- Card 1 Area -->
                            <div class="row">
                                <h4>Card 1</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card1_title">First Card Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card1_title" name="section2_card1_title" placeholder="Card Title" value="<?php echo e(old('section2_card1_title', @$about['section2_card1_title'])); ?>">
                                            <?php $__errorArgs = ['section2_card1_title'];
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
                                        <label class="col-sm-4 col-form-label" for="section2_card1_description">First Card Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card1_description" name="section2_card1_description" placeholder="Card Description" value="<?php echo e(old('section2_card1_description', @$about['section2_card1_description'])); ?>">
                                            <?php $__errorArgs = ['section2_card1_description'];
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
                                        <label class="col-sm-4 col-form-label" for="section2_card1_icon">First Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card1_icon" name="section2_card1_icon" placeholder="Card Icon" value="<?php echo e(old('section2_card1_icon', @$about['section2_card1_icon'])); ?>">
                                            <?php $__errorArgs = ['section2_card1_icon'];
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
                            
                            <!-- Card 2 Area -->
                            <div class="row">
                                <h4>Card 2</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="section2_card2_title">Second Card Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card2_title" name="section2_card2_title" placeholder="Card Title" value="<?php echo e(old('section2_card2_title', @$about['section2_card2_title'])); ?>">
                                            <?php $__errorArgs = ['section2_card2_title'];
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
                                        <label class="col-sm-4 col-form-label" for="section2_card2_description">Second Card Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card2_description" name="section2_card2_description" placeholder="Card Description" value="<?php echo e(old('section2_card2_description', @$about['section2_card2_description'])); ?>">
                                            <?php $__errorArgs = ['section2_card2_description'];
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
                                        <label class="col-sm-4 col-form-label" for="section2_card2_icon">Second Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card2_icon" name="section2_card2_icon" placeholder="Card Icon" value="<?php echo e(old('section2_card2_icon', @$about['section2_card2_icon'])); ?>">
                                            <?php $__errorArgs = ['section2_card2_icon'];
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

                            <!-- Third Card -->
                             <div class="row">
                             <h4>Card 3</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_card3_title">Third Card Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card3_title" name="section2_card3_title" placeholder="Card Title" value="<?php echo e(old('section2_card3_title', @$about['section2_card3_title'])); ?>">
                                        <?php $__errorArgs = ['section2_card3_title'];
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
                                    <label class="col-sm-4 col-form-label" for="section2_card3_description">Third Card Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card3_description" name="section2_card3_description" placeholder="Card Description" value="<?php echo e(old('section2_card3_description', @$about['section2_card3_description'])); ?>">
                                        <?php $__errorArgs = ['section2_card3_description'];
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
                                        <label class="col-sm-4 col-form-label" for="section2_card3_icon">Third Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card3_icon" name="section2_card3_icon" placeholder="Card Icon" value="<?php echo e(old('section2_card3_icon', @$about['section2_card3_icon'])); ?>">
                                            <?php $__errorArgs = ['section2_card3_icon'];
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
                              <!-- Fourth Card -->
                              <div class="row">
                             <h4>Card 4</h4>
                                <div class="row">
                                <div class="col-sm-4">
                                    <hr>
                                </div>
                                </div>
                             <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="section2_card4_title">Fourth Card Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card4_title" name="section2_card4_title" placeholder="Card Title" value="<?php echo e(old('section2_card4_title', @$about['section2_card4_title'])); ?>">
                                        <?php $__errorArgs = ['section2_card4_title'];
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
                                    <label class="col-sm-4 col-form-label" for="section2_card4_description">Fourth Card Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="section2_card4_description" name="section2_card4_description" placeholder="Card Description" value="<?php echo e(old('section2_card4_description', @$about['section2_card4_description'])); ?>">
                                        <?php $__errorArgs = ['section2_card4_description'];
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
                                        <label class="col-sm-4 col-form-label" for="section2_card4_icon">Fourth Card Icon</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="section2_card4_icon" name="section2_card4_icon" placeholder="Card Icon" value="<?php echo e(old('section2_card4_icon', @$about['section2_card4_icon'])); ?>">
                                            <?php $__errorArgs = ['section2_card4_icon'];
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


                        <div class="row">
                            <hr>
                            <h3 class="text-center mb-4">4. Meta Section</h3>
                            <!--Meta Details -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="meta_title">Meta Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" value="<?php echo e(old('meta_title', @$about['meta_title'])); ?>">
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
                                    <label class="col-sm-4 col-form-label" for="meta_description">Meta Description</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" value="<?php echo e(old('meta_description', @$about['meta_description'])); ?>">
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
                                    <label class="col-sm-4 col-form-label" for="meta_tag">Meta Tag</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="Meta Tag" value="<?php echo e(old('meta_tag', @$about['meta_tag'])); ?>">
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
                                    <label class="col-sm-4 col-form-label" for="meta_img">Meta Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="meta_img" id="meta_img" class="form-control" value="<?php echo e(@$about->meta_img); ?>">
                                        <?php if(!empty(@$about['meta_img'])): ?>
                                        <img src="<?php echo e(asset(@$about['meta_img'])); ?>" alt="Meta Image" height="100px">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\about_us.blade.php ENDPATH**/ ?>