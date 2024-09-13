<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Find Your Best Clothes Here!</h3>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-md-3 my-3">
            <div class="card">
                <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="">
                <div class="card-body">
                    <p class="card-text font-weight-bold"><?php echo e($product->name); ?></p>
                    <p class="card-text">Rp. <?php echo e(number_format($product->price,2,',','.')); ?></p>
                    <a class="btn btn-primary" href="<?php echo e(url('/product/' . $product->id)); ?>">More Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['menus' => App\Utils\HeaderUtil::getMenu()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fastwork\Jack\laravel\maiboutique\resources\views/home.blade.php ENDPATH**/ ?>