<div class="mx-16 my-5">
        <table class="table">
            <tbody>
                {{-- {{dd($products)}} --}}
                @foreach ($products as $product)
                @php
                if($product['images'] != null){
                    $images = json_decode($product['images'] ?? '[]');
                    $path = Storage::url($images[0] ?? '');
                    // dd(json_decode($path));
                }
                @endphp
                <tr>
                    <td><img class="h-32 w-32" src="{{asset($path ?? '')}}"></td>
                    <td class="text-lg"><strong>{{$product['name']}}</strong></td>
                    <td class="text-lg">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <span> {{$product['qty']}} </span>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </td>
                    <td class="text-lg text-right"><strong>&#x20b9;{{$product['price']}}<strong></td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td class="text-lg ">Total Amount</td>
                    <td></td>
                    @php
                        $products = collect($products);
                    @endphp
                    <td class="text-lg text-right">&#x20b9;{{$products->sum('price')}}</td>
                </tr>
            </tfoot>
        </table>


</div>
