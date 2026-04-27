<?php $__env->startSection('content'); ?>

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white rounded-xl shadow-sm border">

        <!-- HEADER -->
        <div class="text-center py-6">
            <h1 class="text-xl font-semibold text-gray-800">
                <?php echo e(auth()->user()->name); ?>

            </h1>

            <span class="inline-block mt-2 px-4 py-1 text-sm bg-green-500 text-white rounded-full">
                User
            </span>
        </div>

        <hr>

        <!-- BODY -->
        <div class="text-center py-6">
            <h2 class="text-gray-600 font-medium mb-2">Dashboard</h2>

            <p class="text-sm text-gray-500">
                Selamat datang di halaman dashboard user.
            </p>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/user/dashboard.blade.php ENDPATH**/ ?>