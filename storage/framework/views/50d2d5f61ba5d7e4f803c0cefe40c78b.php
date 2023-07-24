
<?php $__env->startSection('MainContent'); ?>
<br>
<h2>File Details</h2>
<p>Name: <?php echo e($file->name); ?></p>
<p>Name: <?php echo e($file->file); ?></p>
<p>File Tags: <?php echo e($file->file_tags); ?></p>
<p>download File :<a href="<?php echo e(Storage::url($file->file_link)); ?>" download>
    <i class="fas fa-download"></i>
</a></p>

<iframe src="<?php echo e(Storage::url($file->file_link)); ?>" style="width: 100%; height: 500px;"></iframe>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/actionfile/show.blade.php ENDPATH**/ ?>