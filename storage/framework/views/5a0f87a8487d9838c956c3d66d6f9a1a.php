

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
    dd($folders);
?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/folder.blade.php ENDPATH**/ ?>