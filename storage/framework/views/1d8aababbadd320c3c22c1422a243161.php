<div class="col-lg-6">
    <div class="contact-us-content">
        <h2>Contact with us for any help needed from our company</h2>
        <form class="contact-us-form" action="<?php echo e(route('contact.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Your email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
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
                <label class="col-sm-2 col-form-label label">Your name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>" required>
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
                <label class="col-sm-2 col-form-label label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" value="<?php echo e(old('phone')); ?>">
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

            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Zip Code</label>
                <div class="col-sm-10">
                    <input type="text" name="zipcode" class="form-control" value="<?php echo e(old('zipcode')); ?>">
                    <?php $__errorArgs = ['zipcode'];
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
            <div class="row">
                <label class="col-sm-2 col-form-label label">Message</label>
                <div class="col-sm-10">
                    <textarea cols="30" rows="5" name="message" class="form-control" required> <?php echo e(old('message')); ?> </textarea>
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
            <div class="pt-lg-3 mb-3 row">
                <label class="col-sm-2 col-form-label label"></label>
                <div class="col-sm-10">
                    <button class="btn btn-dark border-0" type="submit">
                        Submit Your Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\wamp64\www\houseclosing\resources\views\web\components\contact_form.blade.php ENDPATH**/ ?>