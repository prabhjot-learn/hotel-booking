

<?php $__env->startSection('content'); ?>
    <h1>Edit Room: <?php echo e($room->name); ?></h1>
    <form action="<?php echo e(route('rooms.update', $room->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
            <label for="name">Room Name:</label>
            <input type="text" name="name" id="name" value="<?php echo e($room->name); ?>" required>
        </div>
        <div>
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" value="<?php echo e($room->capacity); ?>" required>
        </div>
        <div>
            <label for="price">Price per Night:</label>
            <input type="text" name="price" id="price" value="<?php echo e($room->price); ?>" required>
        </div>
        <button type="submit">Update Room</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-booking\resources\views/rooms/edit.blade.php ENDPATH**/ ?>