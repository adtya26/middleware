<?php $__env->startSection('content'); ?>

<div class="w-full max-w-md p-6 bg-white/5 border border-white/10 rounded-xl">

    <h1 class="text-xl font-semibold mb-6 text-center">
        Login
    </h1>

    <?php if(session()->has('error')): ?>
        <div class="mb-4 p-3 bg-red-500/10 border border-red-500/30 text-red-300 rounded">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-4">
        <?php echo csrf_field(); ?>

        <input type="email" name="email" placeholder="Email"
        class="w-full p-3 rounded-lg bg-white/5 border border-white/10">

        <input type="password" name="password" placeholder="Password"
        class="w-full p-3 rounded-lg bg-white/5 border border-white/10">

        <button class="w-full bg-indigo-600 py-3 rounded-lg">
            Login
        </button>
    </form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamps\htdocs\middleware-praktik\resources\views/auth/login.blade.php ENDPATH**/ ?>