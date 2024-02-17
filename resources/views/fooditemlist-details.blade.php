@include('header')
@php
if($products->images != null){
    $images = json_decode($products->images ?? '[]');
    $path = Storage::url($images[0] ?? '');
}
@endphp
<x-food-details >
    <figure><img class="w-96 h-96 mt-2 ml-2" src="{{asset($path ?? '')}}" alt="pizza" /></figure>
    <x-slot:name>
        {{$products->name}}
    </x-slot>
    <x-slot:price>
        &#x20b9;{{$products->price}}
    </x-slot>
    <x-slot:foodDesc>
        {{$products->description}}
    </x-slot>
    <x-slot:addTocart>
        <a href="/addToCart/{{$products->slug}}" class="btn btn-warning">ADD TO CART</a>
    </x-slot>
    <x-slot:buyNow>
        <a href="#" class="btn btn-warning ml-2">BUY NOW</a>
    </x-slot>
</x-food-details>
@include('footer')
