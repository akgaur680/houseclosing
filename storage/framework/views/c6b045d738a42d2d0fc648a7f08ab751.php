

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <!-- Breadcrumbs -->
        <div class="page-banner-content m-3">
          <ul class="list-unstyled breadcrumbs" style="display:inline-block;">
            <li style="display: inline;">
              <a href="<?php echo e(url('admin/dashboard')); ?>" style="text-decoration: none; color:black" class="fw-bold fs-6">Home/ </a>
            </li>
            <li style="display: inline;">
              <a href="<?php echo e(url('admin/hireus-query')); ?>" style="text-decoration: none; color:green" class="fw-bold fs-6">Hire Us Queries/ </a>
            </li>
            <li style="display: inline;">
              <span class="fs-6">View Query</span>
            </li>
          </ul>
        </div>
        <div class="">

          <div class="container">

            <div class="card">
              <div class="card-header">
                <h3>View Hire Us Query Form </h3>
              </div>
              <div class="m-1 table-responsive">
                <table class="table">
                  <tr>
                    <td>Name: </td>
                    <td><?php echo e(@$query->name); ?></td>
                  </tr>
                  <tr>
                    <td>Phone: </td>
                    <td><?php echo e(@$query->phone); ?></td>
                  </tr>
                  <tr>
                    <td>Email: </td>
                    <td><?php echo e(@$query->email); ?></td>
                  </tr>
                  <tr>
                    <td>Message: </td>
                    <td style="white-space: break-space;"><?php echo e(@$query->message); ?></td>
                  </tr>
                  <tr>
                    <td>Selected Services: </td>
                    <td style="white-space: break-space; line-height:1.6;" >
                      <?php if(!empty(@$query['selected_service_names'])): ?>
                      <?php
                      $query = explode(',', @$query['selected_service_names']);
                      ?>
                      <?php $__currentLoopData = @$query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e((int)@$index + 1); ?>.<?php echo e(trim(@$service)); ?><br>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="card-footer">
                <a href="<?php echo e(route('admin.hireus.query')); ?>" class="btn btn-primary">Back to List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\view_hireus_query.blade.php ENDPATH**/ ?>