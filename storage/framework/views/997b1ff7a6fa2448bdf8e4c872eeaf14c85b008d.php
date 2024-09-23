

<?php $__env->startSection('content'); ?>
    <h1>Rooms</h1>
    <a href="<?php echo e(route('rooms.create')); ?>">Create Room</a>
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($room->name); ?> (Capacity: <?php echo e($room->capacity); ?>) - $<?php echo e($room->price); ?> per night</p>
        <a href="<?php echo e(route('bookings.create', $room->id)); ?>">Book Now</a>
        <a href="<?php echo e(route('rooms.edit', $room->id)); ?>">Edit</a>
        <form action="<?php echo e(route('rooms.destroy', $room->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Delete</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-booking\resources\views/rooms/index.blade.php ENDPATH**/ ?>