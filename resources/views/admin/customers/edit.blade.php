{{-- @php
dd($product);
@endphp --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Edit Customer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <form action="{{route('admin.customer.update', $customer->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label>Customer Name:&nbsp;&nbsp; </label>
                        <input type="text" id="custnameedit" name="custnameedit" value="{{ $customer->name}}"><br><br>
                        <label>Email:&nbsp;&nbsp; </label>
                        <input type="email" id="custemailedit" name="custemailedit" value="{{ $customer->email}}"><br><br>
                        <label>Phone No:&nbsp;&nbsp; </label>
                        <input type="text" id="custphnedit" name="custphnedit" value="{{ $customer->phone}}"><br><br>
                        <label>Address :&nbsp;&nbsp; </label>
                        <input type="text" id="custaddredit" name="custaddredit" value="{{ $customer->address}}"><br><br>
                        <label>City:&nbsp;&nbsp; </label>
                        <input type="text" id="custcityedit" name="custcityedit" value="{{ $customer->city}}"><br><br>
                        <label>State:&nbsp;&nbsp; </label>
                        <input type="text" id="custstateedit" name="custstateedit" value="{{ $customer->state}}"><br><br>
                        <label>Country:&nbsp;&nbsp; </label>
                        <input type="text" id="custcountryedit" name="custcountryedit" value="{{ $customer->country}}"><br><br>
                        <label>Zip:&nbsp;&nbsp; </label>
                        <input type="text" id="custzipedit" name="custzipedit" value="{{ $customer->zip}}"><br><br>
                        <label>Status:&nbsp;&nbsp; </label>
                        <input type="text" id="custstatusedit" name="custstatusedit" value="{{ $customer->status}}"><br><br>
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



