<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
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
                
                Products
                    <a href="<?php echo e(route('admin.product.create')); ?>"  type="button" class="btn btn-warning float-right"><i class="fa-solid fa-plus"></i>Add Product</a>
            </h2>
         <?php $__env->endSlot(); ?>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        
                        <div class="overflow-x-auto">
                            <table class="table">
                              <!-- head -->
                              <thead>
                                <tr>
                                  <th>SL No.</th>
                                  <th> Product Name</th>
                                  <th>Short Description</th>
                                  <th>Description</th>
                                  <th>Image</th>
                                  <th>Price</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                <?php
                                {{$count = 1;}}
                                ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        if($item->images != null){
                                            $images = json_decode($item->images ?? '[]');
                                            $path = Storage::url($images[0] ?? '');
                                        }
                                    ?>
                                <tr>
                                  <th><?php echo e($count); ?></th>
                                  <td><?php echo e($item->name); ?></td>
                                  <td><?php echo e($item->short_desc); ?></td>
                                  <td><?php echo e($item->description); ?></td>
                                  <td><img src="<?php echo e(asset($path ?? '')); ?>" class="h-32 w-32" alt="logo"></td>
                                  <td><?php echo e($item->price); ?></td>
                                  <td>
                                    <a href="<?php echo e(route('admin.product.show', $item->id)); ?>" type="button" class="btn btn-success">View</a>
                                    <a href="<?php echo e(route('admin.product.edit', $item->id)); ?>" type="button" class="btn btn-info">Edit</a>
                                    <form action="<?php echo e(route('admin.product.destroy', $item->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-error">Delete</button>
                                    </form>
                                </td>
                                </tr>
                                <?php
                                    {{$count++;}}
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                            </table>
                          </div>
                    </div>
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

<?php /**PATH /home/hp/Project/e-commerce/resources/views/admin/products/list.blade.php ENDPATH**/ ?>