@include('header')
<div class="flex">
@foreach ($products as $index=> $product)
    @php
    if($product->images != null){
        $images = json_decode($product->images ?? '[]');
        $path = Storage::url($images[0] ?? '');
    }
    @endphp
    <div class="w-1/3">

    <x-food>
            <figure><img class="card-image" src="{{asset($path ?? '')}}" alt="pizza" /></figure>
            <x-slot:title>
                {{$product->name}}
            </x-slot>
            <x-slot:desc>
                {{$product->short_desc}}
            </x-slot>
            <x-slot:price>
                &#x20b9;{{$product->price}}
            </x-slot>
            <x-slot:order>
                <a href="#" class="btn btn-warning">More Details</a>
            </x-slot>
            <x-slot:link>
                /productlist/{{$product->slug}}
            </x-slot>
    </x-food>
    </div>
    @if(($index + 1) % 3 == 0)
        </div><div class="flex">
    @endif

    @endforeach
</div>

@include('footer')

