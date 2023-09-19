<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slider') }}
        </h2>
    </x-slot>
    {{-- Toast --}}
    <div class="absolute top-[140px] right-5">
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="main-section">
                <div class="header-section px-5 pt-5 pb-5 flex justify-between">
                    <div class="title">
                        <h2 class="text-2xl pb-5">Slider Table</h2>
                    </div>
                    <div class="btn">
                        <a href="{{route('slider.add')}}"><button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                            Slider</button></a>
                    </div>
                </div>
                <div class="table-section">

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    #Sl
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Sub title
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Image
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Color
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Video link
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl = 1;
            @endphp
            @foreach ($sliders as $slider)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                    {{$sl++}}
                </th>
                <td class="px-6 py-4 text-center">
                    {{$slider->title}}
                </td>
                <td class="px-6 py-4 text-center">
                    {{$slider->sub_title}}
                </td>
                <td class="px-6 py-4 text-center flex justify-center">
                    <img src="{{asset($slider->image)}}" alt="" srcset="" class="w-[100px]">
                </td>
                <td class="px-6 py-4">
                   <div class="flex justify-center">
                    <input type="color" value="{{$slider->color}}" disabled name="color" id="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                   </div>
                </td>
                <td class="px-6 py-4 text-center">
                    {{$slider->video_link}}
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="{{route('slider.edit',['id'=>$slider->id])}}">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
                    </a>
                    <a onclick="return confirm('Do you want to delete ?')" href="{{route('slider.delete', ['id'=>$slider->id])}}">
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
</x-app-layout>
