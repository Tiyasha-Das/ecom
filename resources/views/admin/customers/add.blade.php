<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Add Customer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <form class="flex flex-col justify-center items-center border-2 border-black" id="categoryAddForm" action="{{ route('admin.customer.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Customer Name:&nbsp;&nbsp; </label>
                            <input  class="form-control border-2 border-black" type="text" id="custname" name="custname">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Email:&nbsp;&nbsp; </label>
                            <input  class="form-control border-2 border-black" type="email" id="custemail" name="custemail">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Phone No:&nbsp;&nbsp; </label><br>
                            <input  class="form-control border-2 border-black" type="text" id="custphoneno" name="custphoneno">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Address:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="custaddr" name="custaddr">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">City:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="custcity" name="custcity">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">State:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="custstate" name="custstate">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Country:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="custcountry" name="custcountry">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Zip:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="custzip" name="custzip">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Status:&nbsp;&nbsp; </label>
                            <input class="form-control border-2 border-black" type="text" id="custstatus" name="custstatus">
                        </div>
                        {{-- <div class="form-group mt-4 mb-4">
                            <label class="font-medium">Select Category:&nbsp;&nbsp; </label>
                            <select name="pcat">
                                @foreach ($categories as $category)
                                    <option class="form-control border-2 border-black" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <input type="submit" class="btn btn-warning mb-4" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


