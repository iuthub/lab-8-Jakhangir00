<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo e(route('admin.create')); ?>" method="post">
          <div class="form-group">
            <label for="InputTitle">Title</label>
            <input type="text" class="form-control" id="InputTitle" name="title">
          </div>
          <div class="form-group">
            <label for="InputContent">Content</label>
            <input type="text" class="form-control" id="InputContent" name="content">
          </div>
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>