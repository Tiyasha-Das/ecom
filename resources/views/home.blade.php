@include('header')
        <div class="flex">
            <x-food>
                <!-- <a href="/chicken-peperoni-pizza"> -->
                    <figure><img class="card-image" src="{{asset('images/Pizza/chicken-pepperoni-pizza.jpeg')}}" alt="pizza" /></figure>
                    <x-slot:title>
                        Chicken Pepperoni Pizza
                    </x-slot>
                    <x-slot:desc>
                        a pizza with tomato sauce,mozzarella cheese,seasoned chicken and pepperoni
                    </x-slot>
                    <x-slot:price>
                        &#x20b9;365
                    </x-slot>
                    <x-slot:order>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </x-slot>
                    <x-slot:link>
                        /chicken-pepperoni-pizza
                    </x-slot>
                <!-- </a> -->
            </x-food>
            <x-food>
                <!-- <a href="#"> -->
                    <figure><img class="card-image" src="{{asset('images/Biryani/chicken-biryani.jpeg')}}" alt="biryani" /></figure>
                    <x-slot:title>
                        Chicken Biryani
                    </x-slot>
                    <x-slot:desc>
                        biryani with 2pcs chicken & egg
                    </x-slot>
                    <x-slot:price>
                        &#x20b9;140
                    </x-slot>
                    <x-slot:order>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </x-slot>
                    <x-slot:link>
                     /chicken-biryani
                    </x-slot>
                <!-- </a> -->
            </x-food>
            <x-food>
                <!-- <a href="#"> -->
                    <figure><img  class="card-image" src="{{asset('images/Dosa/plain-dosa.jpeg')}}" alt="dosa" /></figure>
                    <x-slot:title>
                        Plain Dosa
                    </x-slot>
                    <x-slot:desc>
                       a thin,crisp and slightly tangy south indian pancake served with coconut chutney and sambar 
                    </x-slot>
                    <x-slot:price>
                        &#x20b9;175
                    </x-slot>
                    <x-slot:order>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </x-slot>
                    <x-slot:link>
                        /plain-dosa
                    </x-slot>
                <!-- </a> -->
            </x-food>
        </div>
        <div class="flex">
            <x-food>
                <!-- <a href="#"> -->
                    <figure><img  class="card-image" src="{{asset('images/Roll/egg-roll.jpeg')}}" alt="roll" /></figure>
                    <x-slot:title>
                        Egg Roll
                    </x-slot>
                    <x-slot:desc>
                        a thin egg dough casing filled with onion rings,sauces 
                    </x-slot>
                    <x-slot:price>
                        &#x20b9;55
                    </x-slot>
                    <x-slot:order>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </x-slot>
                    <x-slot:link>
                        /egg-roll
                    </x-slot>
                <!-- </a> -->
            </x-food>
            <x-food>
                <!-- <a href="#"> -->
                    <figure><img class="card-image" src="{{asset('images/Momo/chicken-fried-momo.jpeg')}}" alt="momo" /></figure>
                    <x-slot:title>
                        Chicken Fried Momo
                    </x-slot>
                    <x-slot:desc>
                        crispy on the outside,tender on the inside with a deep-fried chicken
                    </x-slot>
                    <x-slot:price>
                        &#x20b9;149
                    </x-slot>
                    <x-slot:order>
                        <a href="#" class="btn btn-warning">Order Now</a>
                    </x-slot>
                    <x-slot:link>
                        /chicken-fried-momo
                    </x-slot>
                <!-- </a> -->
            </x-food>
        </div>
@include('footer')
