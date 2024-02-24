{{-- <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head> --}}

<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{-- {{ __('Dashboard') }} --}}
                <strong>Order ID : &nbsp;{{$orderDtl[0]->order->id}}</strong>
                    <a href="{{route('admin.order.index')}}"  type="button" class="btn btn-warning float-right">Go Back</a>
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{-- {{ __("You're logged in!") }} --}}
                        <div class="overflow-x-auto">
                            <table class="table">
                              <!-- head -->
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>SL No.</th>
                                  <th> Product Name</th>
                                  <th>Product Description</th>
                                  <th>total</th>
                                  <th>qty</th>
                                  <th>Ordered By</th>
                                  <th>status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                @php
                                {{$count = 1;}}
                                @endphp
                                @foreach ($orderDtl as $item)

                                <tr>
                                  <td></td>
                                  <td>{{$count}}</td>
                                  <td>{{$item->product->name}}</td>
                                  <td>{{$item->product->description}}</td>
                                  <td>{{$item->total}}</td>
                                  <td>{{$item->quantity}}</td>
                                  <td>{{$item->order->user->name}}</td>
                                  <td>{{$item->status}}</td>
                                  <td>

                                </td>
                                </tr>
                                @php
                                    {{$count++;}}
                                @endphp
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>


