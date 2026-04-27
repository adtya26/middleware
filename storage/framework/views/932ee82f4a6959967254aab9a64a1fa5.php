<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-slate-900 text-gray-200 min-h-screen flex items-center justify-center">

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/layouts/guest.blade.php ENDPATH**/ ?>