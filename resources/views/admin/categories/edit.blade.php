<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    <form action="{{route('admin.category.update', $category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label>Catergory Name:&nbsp;&nbsp; </label>
                        <input type="text" id="cname" name="cname" value="{{ $category->name}}"><br><br>
                        <label>Add Description:&nbsp;&nbsp; </label>
                        <input type="text" id="cdesc" name="cdesc" value="{{ $category->description}}"><br><br>
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

