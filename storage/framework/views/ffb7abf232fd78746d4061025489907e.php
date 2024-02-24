<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $cart = collect($cart_item);
?>
<form action="/paynow" method="post" >
    <?php echo csrf_field(); ?>
    <div class="flex w-3/4 mx-auto">
        <h1>Customer Information</h1>
        <table class="table w-full">

            <tbody>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="fullname"></td>
                </tr>
                <tr>
                    <td>Mobile No.</td>
                    <td><input type="text" name="mobno"></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><input type="text" name="state"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country"></td>
                </tr>
                <tr>
                    <td>Pincode</td>
                    <td><input type="text" name="zip"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="flex w-3/4 mx-auto">
        <h1>Purchase Summary</h1>
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Purchase Summary</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                
                
                <tr>
                    <td><b><?php echo e($cart->sum('qty')); ?></b> Products are purchased </td>
                    <td>Total Amount &#x20b9;<b><?php echo e($cart->sum('price')); ?></b></td>
                </tr>

                
            </tbody>
        </table>
    </div>
    <div class="ml-7 mt-4 mb-8 mr-7 text-center">
        <input type="submit" class="btn btn-warning" value="Pay Now">
    </div>
</form>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/hp/Project/e-commerce/resources/views/checkout.blade.php ENDPATH**/ ?>