<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Add Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <form class="flex flex-col justify-center items-center border-2 border-black" id="categoryAddForm" action="{{ route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4 mb-4">
                        <label class="font-medium">Product Name:&nbsp;&nbsp; </label>
                        <input  class="form-control border-2 border-black" type="text" id="pname" name="pname">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Short Description:&nbsp;&nbsp; </label>
                            <input  class="form-control border-2 border-black" type="text" id="pshortdesc" name="pshortdesc">
                            </div>
                        <div class="form-group mt-4 mb-4">
                        <label class="font-medium">Description:&nbsp;&nbsp; </label><br>
                        <textarea  class="form-control border-2 border-black" id="pdesc" name="pdesc" rows="4" cols="50"></textarea>
                        {{-- <input class="form-control border-2 border-black" type="text" id="pdesc" name="pdesc"> --}}
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Add Image:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="file" id="pimg" name="pimg">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Price:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="pprice" name="pprice">
                            </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Select Category:&nbsp;&nbsp; </label>
                            {{-- <input class="form-control border-2 border-black" type="file" id="pimg" name="pimg"> --}}
                            <select name="pcat">
                                @foreach ($categories as $category)
                                    <option class="form-control border-2 border-black" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-warning mb-4" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


