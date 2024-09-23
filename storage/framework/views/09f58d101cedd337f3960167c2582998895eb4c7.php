

<?php $__env->startSection('content'); ?>
    <h1>Create Room</h1>
    <form action="<?php echo e(route('rooms.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="name">Room Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="capacity">Capacity:</label>
            <input type="number" name="capacity" id="capacity" required>
        </div>
        <div>
            <label for="price">Price per Night:</label>
            <input type="text" name="price" id="price" required>
        </div>
        <button type="submit">Create Room</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-booking\resources\views/rooms/create.blade.php ENDPATH**/ ?>