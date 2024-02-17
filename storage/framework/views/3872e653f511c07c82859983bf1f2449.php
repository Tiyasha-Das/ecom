<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="flex">
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=> $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    if($product->images != null){
        $images = json_decode($product->images ?? '[]');
        $path = Storage::url($images[0] ?? '');
    }
    ?>
    <div class="w-1/3">

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <figure><img class="card-image" src="<?php echo e(asset($path ?? '')); ?>" alt="pizza" /></figure>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e($product->name); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('desc', null, []); ?> 
                <?php echo e($product->short_desc); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('price', null, []); ?> 
                &#x20b9;<?php echo e($product->price); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('order', null, []); ?> 
                <a href="#" class="btn btn-warning">More Details</a>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('link', null, []); ?> 
                /productlist/<?php echo e($product->slug); ?>

             <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
    <?php if(($index + 1) % 3 == 0): ?>
        </div><div class="flex">
    <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /home/hp/Project/e-commerce/resources/views/fooditemlist.blade.php ENDPATH**/ ?>