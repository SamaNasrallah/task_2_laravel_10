
<?php $__env->startSection('MainContent'); ?>
<br>
<div class="row">
    <div class="col-12">
        <form action="<?php echo e(route('folder.store')); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
    <div class="form-group">
        <label for ="name">Name Folder </label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="is_active"> Is_Active : </label>
        <input type="checkbox" name="is_active" id="is_active" >
    </div>
    <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
  
   
    </form>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/action/create.blade.php ENDPATH**/ ?>