<?php $__env->startSection('body-class', 'page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumbs -->
    <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
        <div class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg4">
            <div class="content_wrap">
                <h1 class="page_title">Daily Devotional</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="<?php echo e(route('index')); ?>">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Daily Devotional</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumbs -->
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap">
            <!-- Content -->
            <article class="post_item post_item_sermons odd sermons">
                <?php
                $date = date('Y-m-d');
                $devotional_today = \App\Devotional::where('date', $date)->first();
                ?>
                <?php if($devotional_today): ?>
                    <?php
                    $devotional_date = strtotime($devotional_today->date);
                    $devotional_date = date('l, jS F, Y', $devotional_date)
                    ?>
                    <div class="post_featured">
                        <div class="post_thumb" data-title="<?php echo e($devotional_today->title); ?>">
                            <a class="hover_icon hover_icon_link" href="<?php echo e(route('devotionalDays', $devotional_today->date)); ?>">
                                <img alt="" src="<?php echo e(asset('images/sermons2-370x288.jpg')); ?>">
                            </a>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">TODAY'S DEVOTIONAL</h3>
                        <h4 class="post_title">
                            <a href="<?php echo e(route('devotionalDays', $devotional_today->date)); ?>"><?php echo e($devotional_today->title); ?></a>
                        </h4>
                        <div class="post_descr">
                            <?php if(strlen(utf8_decode($devotional_today->content)) < 10): ?>
                                <p><?php echo e($devotional_today->content); ?></p>
                            <?php else: ?>
                                <p><?php echo e(substr($devotional_today->content, 0, 300)); ?>...(click title to view more)</p>
                            <?php endif; ?>
                            <div class="post_info">
                                <span class="post_info_item post_info_posted_by">by <?php echo e($devotional_today->author); ?></span>
                                <span class="post_info_item">
                                    <span class="post_info_date"><?php echo e($devotional_date); ?></span>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="post_featured">
                        <div class="post_thumb" data-title="Good Friday &#038; Easter Sunday">
                            <a class="hover_icon hover_icon_link" href="javascript:">
                                <img alt="" src="images/sermons2-370x288.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">TODAY'S DEVOTIONAL IS UNAVAILABLE</h3>
                    </div>
                <?php endif; ?>

            </article>

            <div class="content">
                <?php
                $other_devotionals = \App\Devotional::where('date', '<>', date('Y-m-d'))->paginate(5)
                ?>
                <?php if(count($other_devotionals)): ?>
                    <?php $__currentLoopData = $other_devotionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $devotional_date = strtotime($item->date);
                            $devotional_date = date('l, jS F, Y', $devotional_date)
                        ?>
                        <article class="post_item post_item_sermons even sermons">
                            <div class="post_featured">
                                <div class="post_thumb" data-title="<?php echo e($item->title); ?>">
                                    <a class="hover_icon hover_icon_link" href="<?php echo e(route('devotionalDays', $item->date)); ?>">
                                        <img alt="" src="images/kamboo-370x288.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="post_content clearfix">
                                <h4 class="post_title">
                                    <a href="<?php echo e(route('devotionalDays', $item->date)); ?>"><?php echo e($item->title); ?></a>
                                </h4>
                                <div class="post_descr">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                    <div class="post_info">
                                        <span class="post_info_item post_info_posted_by">by <?php echo e($item->author); ?></span>
                                        <span class="post_info_item post_info_posted">
                                            <span class="post_info_date"><?php echo e($devotional_date); ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <article class="post_item post_item_sermons even sermons">
                        <h2 class="post_title" style="padding-top: 50px; padding-bottom: 50px; padding-left: 10px">
                            NO OTHER DEVOTIONAL CONTENT AVAILABLE
                        </h2>
                    </article>
                <?php endif; ?>
                <!-- /Sermons item -->
            </div>
            <!-- /Content -->
            <!-- Sidebar -->
            <div class="sidebar widget_area scheme_original">
                <div class="sidebar_inner widget_area_inner">
                    <!-- Widget: Categories -->
                    <!-- Widget: Search -->
                    <aside class="widget widget_search">
                        <form method="get" class="search_form" action="#">
                            <input type="text" class="search_field" placeholder="Search" value="" name="s" title="Search for:" />
                            <button type="submit" class="search_button icon-search"></button>
                        </form>
                    </aside>
                    <!-- /Widget: Search -->
                    <!-- Widget: Tag Cloud -->
                    <aside class="widget widget_tag_cloud">
                        <h5 class="widget_title">Tags</h5>
                        <div class="tagcloud">
                            <a href="#" title="4 topics">change</a>
                            <a href="#" title="3 topics">christian</a>
                            <a href="#" title="3 topics">church</a>
                            <a href="#" title="7 topics">conferences</a>
                            <a href="#" title="9 topics">events</a>
                            <a href="#" title="4 topics">family</a>
                            <a href="#" title="4 topics">god</a>
                            <a href="#" title="11 topics">post format</a>
                            <a href="#" title="4 topics">religion</a>
                            <a href="#" title="8 topics">sermons</a>
                            <a href="#" title="7 topics">worship</a>
                        </div>
                    </aside>
                    <!-- /Widget: Tag Cloud -->
                    <!-- Widget: Calendar -->

                    <!-- /Widget: Calendar -->
                </div>
            </div>
            <!-- /Sidebar -->
        </div>
        <!-- </div> class="content_wrap"> -->
    </div>
    <!-- /Page Content Wrap -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shared.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>