<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyApp</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">

<!-- NAVBAR -->
<nav class="bg-white border-b px-6 py-3 flex justify-between items-center">

    <div class="flex items-center gap-4">
        <span class="font-semibold">MyApp</span>
        <span class="text-gray-500">Dashboard</span>
    </div>

    <div class="flex items-center gap-3 text-sm">
        <span><?php echo e(auth()->user()->name); ?></span>

        <span class="px-3 py-1 bg-green-500 text-white rounded-full text-xs">
            <?php echo e(auth()->user()->role); ?>

        </span>

        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button class="text-red-500 hover:underline">
                Logout
            </button>
        </form>
    </div>

</nav>

<!-- CONTENT -->
<main class="p-6">

    <?php if(session()->has('error')): ?>
        <div class="mb-4 p-4 rounded-lg bg-red-500/10 border border-red-500/30 text-red-600">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

</main>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/layouts/app.blade.php ENDPATH**/ ?>