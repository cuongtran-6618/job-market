<?php $__env->startSection("content"); ?>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="">
    <strong><label>Register new user</label></strong>
    <form action="<?php echo e(route('user.create')); ?> " method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div class="">
            <label>username</label>
            <input name="name" placeholder="your username" alt="username"/>
        </div>
        <div class="">
            <label>password</label>
            <input name="password" placeholder="your password" alt="password"/>
        </div>
        <div class="">
            <label>email</label>
            <input name="email" placeholder="your valid email" alt="email"/>
        </div>
        <button type="submit">Create user</button>
    </form>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts/layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trancuong/projects/job-market/resources/views/users/register.blade.php ENDPATH**/ ?>