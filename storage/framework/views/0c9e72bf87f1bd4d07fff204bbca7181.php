<?php $__env->startSection('content'); ?>

<div class="dashboard">

    <h1 class="title">Admin Dashboard</h1>

    <div class="grid">

        <div class="card users">
            <p>Users</p>
            <h2>1,247</h2>
            <div class="bar"><div class="fill"></div></div>
        </div>

        <div class="card actions">
            <p>Actions</p>
            <h2>89</h2>
            <div class="bar"><div class="fill"></div></div>
        </div>

        <div class="card uptime">
            <p>Uptime</p>
            <h2>99.9%</h2>
            <div class="bar"><div class="fill"></div></div>
        </div>

    </div>

    <div class="button-wrapper">
        <a href="<?php echo e(route('admin.secret')); ?>" class="btn">
            Go to Secret Vault →
        </a>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xamps\htdocs\middleware-praktik\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>