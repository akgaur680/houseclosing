

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
                <div class="card-body table-responsive">
                    <h3 class="mb-5" style="display: inline-block;">Lawyer Member Area</h3>
                    <a href="add-lawyer" id="addCategory" style="display: inline-block;  float:right;" class="btn btn-gradient-primary me-2">
                        Add New Member
                    </a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = @$members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(@$member->lawyer_name); ?></td>
                                <td><?php echo e(@$member->lawyer_designation); ?></td>
                                <td>
                                    <a type="button" href="<?php echo e(url('admin/edit-lawyer',@$member->id)); ?>" class="btn btn-warning btn-sm" >Edit</a>
                                    <form action="<?php echo e(route('admin.lawyer-member.destroy', @$member->id)); ?>" method="POST" style="display:inline-block;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views/admin/lawyer_member.blade.php ENDPATH**/ ?>