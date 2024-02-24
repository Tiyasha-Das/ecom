<div class="mx-16 my-5">
        <table class="table">
            <tbody>
                
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                if($product['images'] != null){
                    $images = json_decode($product['images'] ?? '[]');
                    $path = Storage::url($images[0] ?? '');
                    // dd(json_decode($path));
                }
                ?>
                <tr>
                    <td><img class="h-32 w-32" src="<?php echo e(asset($path ?? '')); ?>"></td>
                    <td class="text-lg"><strong><?php echo e($product['name']); ?></strong></td>
                    <td class="text-lg">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <span> <?php echo e($product['qty']); ?> </span>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </td>
                    <td class="text-lg text-right"><strong>&#x20b9;<?php echo e($product['price']); ?><strong></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td class="text-lg ">Total Amount</td>
                    <td></td>
                    <?php
                        $products = collect($products);
                    ?>
                    <td class="text-lg text-right">&#x20b9;<?php echo e($products->sum('price')); ?></td>
                </tr>
            </tfoot>
        </table>


</div>
<?php /**PATH /home/hp/Project/e-commerce/resources/views/components/cart.blade.php ENDPATH**/ ?>