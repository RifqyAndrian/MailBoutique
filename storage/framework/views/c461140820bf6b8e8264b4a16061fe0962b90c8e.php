<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maiboutique</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-8">
            <h2 class="font-weight-bold">Maiboutique</h2>
        </div>
        <div class="col-4 text-right">
            <?php if(Route::has('login')): ?>
            <div class="px-3 py-1">
                <?php if(auth()->guard()->check()): ?>
                <?php echo $__env->make('layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-gray-700 dark:text-gray-500 underline">Log in</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="card bg-dark text-white">
        <img class="card-img" src="<?php echo e(asset('images/Arriety.jpg')); ?>" alt="Card image" style="height: 70%; width: 100%;">
        <div class="card-img-overlay text-center py-auto" style="padding-top: 25%;">
            <div class="font-weight-bold">
                <p class="card-text">Welcome to Maiboutique</p>
                <p>Online Boutique that Provides You With Various Clothes to Suit Your Various Activities</p>
                <?php if(auth()->guard()->check()): ?>
                <button class="btn btn-primary"><a class="text-white font-weight-bold" href="<?php echo e(route('home')); ?>">Register</a></button>
                <?php else: ?>
                <button class="btn btn-primary"><a class="text-white font-weight-bold" href="<?php echo e(route('register')); ?>">Register</a></button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Fastwork\Jack\laravel\maiboutique\resources\views/welcome.blade.php ENDPATH**/ ?>