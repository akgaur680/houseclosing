<?php

use App\Http\Controllers\FrontEndController;
use App\Models\ServiceCategory;

$services = ServiceCategory::all();
$hire = FrontEndController::hireus();
?>

<?php $__env->startSection('content'); ?>

<div class="page-banner-area bg-gray2">
    <div class="container mw-1380">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-banner-content">
                    <ul class="ps-0 list-unstyled breadcrumbs">
                        <li>
                            <a href="https://houseclosing.ca">Home</a>
                        </li>
                        <li>
                            <span>Hire Us</span>
                        </li>
                    </ul>
                    <h2> <?php echo e(@$hire['header_title']); ?> </h2>
                    <p> <?php echo e(@$hire['header_description']); ?> </p>

                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo e(asset(@$hire['header_img'])); ?>" style="border-radius: 10px" alt="">
            </div>
        </div>
    </div>
</div>

<div class="contact-us-area overflow-hidden pb-130" style="margin: 40px;">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <h2>Hire Us Now</h2>
                    <form id="hireUsForm" class="contact-us-form" action="<?php echo e(route('hireus.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" >
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
                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" >
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

                        <div class="mb-3 row align-items-center">
                            <label class="col-sm-2 col-form-label label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control">
                                <?php $__errorArgs = ['phone'];
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

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Address</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control" name="address"></textarea>
                                <?php $__errorArgs = ['address'];
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
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label label">Message</label>
                            <div class="col-sm-10">
                                <textarea cols="30" rows="5" class="form-control" name="message" ></textarea>
                                <?php $__errorArgs = ['message'];
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
                        <input type="hidden" name="selected_services" id="selected_services" >
                        <?php $__errorArgs = ['selected_services'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <input type="hidden" name="selected_service_names" id="selected_service_names" >
                        <?php $__errorArgs = ['selected_service_names'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="pt-lg-3 row">
                            <label class="col-sm-2 col-form-label label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark border-0">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member-area pt-130 pb-105" style="padding-top: 90px;">
                    <div class="container mw-1380">
                        <div class="row justify-content-center">

                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-6">
                                <div class="team-member-single-item-hireus border transition-y">
                                    <div class="d-md-flex align-items-center">
                                        <a class="flex-shrink-0 mb-4 mb-md-0 d-block">
                                            <img src="https://houseclosing.ca/assets/images/hireus/1.png" alt="service" style="max-width: 35px; margin-right:10px;">
                                        </a>
                                        <div class="flex-grow-1 ms-34">
                                            <div class="form-check">
                                                <input class="form-check-input service-checkbox" type="checkbox" value="<?php echo e($service->slug); ?>" data-name="<?php echo e($service->header_title); ?>" id="<?php echo e($service->slug); ?>">
                                                <label class="form-check-label" for="<?php echo e($service->slug); ?>" style="font-size: 17px;">
                                                    <?php echo e($service->header_title); ?>

                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.service-checkbox');
        const selectedServicesInput = document.getElementById('selected_services');
        const selectedServiceNamesInput = document.getElementById('selected_service_names');

        document.getElementById('hireUsForm').addEventListener('submit', function(event) {
            const selectedServices = [];
            const selectedServiceNames = [];

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedServices.push(checkbox.value);
                    selectedServiceNames.push(checkbox.getAttribute('data-name'));
                }
            });

            selectedServicesInput.value = selectedServices.join(',');
            selectedServiceNamesInput.value = selectedServiceNames.join(',');

            console.log('Selected Services:', selectedServices);
            console.log('Selected Service Names:', selectedServiceNames);
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\hireus.blade.php ENDPATH**/ ?>