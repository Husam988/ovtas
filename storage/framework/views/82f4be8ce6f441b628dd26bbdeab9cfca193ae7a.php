<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('scss/custom.css')); ?>" rel="stylesheet">

</head>

<body>

    <!-- Header -->
    <div id="app">
        <?php echo $__env->make('layouts.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/jquery-3.5.1.min.js')); ?>" defer></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel-Projects\optimum-vision\resources\views/layouts/app.blade.php ENDPATH**/ ?>