<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row p-3" style="height: fit-content; border: 1px solid black;">
        <div class="col-sm-12 col-md-6 text-center" style="height: fit-content; border-right: 1px solid black;">
            <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="" style="max-width: 100%; max-height: 75%;" />
        </div>
        <div class="col-sm-12 col-md-6" style="height: fit-content;">
            <h2 class="font-weight-bold"><?php echo e($product->name); ?></h2>
            <h3 class="font-weight-bold">Rp. <?php echo e(number_format($product->price,2,',','.')); ?></h3>
            <hr />
            <p class="font-weight-bold">Product Detail</p>
            <p class="text-sm"><?php echo e($product->description); ?></p>
            <hr style="height: 10px; background-color: black; border: none;" />
            <p class="font-weight-bold">Stock : <?php echo e($product->stock); ?></p>
            <p class="font-weight-bold">Quantity : </p>
            <?php if(Auth::user()->role == "member"): ?>
                <form method="post" action="<?php echo e(url('/add-cart')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12 pr-0">
                            <input id="quantity" class="form-control text-center <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="quantity" value="<?php echo e(old('quantity')); ?>" required autocomplete="quantity" autofocus style="border-radius: 10px; min-height: 30px;">

                            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a class="btn btn-danger h-100 w-100" href="<?php echo e(url()->previous()); ?>" style="border-radius: 10px;">Back</a>
                        </div>
                        <div class="col-6">
                            <input class="btn btn-success w-100" type="submit" value="Add To Cart" style="border-radius: 10px;">
                        </div>
                    </div>
                    <input type="hidden" name="productId" value="<?php echo e($product->id); ?>">
                </form>
            <?php else: ?>
                <form method="post" action="<?php echo e(url('/product/' . $product->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-danger h-100 w-100" href="<?php echo e(url()->previous()); ?>" style="border-radius: 10px;">Back</a>
                        </div>
                        <div class="col-6">
                            <input class="btn btn-danger w-100" type="submit" value="Delete Item" style="border-radius: 10px;"></input>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['menus' => App\Utils\HeaderUtil::getMenu()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fastwork\Jack\laravel\maiboutique\resources\views/product_detail.blade.php ENDPATH**/ ?>