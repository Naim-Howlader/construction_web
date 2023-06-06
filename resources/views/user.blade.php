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
                            <div>
                                <div class="flex justify-end">
                                   <a href="{{route('register')}}">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add User</button></a>
                                </div>
                                <div class="relative overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                   #SL
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    User Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    User Email
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
                                            @foreach ($users as $item)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{$num++}}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{$item->name}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{$item->email}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a onclick="return confirm('do your want do delete?')" href="{{route('user.delete', ['id' => $item->id])}}"class="mt-1 inline-block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="col-span-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
