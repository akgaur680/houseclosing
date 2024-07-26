<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Page</h4>
                        <form class="form-sample" action="<?php echo e(route('admin.pages.update', $page->id)); ?>"method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="exampleInputName1">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputName1" name="name"
                                                   placeholder="Name" value="<?php echo e(old('name', $page->name)); ?>" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="exampleInputSlug">Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputSlug" name="slug"
                                                   placeholder="Slug" value="<?php echo e(old('slug', $page->slug)); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" for="exampleInputSequence">Sequence</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="exampleInputSequence"
                                                   name="sequence"
                                                   placeholder="Sequence" value="<?php echo e(old('sequence', $page->sequence)); ?>" required>
                                        </div>
                                    </div>
                                </div>

                        
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\edit_page.blade.php ENDPATH**/ ?>