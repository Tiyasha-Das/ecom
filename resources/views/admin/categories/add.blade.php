<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Add Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <form class="flex flex-col justify-center items-center border-2 border-black" id="categoryAddForm" action="{{ route('admin.category.store')}}" method="post">
                        @csrf
                        <div class="form-group mt-4 mb-4">
                        <label class="font-medium">Catergory Name:&nbsp;&nbsp; </label>
                        <input  class="form-control border-2 border-black" type="text" id="cname" name="cname">
                        </div>
                        <div class="form-group mt-4 mb-4">
                        <label class="font-medium">Add Description:&nbsp;&nbsp; </label>
                        <input class="form-control border-2 border-black" type="text" id="cdesc" name="cdesc">
                        </div>
                        <input type="submit" class="btn btn-warning mb-4" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

