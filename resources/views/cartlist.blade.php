@include('header')
<div>
    {{-- @php
        $prods =[
            ['image'=>"images/Pizza/chicken-pepperoni-pizza.jpeg",'name' => 'Chicken Pepperoni Pizza', 'price' => 365,'quantity'=>1],
            ['image'=>"images/Pizza/margherita-pizza.jpeg",'name' => 'Margherita Pizza', 'price' => 109,'quantity'=>1],
            ['image'=>"images/Pizza/corn-veggie-delight-pizza.jpeg",'name' => 'Corn-veggie delight Pizza', 'price' => 179,'quantity'=>1],

            // ['image'=>"images/Pizza/pepper-barbecue-chicken-pizza.jpeg",'name' => 'Pepper Barbecue Chicken Pizza', 'price' => 255,'quantity'=>1],
            // ['image'=>"images/Pizza/non-veg-supreme-pizza.jpeg",'name' => 'Non-veg Supreme Pizza', 'price' => 365,'quantity'=>1],
            // ['image'=>"images/Biryani/chicken-biryani.jpeg",'name' => 'Chicken Biryani', 'price' => 140,'quantity'=>1],
            // ['image'=>"images/Biryani/mutton-biryani.jpeg",'name' => 'Mutton Biryani', 'price' => 370,'quantity'=>1],
            // ['image'=>"images/Biryani/veg-biryani.jpeg",'name' => 'Veg Biryani', 'price' => 260,'quantity'=>1],
            // ['image'=>"images/Biryani/egg-biryani.jpeg",'name' => 'Egg Biryani', 'price' => 250,'quantity'=>1],
            // ['image'=>"images/Dosa/plain-dosa.jpeg",'name' => 'Plain Dosa', 'price' => 175,'quantity'=>1],
            // ['image'=>"images/Dosa/masala-dosa.jpeg",'name' => 'Masala Dosa', 'price' => 180,'quantity'=>1],
            // ['image'=>"images/Dosa/butter-masala-dosa.jpeg",'name' => 'Butter Masala Dosa', 'price' => 195,'quantity'=>1],
            // ['image'=>"images/Dosa/paper-masala-dosa.jpeg",'name' => 'Paper Masala Dosa', 'price' => 170,'quantity'=>1],
            // ['image'=>"images/Dosa/plain-cheese-dosa.jpeg",'name' => 'Plain Cheese Dosa', 'price' => 190,'quantity'=>1],
            // ['image'=>"images/Dosa/plain-onion-dosa.jpeg",'name' => 'Plain Onion Dosa', 'price' => 185,'quantity'=>1],
            // ['image'=>"images/Dosa/ghee-masala-dosa.jpeg",'name' => 'Ghee Masala Dosa', 'price' => 195,'quantity'=>1],
            // ['image'=>"images/Roll/egg-roll.jpeg",'name' => 'Egg Roll', 'price' => 55,'quantity'=>1],
            // ['image'=>"images/Roll/chicken-roll.jpeg",'name' => 'Chicken Roll', 'price' => 90,'quantity'=>1],
            // ['image'=>"images/Roll/mutton-roll.jpeg",'name' => 'Mutton Roll', 'price' => 115,'quantity'=>1],
            // ['image'=>"images/Roll/paneer-roll.jpeg",'name' => 'Paneer Roll', 'price' => 45,'quantity'=>1],
            // ['image'=>"images/Momo/chicken-fried-momo.jpeg",'name' => 'Chicken Fried Momo', 'price' => 149,'quantity'=>1],
            // ['image'=>"images/Momo/veg-steamed-momo.jpeg",'name' => 'Veg Steamed Momo', 'price' => 129,'quantity'=>1],
            // ['image'=>"images/Momo/chicken-tandoori-momo.jpeg",'name' => 'Chicken Tandoori Momo', 'price' => 199,'quantity'=>1],
            // ['image'=>"images/Momo/chicken-steamed-momo.jpeg",'name' => 'Chicken Steamed Momo', 'price' => 139,'quantity'=>1],
            // ['image'=>"images/Momo/chicken-panfried-momo.jpeg",'name' => 'Chicken Panfried Momo', 'price' => 240,'quantity'=>1],
            // ['image'=>"images/Momo/mutton-keema-steamed-momo.jpeg",'name' => 'Mutton Keema Steamed Momo', 'price' => 209,'quantity'=>1],
            // ['image'=>"images/Friedrice/chicken-friedrice.jpeg",'name' => 'Chicken Fried Rice', 'price' => 210,'quantity'=>1],
            // ['image'=>"images/Friedrice/veg-friedrice.jpeg",'name' => 'Veg Fried Rice', 'price' => 145,'quantity'=>1],
            // ['image'=>"images/Friedrice/mixed-friedrice.jpeg",'name' => 'Mixed Fried Rice', 'price' => 270,'quantity'=>1],
            // ['image'=>"images/Friedrice/egg-friedrice.jpeg",'name' => 'Egg Fried Rice', 'price' => 165,'quantity'=>1],
        ];
    @endphp --}}
    <!--pizza-->
    <x-cart :products="$cart_item?? []" />


    <div class="ml-7 mt-2 mb-8 mr-20 cart-icon text-right">
            <a href="/checkout" type="button" class="btn btn-warning">Checkout Now</a>
    </div>
</div>
@include('footer')
