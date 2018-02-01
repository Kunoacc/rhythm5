<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Dashboard</h4>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Dashboard</h4>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>