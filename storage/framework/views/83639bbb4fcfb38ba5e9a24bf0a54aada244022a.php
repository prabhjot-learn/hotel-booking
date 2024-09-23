<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Hotel Booking System'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <header>
        <!-- <h1>Hotel Booking System</h1> -->
        <nav>
            <!-- <a href="<?php echo e(route('rooms.index')); ?>">Rooms</a> -->
            <!-- <a href="<?php echo e(route('rooms.create')); ?>">Create Room</a> -->
        </nav>
    </header>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <!-- <p>&copy; <?php echo e(date('Y')); ?> Hotel Booking System</p> -->
    </footer>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hotel-booking\resources\views/layouts/app.blade.php ENDPATH**/ ?>