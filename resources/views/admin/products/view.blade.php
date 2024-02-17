{{-- @php
dd($product);
@endphp --}}
{{-- <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head> --}}

<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-app-layout>
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
                {{$category->name}}
                    <a href="{{route('admin.category.index')}}"  type="button" class="btn btn-warning float-right">Go Back</a>
            </h2>
        </x-slot> --}}

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
                                  <th>Short Description</th>
                                  <th>Product Description</th>
                                  <th>Product Image</th>
                                  <th>Product price</th>
                                  <th>Category Name</th>
                                  <th>Category Description</th>

                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                @php
                                // dd($product);
                                {{$count = 1;}}
                                @endphp
                                {{-- @foreach ($product as $item) --}}
                                @php
                                if($product->images != null){
                                    $images = json_decode($product->images ?? '[]');
                                    $path = Storage::url($images[0] ?? '');
                                }
                            @endphp
                                <tr>
                                  <td></td>
                                  <th>{{$count}}</th>
                                  <td>{{$product->name}}</td>
                                  <td>{{$product->short_desc}}</td>
                                  <td>{{$product->description}}</td>
                                  <td><img src="{{asset($path ?? '')}}" class="h-32 w-32" alt="logo"></td>
                                  <td>{{$product->price}}</td>
                                  <td>{{$product->category->name}}</td>
                                  <td>{{$product->category->description}}</td>
                                  <td>

                                </td>
                                </tr>
                                @php
                                    {{$count++;}}
                                @endphp
                                {{-- @endforeach --}}
                              </tbody>
                            </table>
                          </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

