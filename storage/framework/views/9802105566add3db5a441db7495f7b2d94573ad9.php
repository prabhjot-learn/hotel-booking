

<?php $__env->startSection('content'); ?>
    <h1>Book Room: <?php echo e($room->name); ?></h1>
    <form action="<?php echo e(route('bookings.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="room_id" value="<?php echo e($room->id); ?>">
        <div>
            <label for="customer_name">Name:</label>
            <input type="text" name="customer_name" id="customer_name" required>
        </div>
        <div>
            <label for="customer_email">Email:</label>
            <input type="email" name="customer_email" id="customer_email" required>
        </div>
        <div>
            <label for="check_in">Check-In Date:</label>
            <input type="date" name="check_in" id="check_in" required>
        </div>
        <div>
            <label for="check_out">Check-Out Date:</label>
            <input type="date" name="check_out" id="check_out" required>
        </div>
        <button type="submit">Book Now</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hotel-booking\resources\views/bookings/create.blade.php ENDPATH**/ ?>