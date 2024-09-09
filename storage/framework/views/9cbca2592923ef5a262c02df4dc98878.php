

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
        <div class="col-12 grid-margin stretch-card m-auto">
            <div class="container p-4" style="background-color: white; border-radius:10px; margin:auto;">
                <div class="table-responsive">
                    <h3 class="mb-5" style="display: inline-block;">FAQ All Q & A</h3>
                    <a href="faq-question-answer/add" id="addfaq" style="display: inline-block; float: right;" class="btn btn-gradient-primary me-2 mb-2">
                        Add FAQ
                    </a>
                    <table class=" table-bordered text-center m-auto" style="width:90%; line-height:1.6; border:1px solid lightgrey;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = @$faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="p-2"><?php echo e(@$loop->iteration); ?></td>
                                <td class="p-2" style="width:30%;"><?php echo e(@$faqs->question); ?></td>
                                <td class="p-2" style="width:50%;"><?php echo e(@$faqs->answer); ?></td>
                                <td class="p-2">
                                    <a type="button" href="<?php echo e(url('admin/faq-question-answer/edit',@$faqs->id)); ?>" class="btn btn-warning btn-sm m-auto">Edit</a> 
                                    <form action="<?php echo e(route('admin.faq.delete', @$faqs->id)); ?>" method="POST" style="display:inline-block;" class="mt-2">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                     <!-- Pagination Links -->
                     <div class="mt-4">
                        <?php echo e($faq->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\faq.blade.php ENDPATH**/ ?>