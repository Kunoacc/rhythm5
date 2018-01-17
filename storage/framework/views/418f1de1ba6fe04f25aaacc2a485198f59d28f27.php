<?php $__env->startSection('title', 'Donations'); ?>

<?php $__env->startSection('content'); ?>
    <div class="overlay" style="display: none">
        <div class="loader">
            <img src="<?php echo e(asset('images/loader.gif')); ?>" alt="">
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-sm-10 col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Donations</h4>
                            <hr>
                        </div>
                        <div class="content ">
                            <?php ($donation = \App\Donations::paginate(10)); ?>
                            <?php if($donation->isNotEmpty()): ?>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Email</th>
                                        <th>Reference</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $donation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->id); ?></td>
                                            <td><?php echo e($item->name); ?></td>
                                            <td>&#8358 <?php echo e(number_format($item->amount)); ?></td>
                                            <td><?php echo e($item->email); ?></td>
                                            <td><?php echo e($item->reference); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <h4 class="text-uppercase text-center">
                                    No donations have been made
                                </h4>
                            <?php endif; ?>
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