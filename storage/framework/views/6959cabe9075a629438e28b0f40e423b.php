
<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
            Edit Customer
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form action="<?php echo e(route('admin.customer.update', $customer->id)); ?>" method="post"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <label>Customer Name:&nbsp;&nbsp; </label>
                        <input type="text" id="custnameedit" name="custnameedit" value="<?php echo e($customer->name); ?>"><br><br>
                        <label>Email:&nbsp;&nbsp; </label>
                        <input type="email" id="custemailedit" name="custemailedit" value="<?php echo e($customer->email); ?>"><br><br>
                        <label>Phone No:&nbsp;&nbsp; </label>
                        <input type="text" id="custphnedit" name="custphnedit" value="<?php echo e($customer->phone); ?>"><br><br>
                        <label>Address :&nbsp;&nbsp; </label>
                        <input type="text" id="custaddredit" name="custaddredit" value="<?php echo e($customer->address); ?>"><br><br>
                        <label>City:&nbsp;&nbsp; </label>
                        <input type="text" id="custcityedit" name="custcityedit" value="<?php echo e($customer->city); ?>"><br><br>
                        <label>State:&nbsp;&nbsp; </label>
                        <input type="text" id="custstateedit" name="custstateedit" value="<?php echo e($customer->state); ?>"><br><br>
                        <label>Country:&nbsp;&nbsp; </label>
                        <input type="text" id="custcountryedit" name="custcountryedit" value="<?php echo e($customer->country); ?>"><br><br>
                        <label>Zip:&nbsp;&nbsp; </label>
                        <input type="text" id="custzipedit" name="custzipedit" value="<?php echo e($customer->zip); ?>"><br><br>
                        <label>Status:&nbsp;&nbsp; </label>
                        <input type="text" id="custstatusedit" name="custstatusedit" value="<?php echo e($customer->status); ?>"><br><br>
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>



<?php /**PATH /home/hp/Project/e-commerce/resources/views/admin/customers/edit.blade.php ENDPATH**/ ?>