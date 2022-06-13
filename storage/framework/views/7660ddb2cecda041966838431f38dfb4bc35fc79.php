<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>❤ Optimum Vision | Welcome</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('scss/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('scss/index.css')); ?>" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" sizes="32x32" type="image/x-icon">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/22d80b14b2.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Header -->
    <header class="header bg-color">
        <?php echo $__env->make('layouts.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <main class="home-main" id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/index.js')); ?>" defer></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel-Projects\optimum-vision\resources\views/layouts/layout.blade.php ENDPATH**/ ?>