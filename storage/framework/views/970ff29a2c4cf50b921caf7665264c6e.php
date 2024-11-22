<?php $__env->startSection("content"); ?>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1 class="text-center">Users list </h1>
    <div class="container flex flex-col my-0 mx-auto">
        <table class="flex mx-auto container">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><span><?php echo e($user->id); ?></span></td>
                <td><span><?php echo e($user->name); ?></span></td>
                <td><span><?php echo e($user->email); ?></span></td>
                <td><span><?php echo e($user->password); ?></span></td>
                <td>
                    <form method="post" action="<?php echo e(route('user.delete', [ $user])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input class="button btn-delete" type="submit" value="Delete"/>
                    </form>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts/layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/trancuong/projects/job-market/resources/views/users/index.blade.php ENDPATH**/ ?>