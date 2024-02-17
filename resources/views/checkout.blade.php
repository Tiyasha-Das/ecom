@include('header')
@php
    $cart = collect($cart_item);
@endphp
<form action="/paynow" method="post" >
    @csrf
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
                {{-- @php
                    $cart = collect($cart_item);
                    dd($cart);
                @endphp --}}
                {{-- @foreach ($cart_item as $item) --}}
                <tr>
                    <td><b>{{$cart->sum('qty')}}</b> Products are purchased </td>
                    <td>Total Amount &#x20b9;<b>{{$cart->sum('price')}}</b></td>
                </tr>

                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
    <div class="ml-7 mt-4 mb-8 mr-7 text-center">
        <input type="submit" class="btn btn-warning" value="Pay Now">
    </div>
</form>
@include('footer')
