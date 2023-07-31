
<?php $__env->startSection('MainContent'); ?>
<br>
<div class="center">
<h2>File Page</h2>
</div>
<div class="add-folder">
   <a href="<?php echo e(url('files/create/'.$folder_id)); ?>" style="text-decoration: none;">
      <h2><span class="plus">+</span></h2>
       <h4>Add </h4>
    </a>
 </div>



<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="folder">
      <div>
         <i class="fas fa-file" style="font-size: 30px;"></i> 
     </div>
     <div class="folder-name">
  </div>
      <div class="folder-name" style="margin-right: 560px">
         <h4> <?php echo e($file->name); ?></h4>
         <p><?php echo e($file->folder->name); ?></p>
      </div>

      <div class="eye-icon">
         <a href="<?php echo e(route('file.show',$file->id)); ?>">
            <i class="fas fa-eye"></i> 
         </a>
      </div>
      <div class="edit-icon">

      <a href="<?php echo e(route('file.edit',$file->id)); ?>">
         <i class="fas fa-edit"></i> 
      </a>
   </div>
   <a href="<?php echo e(Storage::url($file->file_link)); ?>" download>
      <i class="fas fa-download"></i>
  </a>

   <div class="delete-icon">
      <form action="<?php echo e(route('file.destroy', $file->id)); ?>" method="post">
         <?php echo csrf_field(); ?>
         <?php echo method_field('DELETE'); ?>
         <button type="submit" class="btn-delete" id="btn-delete">
            <i class="fas fa-trash-alt"></i> 
         </button>
      </form>
   </div>
   <script>
      $(document).ready(function() {
         $("#btn-delete").click(function() {
            alert("Delete successfully");
        });
      });
   </script>
   </div>

  
   <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/actionfile/file.blade.php ENDPATH**/ ?>