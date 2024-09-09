

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
                    <h3 class="mb-5" style="display: inline-block;">Hire Us Queries</h3>
                    
                    <!-- <table class="container table-bordered text-center"> -->

                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="p-2">#</th>
                                <th class="p-2">Name</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Date    </th>
                                <th class="p-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = @$queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="p-2"><?php echo e($loop->iteration); ?></td>
                                <td class="p-2"><?php echo e(@$query->name); ?></td>
                                <td class="p-2"><?php echo e(@$query->email); ?></td>
                                <td class="p-2"><?php echo e(@$query->created_at->setTimezone('Canada/Newfoundland')->format('Y-m-d h:i A')); ?></td>
                                <td>
                                    <a type="button" href="<?php echo e(url('admin/hireus-query/view', @$query->id)); ?>" class="btn btn-warning btn-sm" >View</a>
                                    <form action="<?php echo e(route('admin.hireus_query.delete', @$query->id)); ?>" method="POST" style="display:inline-block;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Query?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                     <!-- Pagination Links -->
                     <div class="mt-4">
                        <?php echo e($queries->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\hireus_queries.blade.php ENDPATH**/ ?>