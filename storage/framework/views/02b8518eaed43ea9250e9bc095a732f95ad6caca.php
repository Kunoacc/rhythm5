<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $__env->yieldContent('title'); ?></a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <b>Welcome</b> <?php echo e(auth()->user()->name); ?>

                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo e(route('adminSettings')); ?>">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:" onclick="document.getElementById('logout-form').submit()">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form">
                <?php echo e(csrf_field()); ?>

            </form>
        </div>
    </div>
</nav>