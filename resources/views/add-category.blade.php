<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-12">
                        <div class="col-span-3"></div>
                        <div class="col-span-6">
                            <h2 class="text-center text-2xl pb-10">{{$title}}</h2>
                            <form method="post" action="{{$url}}">
                                @csrf
                                <div class="mb-6">
                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                                  <input type="text" id="name" name="category_name" value="{{isset($category) ? $category->category_name : ""}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @error('category_name')
                                        <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>

                                
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{$btn}}</button>
                              </form>
                        </div>
                        <div class="col-span-3">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>