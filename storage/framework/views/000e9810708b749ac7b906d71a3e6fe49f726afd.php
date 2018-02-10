<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/plugin.tribe-events.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-class', 'events-list events-archive tribe-events-page-template'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
            <div class="content_wrap">
                <h1 class="page_title">All Events</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="index-2.html">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item all" href="#">Upcoming Events</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">All Events</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <!-- Content -->
            <div class="content">
                <section class="post tribe_events_wrapper">
                    <article class="post_content">
                        <div id="tribe-events-pg-template">
                            <div id="tribe-events" class="tribe-no-js" data-live_ajax="1" data-category="">
                                <div id="tribe-events-content-wrapper" class="tribe-clearfix">
                                    <!-- Main Events Content -->
                                    <div id="tribe-events-content" class="tribe-events-list">
                                        <!-- List Title -->
                                        <h2 class="tribe-events-page-title">Upcoming Events</h2>
                                        <!-- Notices -->
                                        <!-- List Header -->
                                        <div id="tribe-events-header"
                                             data-title="Upcoming Events &#8211; Events &#8211; New Life Church"
                                             data-startofweek="1" data-view="list" data-baseurl="#">
                                        </div>
                                        <!-- Events Loop -->
                                        <div class="tribe-events-loop">
                                           <?php ($events = \App\Events::all()); ?>
                                            <?php if($events->isEmpty()): ?>
                                                <h2 class="tribe-events-list-event-title">
                                                    No events are available yet!.
                                                </h2>
                                            <?php else: ?>
                                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="type-tribe_events tribe-clearfix tribe-events-first">
                                                        <!-- Event Title -->
                                                        <h2 class="tribe-events-list-event-title">
                                                            <a class="tribe-event-url" href="<?php echo e(route('singleEvent', str_replace(' ', '-', $event->name))); ?>" title="Listen to the Wind Words" rel="bookmark">
                                                                <?php echo e($event->name); ?>

                                                            </a>
                                                        </h2>
                                                        <div class="tribe-events-event-meta">
                                                            <div class="author location">
                                                                <!-- Schedule & Recurrence Details -->
                                                                <div class="tribe-event-schedule-details">
                                                                    <span class="tribe-event-date-start"><?php echo e(date('F j, Y', strtotime($event->start_date))); ?></span>
                                                                    <?php if($event->end_date !== null): ?>
                                                                        -
                                                                        <span class="tribe-event-date-end"><?php echo e(date('F j, Y', strtotime($event->end_date))); ?></span>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <!-- Venue Display Info -->
                                                                <div class="tribe-events-venue-details">
                                                                    
                                                                    <address class="tribe-events-address">
                                                                            <span class="tribe-address">
                                                                                <span class="tribe-street-address"><?php echo e($event->venue); ?></span>
                                                                            </span>
                                                                    </address>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Event Image -->
                                                        <div class="tribe-events-event-image">
                                                            <a href="event-single.html">
                                                                <img src="https://docs.google.com/uc?id=<?php echo e($event->image_path); ?>" alt="" />
                                                            </a>
                                                        </div>
                                                        <!-- Event Content -->
                                                        <div class="tribe-events-list-event-description tribe-events-content">
                                                            <p>
                                                            <?php if(strlen(utf8_decode($event->description)) < 10): ?>
                                                                <p><?php echo e($event->description); ?></p>
                                                            <?php else: ?>
                                                                <p><?php echo e(substr($event->description, 0, 300)); ?>...(click title to view more)</p>
                                                            <?php endif; ?>
                                                            </p>
                                                            <a href="<?php echo e(route('singleEvent', str_replace(' ', '-', $event->name))); ?>" class="tribe-events-read-more">Find out more &raquo;</a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <!-- /Content -->
        </div>
    </div>
    <!-- /Page Content Wrap -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>