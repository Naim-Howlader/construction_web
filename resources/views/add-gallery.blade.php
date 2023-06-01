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
                            <h2 class="text-center text-2xl pb-10">Add Project</h2>
                            <form method="post" action="{{ route('gallery.insert') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-6">
                                    <label for="title"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" id="title" name="title"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                </div>
                                <div class="mb-6">
                                    <label for="image"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                    <input type="file" id="image" name="image"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                </div>

                                <div class="mb-6">

                                    <label for="category"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a
                                        category</label>
                                    <select id="category" name="category"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option></option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                        @endforeach
                                    </select>

                                </div>


                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
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
