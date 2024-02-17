
<div class="card card-compact w-96 bg-base-100 shadow-xl ml-4 mb-4 mt-4 mr-4">
  <a href="<?php echo e($link); ?>">
  <?php echo e($slot); ?>

  <div class="card-body">
    <h2 class="card-title"><?php echo e($title); ?></h2>
    <p><?php echo e($desc); ?></p>
    <p><strong class="foodPrice"><?php echo e($price); ?></strong></p>
  </a>
    <div class="card-actions justify-end">
      <!-- <button class="btn btn-warning">Order Now</button> -->
      <?php echo e($order); ?>

    </div>
  </div>
</div>
<?php /**PATH /home/hp/Project/e-commerce/resources/views/components/food.blade.php ENDPATH**/ ?>