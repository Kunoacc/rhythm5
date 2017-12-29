<!doctype html>
<html lang="en" class="scheme_original">
<head>
    <?php echo $__env->make('shared.main.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body class="<?php echo $__env->yieldContent('body-class'); ?>">
    <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
    <!-- Body wrap -->
    <div class="body_wrap">
        <!-- Page wrap -->
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>

            <?php echo $__env->make('shared.main.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    </div>

    <a href="coming-soon.html" class="scroll_to_top icon-up" title="Scroll to top"></a>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo $__env->make('shared.main.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>