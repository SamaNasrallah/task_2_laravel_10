<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-tagsinput@0.8.0/dist/bootstrap-tagsinput.css">
<link rel="stylesheet"  href="<?php echo e(asset('css/style.css')); ?>">
<script src="<?php echo e(asset('js/script.js')); ?>"></script>

<title>task 2</title>
    <?php echo $__env->make('includes.pagStyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <h1 class="nav nav-tabs" >
        Archive System
    </h1>


    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form action="<?php echo e(url('files/search/{folder_id}')); ?>" method="GET" class="d-flex">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
      </nav>
 
     <!--   الجزء المتغير   -->
<div class="container">
      <?php echo $__env->yieldContent('MainContent'); ?>   
</div>     


</body>
     <?php echo $__env->make('includes.pagjS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH C:\Users\MI\Desktop\laravel\task2\resources\views/layouts/main.blade.php ENDPATH**/ ?>