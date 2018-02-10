<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.bubble.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Events'); ?>

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
                            <h4 class="title">New Event</h4>
                            <hr>
                        </div>
                        <div class="content ">
                            <form action="<?php echo e(route('createEvent')); ?>" method="post" role="form" enctype="multipart/form-data" id="newEventForm">
                                <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="venue" name="venue" placeholder="Venue" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select name="type" id="type" class="form-control" required>
                                                    <option value="" disabled selected>Select event type</option>
                                                    <option value="single">Single</option>
                                                    <option value="multiple">Multiple</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea name="description" id="" rows="10" class="form-control" placeholder="Event Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control datepicker-here" id="start_date" name="start_date" placeholder="Event Start Date" data-language='en' data-position="top left" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control datepicker-here" id="end_date" name="end_date" placeholder="Event End Date" data-language='en' data-position="top left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control" id="image" name="image" placeholder="Event image" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <button type="submit" class="btn btn-info btn-block btn-fill text-uppercase">Add Day</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-sm-10 col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Events</h4>
                            <hr>
                        </div>
                        <div class="content">
                            <?php ($events = \App\Events::paginate(10)); ?>
                            <?php if(\App\Events::all()->isNotEmpty()): ?>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Venue</th>
                                        <th>Type</th>
                                        <th>On</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->name); ?></td>
                                            <td><?php echo e($item->venue); ?></td>
                                            <td><?php echo e($item->type); ?></td>
                                            <td><?php echo e($item->start_date); ?></td>
                                            <td>
                                                <button type="submit" class="btn btn-danger btn-fill" id="delete" onclick="deleteEvent('<?php echo e($item->id); ?>')"><i class="pe-7s-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <h4 class="text-uppercase text-center">
                                    No Events have been added
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
    <script>

        function deleteEvent(id) {
            let data = id;
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(() => {
                swal(
                    'Processing',
                    'please wait...',
                    'info'
                );
                swal.showLoading();
                $.ajax({
                    type: 'post',
                    url: '<?php echo e(route('deleteEvent')); ?>',
                    data: {
                        '_token': '<?php echo e(csrf_token()); ?>',
                        'id': data
                    },
                    success: (data) => {
                        if (data.type === 'success'){
                            swal.close();
                            swal(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            ).then(() => {
                                setTimeout(() => window.location.reload(true), 1000);
                            })
                        }
                    }
                });
            })
        }
        $(document).ready(() => {
            $('#date').datepicker();
/*
            $('#newEventForm').on('submit', (e) => {
                e.preventDefault();
                let formData = new FormData(this);
                let name = $('#title').val();
                let venue = $('#venue').val();
                let description = quill.getText();
                let start_date = $('#start_date').val();
                let image = $('#image').val();
                let type = $('#type').val();
                if (name === "" || venue === "" || start_date === "" || description === "\n" || image === "" || type === ""){
                    new Noty({
                        type: 'error',
                        text: 'all fields are required',
                        timeout: 2000
                    }).show();
                } else {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo e(route('createEvent')); ?>',
                        data: formData,
                        cache:false,
                        contentType: false,
                        processData: false,
                        beforeSend: () => {
                            $('.overlay').removeAttr('style');
                        },
                        success: (data) => {
                            if (data === 'success'){
                                $('.overlay').addClass('display', 'none');
                                new Noty({
                                    type: 'success',
                                    text: 'Event added successfully',
                                    timeout: 2000
                                }).show();
                                setTimeout(() => window.location.reload(true), 2000);
                            }
                        }
                    });
                }
            });
*/
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared.admin.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>