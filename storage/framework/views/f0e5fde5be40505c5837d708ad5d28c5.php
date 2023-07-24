
<?php $__env->startSection('MainContent'); ?>
<br>
<div class="row">
    <div class="col-12">
        <form action="<?php echo e(route('file.store',$folder_id)); ?>" method="POST" enctype="multipart/form-data">
       
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    
    <div class="form-group">
        <label for ="name">File Name</label> 
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" name="files[]" id="file" class="form-control-file" multiple>
    </div>
    <div class="form-group">
        <label for="file_tags"> File_Tags</label>
        <input type="text" name="file_tags[]" value="laravel , flutter , nodejs , java "  data-role="tagsinput" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
  
    </form>
    </div>
    </div>
  
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/actionfile/create.blade.php ENDPATH**/ ?>