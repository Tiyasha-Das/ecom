{{-- @php
dd($product);
@endphp --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Edit Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <form action="{{route('admin.product.update', $product->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label>Product Name:&nbsp;&nbsp; </label>
                        <input type="text" id="pnameedit" name="pnameedit" value="{{ $product->name}}"><br><br>
                        <label>Product Short Description:&nbsp;&nbsp; </label>
                        <input type="text" id="pshortdescedit" name="pshortdescedit" value="{{ $product->short_desc}}"><br><br>
                        <label>Description:&nbsp;&nbsp; </label><br>
                        <textarea id="pdescedit" name="pdescedit" rows="4" cols="50">{{ $product->description}}</textarea><br><br>
                        {{-- <input type="text" id="pdescedit" name="pdescedit" value="{{ $product->description}}"><br><br> --}}
                        @php
                            if($product->images != null){
                                $images = json_decode($product->images ?? '[]');
                                $path = Storage::url($images[0] ?? '');
                            }
                        @endphp
                        <label>Image:&nbsp;&nbsp; </label>
                        <img src="{{asset($path ?? '')}}" class="h-32 w-32 mb-4" alt="logo"><input type="file" id="pimgedit" name="pimgedit"><br><br>
                        <label>Price</label>
                        <input type="text" id="ppriceedit" name="ppriceedit" value="{{ $product->price}}"><br><br>
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


