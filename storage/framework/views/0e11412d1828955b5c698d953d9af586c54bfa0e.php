<!doctype html>
<html lang="en">
<head>

    <?php echo $__env->make('shared.admin.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('head'); ?>

</head>

<body>

<div class="wrapper">

    <?php echo $__env->make('shared.admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="main-panel">

        <?php echo $__env->make('shared.admin.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('shared.admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>

</div>

</body>

<?php echo $__env->make('shared.admin.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('scripts'); ?>

</html>