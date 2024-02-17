<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{-- {{ __('Dashboard') }} --}}
                Categories
                    <a href="{{route('admin.category.create')}}"  type="button" class="btn btn-warning float-right"><i class="fa-solid fa-plus"></i>Add Category</a>
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
                                  <th> Category Name</th>
                                  <th>Description</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                @php
                                {{$count = 1;}}
                                @endphp
                                @foreach ($categories as $item)

                                <tr>
                                  <th>{{$count}}</th>
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->description}}</td>
                                  <td>
                                    <a href="{{route('admin.category.show', $item->id)}}" type="button" class="btn btn-success">View</a>
                                    <a href="{{route('admin.category.edit', $item->id)}}" type="button" class="btn btn-info">Edit</a>
                                    <form action="{{route('admin.category.destroy', $item->id)}}" method="POST">
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
