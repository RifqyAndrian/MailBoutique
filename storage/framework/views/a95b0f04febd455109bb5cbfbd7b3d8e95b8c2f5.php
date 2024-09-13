<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card w-50 m-auto">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="font-weight-bold">My Profile</h2>
                    <button class="btn btn-secondary mb-1"><?php echo e($user->role); ?></button>
                    <p class="font-weight-bold mb-0">Username : <?php echo e($user->username); ?></p>
                    <p class="mb-0"><?php echo e($user->email); ?></p>
                    <p class="mb-0">Address : <?php echo e($user->address); ?></p>
                    <p class="mb-0">Phone : <?php echo e($user->phone); ?></p>
                </div>
            </div>
            <div class="row mt-3">
                <?php if($user->role == 'member'): ?>
                    <div class="col-sm-12 col-md-6 text-center">
                        <a class="btn btn-primary w-75" href="<?php echo e(url('profile/edit')); ?>">Edit Profile</a>
                    </div>
                <?php endif; ?>
                <div class="col-sm-12 col-md-<?php echo e($user->role == 'admin' ? 12 : 6); ?> text-center">
                    <a class="btn btn-primary w-<?php echo e($user->role == 'admin' ? 25 : 75); ?>" href="<?php echo e(url('profile/password')); ?>" style="background-color: white; color: blue;">Edit Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['menus' => App\Utils\HeaderUtil::getMenu()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fastwork\Jack\laravel\maiboutique\resources\views/profile.blade.php ENDPATH**/ ?>