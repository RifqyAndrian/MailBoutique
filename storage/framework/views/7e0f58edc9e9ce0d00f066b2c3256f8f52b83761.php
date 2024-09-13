<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Check What You've Bought!</h2>
        </div>
    </div>
    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row mb-1">
            <div class="col-12 p-3" style="background-color: #e4e4e4; border-radius: 10px; border: 1px solid black">
                <h3 class="font-weight-bold"><?php echo e($transaction->created_at); ?></h3>
                <table class="my-3">
                    <?php $__currentLoopData = $transaction->transactionDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>&#x2022</td>
                            <td class="pr-3"><?php echo e($detail->quantity); ?> Pc(s)</td>
                            <td class="pr-3"><?php echo e($detail->product_name); ?></td>
                            <td class="pr-3">Rp. <?php echo e(number_format($detail->price,2,',','.')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <h3 class="font-weight-bold">Total Price <?php echo e(number_format($transaction->total_price,2,',','.')); ?></h3>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['menus' => App\Utils\HeaderUtil::getMenu()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Fastwork\Jack\laravel\maiboutique\resources\views/transaction_history.blade.php ENDPATH**/ ?>