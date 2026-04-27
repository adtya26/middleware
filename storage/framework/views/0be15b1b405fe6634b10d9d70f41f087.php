<?php $__env->startSection('content'); ?>

<h1 class="text-2xl font-semibold mb-6 text-gray-200">
    Admin Dashboard
</h1>

<div class="grid md:grid-cols-3 gap-5">

    <div class="p-5 rounded-xl bg-white/5 border border-white/10">
        <p class="text-sm text-gray-400">Users</p>
        <h2 class="text-2xl font-semibold mt-1">1,247</h2>
    </div>

    <div class="p-5 rounded-xl bg-white/5 border border-white/10">
        <p class="text-sm text-gray-400">Actions</p>
        <h2 class="text-2xl font-semibold mt-1">89</h2>
    </div>

    <div class="p-5 rounded-xl bg-white/5 border border-white/10">
        <p class="text-sm text-gray-400">Uptime</p>
        <h2 class="text-2xl font-semibold mt-1">99.9%</h2>
    </div>

</div>

<div class="mt-10">
    <a href="<?php echo e(route('admin.secret')); ?>"
       class="inline-block px-5 py-2.5 bg-indigo-600 hover:bg-indigo-500 transition rounded-lg text-sm">
        Go to Secret Vault →
    </a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\middleware-praktik\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>