<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>My Cart</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-right">
            <h3 class="font-weight-bold">Total Price : <?php echo e(number_format($totalPrice,2,',','.')); ?></h3>
            <a class="btn btn-primary" href="<?php echo e(url('check-out')); ?>">Check Out (<?php echo e(count($carts)); ?>)</a>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-md-3 my-3">
            <div class="card">
                <img src="<?php echo e(asset('storage/products/' . $cart->product->image)); ?>" alt="">
                <div class="card-body">
                    <p class="card-text font-weight-bold"><?php echo e($cart->product->name); ?></p>
                    <p class="card-text">Rp. <?php echo e(number_format($cart->product->price,2,',','.')); ?></p>
                    <p class="card-text">Qty: <?php echo e($cart->quantity); ?></p>
                    <form method="post" action="<?php echo e(url('/cart/' . $cart->product->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo e(method_field('DELETE')); ?>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a class="btn btn-primary" href="<?php echo e(url('/cart/edit/' . $cart->product->id)); ?>">Edit Cart</a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <input class="btn btn-danger w-100" type="submit" value="Remove from Cart" style="border-radius: 10px;"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['menus' => App\Utils\HeaderUtil::getMenu()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fastwork\Jack\laravel\maiboutique\resources\views/cart.blade.php ENDPATH**/ ?>