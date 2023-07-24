
<?php $__env->startSection('MainContent'); ?>
<br>
<div class="row">
    <div class="col-12">
        <form action="<?php echo e(route('file.update',$file->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>    
           <div class="form-group">
              <label for ="name">File Name</label>
              <input type="text" name="name" id="name" class="form-control" value="<?php echo e($file->name); ?>">
           </div>

            <div class="form-group">
                <label for ="name">File :</label>
                <input type="file" name="file" id="file" class="form-control" value="<?php echo e($file->file); ?>"  multiple>
            </div>
            <div class="form-group">
                <label for="birth_date"> File_Tags</label>
                <input type="text" name="file_tags[]" value="<?php echo e($file->file_tags); ?> "  data-role="tagsinput" class="form-control">

            </div>
            
            <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
            </form>
            </div>
            </div>
            
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/actionfile/edit.blade.php ENDPATH**/ ?>