<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                   <div class="main-section grid grid-cols-12 p-6 text-gray-900 space-x-5">
                    <div class="col-span-6 bg-white px-5 pt-5 pb-5 rounded-md">
                        <div class="btn flex justify-between">
                            <h2 class="text-2xl pb-5">Image Gallery Table</h2>
                            <div class="">
                                <a href="{{route('add-gallery')}}">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Project</button>
                                </a>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto">
                            
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400  border-2">
                                <thead class="text-xs border text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                    
                                    
                                    @foreach ($gallery as $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                           
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->title}}
                                        </td>
                                        <td class="px-6 py-4">
                                            
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="">
                                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                            </a>
                                            <a href="">
                                                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
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
                                <a href="{{route('add-category')}}">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Category</button>
                                </a>
                            </div>
                        </div>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border">
                                <thead class="text-xs border text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$num++}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->category_name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{route('edit-category', ['id'=>$item->category_id])}}">
                                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                                            </a>
                                            <a href="{{route('delete-category',['category_id'=>$item->category_id])}}">
                                                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
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
</x-app-layout>
