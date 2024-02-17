

<div class="navbar bg-amber-400">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="/">
      <img src="<?php echo e(asset('images/3.jpg')); ?>" alt="logo" height="50px" width="50px">
    </a>
    <h2 class="bg-black"><span class="text-orange-600">MENU</span><span class="text-white">(food & drinks)</span></h2>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/categorylist/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <li class="cart-icon"><a href="/cartlist"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
  </div>
</div>
<style>


</style>
<?php /**PATH /home/hp/Project/e-commerce/resources/views/components/menu.blade.php ENDPATH**/ ?>