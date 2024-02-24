<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
if($products->images != null){
    $images = json_decode($products->images ?? '[]');
    $path = Storage::url($images[0] ?? '');
}
?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food-details','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <figure><img class="w-96 h-96 mt-2 ml-2" src="<?php echo e(asset($path ?? '')); ?>" alt="pizza" /></figure>
     <?php $__env->slot('name', null, []); ?> 
        <?php echo e($products->name); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('price', null, []); ?> 
        &#x20b9;<?php echo e($products->price); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('foodDesc', null, []); ?> 
        <?php echo e($products->description); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('addTocart', null, []); ?> 
        <a href="/addToCart/<?php echo e($products->slug); ?>" class="btn btn-warning">ADD TO CART</a>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('buyNow', null, []); ?> 
        <a href="#" class="btn btn-warning ml-2">BUY NOW</a>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/hp/Project/e-commerce/resources/views/fooditemlist-details.blade.php ENDPATH**/ ?>