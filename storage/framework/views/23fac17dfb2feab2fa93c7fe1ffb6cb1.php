
<?php $__env->startSection('MainContent'); ?>
<br>
<div class="row">
    <div class="col-12">
        <form action="<?php echo e(route('folder.update',$folder->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>    

    <div class="form-group">
        <label for ="name">Name Folder </label>
        <input type="text" name="name" id="name" class="form-control"value="<?php echo e($folder->name); ?>">
    </div>

    <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
   



    </form>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/action/edit.blade.php ENDPATH**/ ?>