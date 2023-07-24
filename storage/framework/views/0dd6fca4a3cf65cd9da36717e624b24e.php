

<?php $__env->startSection('MainContent'); ?>

<br>
<div class="center">
<h2>Folder Page</h2>
</div>
<div class="add-folder">
    <a href="<?php echo e(URL('folders')); ?>" style="text-decoration: none;">
       <h2><span class="plus">+</span></h2>
       <h4>Add </h4>
    </a>
 </div>


 <?php
 use App\Models\Folder;
        $folders = Folder::all();
?>
<br>


<?php $__currentLoopData = $folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $folder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="folder">
      <div>
         <i class="fas fa-folder" ></i> 
     </div>
      <div class="folder-name">
            <h4><?php echo e($folder->name); ?></h4>
      </div>
      <div class="eye-icon">
         <?php if($folder->is_active): ?>
            <a href="<?php echo e(route('file.index', $folder->id)); ?>">
               <i class="fas fa-eye"></i> 
            </a>
         <?php else: ?>
            <span>
               <i class="fas fa-eye" style="color: gray;"></i> 
            </span>
         <?php endif; ?>
      </div>
      <div class="edit-icon">
         <?php if($folder->is_active): ?>
            <a href="<?php echo e(route('folder.edit', $folder->id)); ?>">
               <i class="fas fa-edit"></i> 
            </a>
         <?php else: ?>
            <span>
               <i class="fas fa-edit" style="color: gray;"></i> 
            </span>
         <?php endif; ?>
      </div>
      
      <div class="delete-icon">
         <?php if($folder->is_active): ?>
         <form action="<?php echo e(route('folder.destroy', $folder->id)); ?>" method="post" id="delete-form" onsubmit="return confirmDelete()">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn-delete" id="btn-delete">
                <i class="fas fa-trash-alt"></i> 
            </button>
        </form>
         <?php else: ?>
            <button type="button" class="btn-delete" disabled>
               <i class="fas fa-trash-alt" style="color: gray;"></i> 
            </button>
         <?php endif; ?>
      </div>
      
<script>
   function confirmDelete() {
       var fileCount = <?php echo json_encode($folder->files->count()); ?>;
       if (fileCount > 0) {
           return confirm('Are you sure you want to delete the folder? folder contains ' + fileCount + ' files and they will be deleted too!');
       }else{
         alert("Folder is empty, cannot delete."+fileCount);
       }

       return true;
   }
</script>

   <div class="activation-icon">
      <form action="<?php echo e(route('folder.toggleActivation', $folder->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PATCH'); ?>
          <button type="submit" class="btn-activation" id="btn-activation_<?php echo e($folder->id); ?>">
              <?php if($folder->is_active): ?>
                  <i class="fas fa-check-circle"></i> 
              <?php else: ?>
                  <i class="fas fa-times-circle"></i> 
              <?php endif; ?>
          </button>
      </form>
  </div>

   </div>
   <br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/action/folder.blade.php ENDPATH**/ ?>