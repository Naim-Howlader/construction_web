@extends('frontend.layouts.master')
@section('main')
    @include('frontend.components.top-bar')
    <div class="main-section px-5 sm:px-20 lg:px-14 lg:grid lg:grid-cols-12 lg:pt-20 lg:space-x-10">
        <div class="post-section pt-14 lg:pt-0 lg:col-span-8">
            @foreach ($news as $item)
                <div class="image">

                    <img src="{{ asset($item->image) }}" alt="" srcset="">

                </div>
                <div class="icon flex py-5 text-gray-500 text-sm space-x-3">
                    <div class="single-icon flex">
                        <span class="material-symbols-outlined">
                            shield_person
                        </span>
                        <p class="text-base">Admin</p>
                    </div>
                    <div class="single-icon flex">
                        <span class="material-symbols-outlined">
                            feed
                        </span>
                        <p class="text-base">News</p>
                    </div>
                    <div class="single-icon flex">
                        <span class="material-symbols-outlined">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </span>
                        <p class="text-base">{{ date('M d,Y', strtotime($item->created_at)) }}</p>
                    </div>
                </div>
                <div class="text">

                    <h2 class="text-3xl pb-5 font-bold">{{ $item->title }}</h2>


                    <p class="pb-10 text-limit-4">{!! $item->description !!}</p>
                    <div class="mb-10">
                        <a href="{{ route('common.news', ['id' => $item->news_id]) }}"
                            class="text-white uppercase bg-primary hover:bg-black focus:ring-4 focus:ring-red-300 font-medium  text-sm px-5 py-2.5 mr-2 mb-2 dark:primary dark:hover:primary focus:outline-none dark:focus:ring-primary">Continue
                            reading</a>
                    </div>

                </div>
            @endforeach
            <div class="pb-20">
                {{ $news->links() }}
            </div>
        </div>
        <div class="sidebar-section px-2 lg:col-span-4">
            <div class="recent-post">
                <div class="flex gap-x-5 pb-5">
                    <div class="w-1 h-7 bg-primary"></div>
                    <h2 class="text-xl font-semibold">RECENT POSTS</h2>
                </div>
                @foreach ($news2 as $item)
                    <a href="{{ route('common.news', ['id' => $item->news_id]) }}">
                        <div class="single-post flex justify-center gap-x-4 pb-5">
                            <img src="{{ asset($item->image) }}" alt="" srcset="" class="w-32">
                            <h2 class="font-normal hover:text-primary hover:cursor-pointer transition-all duration-200">
                                {{ $item->title }}</h2>
                        </div>
                    </a>
                    <div class="w-full h-px bg-gray-400 mb-10"></div>
                @endforeach

            </div>
            <div class="category pt-10">
                <div class="flex gap-x-5 pb-5">
                    <div class="w-1 h-7 bg-primary"></div>
                    <h2 class="text-xl font-semibold">CATEGORY</h2>
                </div>
                @foreach ($newscat as $item)
                    <div class="single-post ">
                        <h2 class="pb-2 text-medium hover:text-primary hover:cursor-pointer transition-all duration-200">
                            {{ $item->category_name }}</h2>
                        <div class="w-full h-px bg-gray-400 mb-5"></div>
                    </div>
                @endforeach

            </div>
            <div class="archives pt-10">
                <div class="flex gap-x-5 pt-5 pb-5">
                    <div class="w-1 h-7 bg-primary"></div>
                    <h2 class="text-xl font-semibold">Archive</h2>
                </div>
                <div class="single-post ">
                    <h2 class="pb-2 text-medium">January 2023</h2>
                    <div class="w-full h-px bg-gray-400 mb-5"></div>
                </div>
                <div class="single-post ">
                    <h2 class="pb-2 text-medium">February 2023</h2>
                    <div class="w-full h-px bg-gray-400 mb-5"></div>
                </div>
                <div class="single-post ">
                    <h2 class="pb-2  text-medium">March 2023</h2>
                    <div class="w-full h-px bg-gray-400 mb-5"></div>
                </div>
                <div class="single-post ">
                    <h2 class="pb-2  text-medium">April 2023</h2>
                    <div class="w-full h-px bg-gray-400 mb-5"></div>
                </div>
                <div class="single-post ">
                    <h2 class="pb-2  text-medium">Mey 2023</h2>
                    <div class="w-full h-px bg-gray-400 mb-5"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
