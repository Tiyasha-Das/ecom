<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <div class="flex">
        <p><?php echo e($slot); ?></p>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($name); ?></h5>
            <p class="card-text">
            <strong>Price:</strong> <?php echo e($price); ?><br>
                <strong>Description:</strong><br>
                <?php echo e($foodDesc); ?>

            <h4><b>Reviews</b></h4>
            <h4><b>Available Location</b></h4>
            </p>
            <p class="card-text">
                <!-- <div class="btn-group"> -->
                    <?php echo e($addTocart); ?>

                    <?php echo e($buyNow); ?>

                <!-- </div> -->
            </p>
        </div>
    </div>
</div><?php /**PATH /home/hp/Project/e-commerce/resources/views/components/food-details.blade.php ENDPATH**/ ?>