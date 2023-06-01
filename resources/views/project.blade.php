<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>
    {{-- toasts  --}}
    <div class="fixed top-[140px] right-5">
        @if (session('success'))
            <div id="toast-success"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        @endif
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <div class="main-section grid grid-cols-12 p-6 text-gray-900 space-x-5">
                        <div class="col-span-6 bg-white px-5 pt-5 pb-5 rounded-md">
                            <div class="btn flex justify-between">
                                <h2 class="text-2xl pb-5">Image Gallery Table</h2>
                                <div class="">
                                    <a href="{{ route('gallery.add') }}">
                                        <button type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                            Project</button>
                                    </a>
                                </div>
                            </div>
                            <div class="relative ">

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400  border-2">
                                    <thead
                                        class="text-xs border text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Project Id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Project Title
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Project Image
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $sl = 1;
                                        @endphp
                                        @foreach ($gallery as $item)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $sl++ }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $item->title }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a class="cursor-zoom" href="{{ asset($item->image) }}"><img
                                                            src="{{ asset($item->image) }}" class="w-60 object-contain"
                                                            alt=" {{ $item->title }} image"></a>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="">
                                                        <button type="button"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                                    </a>
                                                    <a onclick="return confirm('do your want do delete?')"
                                                        href="{{ route('gallery.destroy', ['id' => $item->gallery_id]) }}"
                                                        class="mt-1 inline-block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-span-6 bg-white px-5 pt-5 pb-5 rounded-md">
                            <div class="btn flex justify-between">
                                <h2 class="text-2xl pb-5">Category Table</h2>
                                <div class="">
                                    <a href="{{ route('add-category') }}">
                                        <button type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                                            Category</button>
                                    </a>
                                </div>
                            </div>
                            <div class="relative ">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border">
                                    <thead
                                        class="text-xs border text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Category Id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Category Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $num = 1;
                                        @endphp



                                        @foreach ($category as $item)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $num++ }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $item->category_name }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a
                                                        href="{{ route('edit-category', ['id' => $item->category_id]) }}">
                                                        <button type="button"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                                    </a>
                                                    <a
                                                        href="{{ route('delete-category', ['category_id' => $item->category_id]) }}">
                                                        <button type="button"
                                                            onclick="return confirm('Do you want to delete')"
                                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('datatable')
        <script>
            $(function() {
                $('table').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            })
        </script>
    @endpush
</x-app-layout>
