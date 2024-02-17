<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <!-- <a href="/chicken-peperoni-pizza"> -->
                    <figure><img class="card-image" src="<?php echo e(asset('images/Pizza/chicken-pepperoni-pizza.jpeg')); ?>" alt="pizza" /></figure>
                     <?php $__env->slot('title', null, []); ?> 
                        Chicken Pepperoni Pizza
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('desc', null, []); ?> 
                        a pizza with tomato sauce,mozzarella cheese,seasoned chicken and pepperoni
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('price', null, []); ?> 
                        &#x20b9;365
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('order', null, []); ?> 
                        <a href="#" class="btn btn-warning">Order Now</a>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('link', null, []); ?> 
                        /chicken-pepperoni-pizza
                     <?php $__env->endSlot(); ?>
                <!-- </a> -->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <!-- <a href="#"> -->
                    <figure><img class="card-image" src="<?php echo e(asset('images/Biryani/chicken-biryani.jpeg')); ?>" alt="biryani" /></figure>
                     <?php $__env->slot('title', null, []); ?> 
                        Chicken Biryani
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('desc', null, []); ?> 
                        biryani with 2pcs chicken & egg
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('price', null, []); ?> 
                        &#x20b9;140
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('order', null, []); ?> 
                        <a href="#" class="btn btn-warning">Order Now</a>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('link', null, []); ?> 
                     /chicken-biryani
                     <?php $__env->endSlot(); ?>
                <!-- </a> -->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <!-- <a href="#"> -->
                    <figure><img  class="card-image" src="<?php echo e(asset('images/Dosa/plain-dosa.jpeg')); ?>" alt="dosa" /></figure>
                     <?php $__env->slot('title', null, []); ?> 
                        Plain Dosa
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('desc', null, []); ?> 
                       a thin,crisp and slightly tangy south indian pancake served with coconut chutney and sambar 
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('price', null, []); ?> 
                        &#x20b9;175
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('order', null, []); ?> 
                        <a href="#" class="btn btn-warning">Order Now</a>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('link', null, []); ?> 
                        /plain-dosa
                     <?php $__env->endSlot(); ?>
                <!-- </a> -->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <div class="flex">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <!-- <a href="#"> -->
                    <figure><img  class="card-image" src="<?php echo e(asset('images/Roll/egg-roll.jpeg')); ?>" alt="roll" /></figure>
                     <?php $__env->slot('title', null, []); ?> 
                        Egg Roll
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('desc', null, []); ?> 
                        a thin egg dough casing filled with onion rings,sauces 
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('price', null, []); ?> 
                        &#x20b9;55
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('order', null, []); ?> 
                        <a href="#" class="btn btn-warning">Order Now</a>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('link', null, []); ?> 
                        /egg-roll
                     <?php $__env->endSlot(); ?>
                <!-- </a> -->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.food','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('food'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <!-- <a href="#"> -->
                    <figure><img class="card-image" src="<?php echo e(asset('images/Momo/chicken-fried-momo.jpeg')); ?>" alt="momo" /></figure>
                     <?php $__env->slot('title', null, []); ?> 
                        Chicken Fried Momo
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('desc', null, []); ?> 
                        crispy on the outside,tender on the inside with a deep-fried chicken
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('price', null, []); ?> 
                        &#x20b9;149
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('order', null, []); ?> 
                        <a href="#" class="btn btn-warning">Order Now</a>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('link', null, []); ?> 
                        /chicken-fried-momo
                     <?php $__env->endSlot(); ?>
                <!-- </a> -->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/hp/Project/e-commerce/resources/views/home.blade.php ENDPATH**/ ?>