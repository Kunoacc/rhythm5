<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.min.js"></script>

<script type="text/javascript" src="<?php echo e(asset('js/vendor/photostack/modernizr.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/_main.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/_packed.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/vendor/essential-grid/js/lightbox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/essential-grid/js/jquery.themepunch.tools.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/essential-grid/js/jquery.themepunch.essential.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/essential-grid-homepage-2.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/vendor/revslider/jquery.themepunch.revolution.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/vendor/revslider/revolution.extension.slideanims.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/revslider/revolution.extension.layeranimation.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/revslider/revolution.extension.kenburn.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/revslider/revolution.extension.navigation.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/revslider/revolution.extension.parallax.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/revslider-homepage-2.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/superfish.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/core.utils.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/core.init.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/template.init.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/shortcodes.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/core.messages.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/magnific/jquery.magnific-popup.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/countdown/jquery.plugin.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/countdown/jquery.countdown.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/swiper/swiper.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/vendor/isotope/dist/isotope.pkgd.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery/ui/accordion.min.js')); ?>"></script>

<script>
    <?php if($message = session()->get("success")): ?>
        swal($message, 'Your donation has been processed successfully 😀', 'success');
    <?php endif; ?>
    <?php if($message = session()->get("error")): ?>
        swal($message, 'There was an error processing yur donation 😢', 'error');
    <?php endif; ?>
</script>