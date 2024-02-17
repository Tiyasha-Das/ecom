<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{-- {{ __('Dashboard') }} --}}
                Products
                    <a href="{{route('admin.product.create')}}"  type="button" class="btn btn-warning float-right"><i class="fa-solid fa-plus"></i>Add Product</a>
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
                                  <th>SL No.</th>
                                  <th> Product Name</th>
                                  <th>Short Description</th>
                                  <th>Description</th>
                                  <th>Image</th>
                                  <th>Price</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                @php
                                {{$count = 1;}}
                                @endphp
                                @foreach ($products as $item)
                                    @php
                                        if($item->images != null){
                                            $images = json_decode($item->images ?? '[]');
                                            $path = Storage::url($images[0] ?? '');
                                        }
                                    @endphp
                                <tr>
                                  <th>{{$count}}</th>
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->short_desc}}</td>
                                  <td>{{$item->description}}</td>
                                  <td><img src="{{asset($path ?? '')}}" class="h-32 w-32" alt="logo"></td>
                                  <td>{{$item->price}}</td>
                                  <td>
                                    <a href="{{route('admin.product.show', $item->id)}}" type="button" class="btn btn-success">View</a>
                                    <a href="{{route('admin.product.edit', $item->id)}}" type="button" class="btn btn-info">Edit</a>
                                    <form action="{{route('admin.product.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-error">Delete</button>
                                    </form>
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

