@extends('frontend.layouts.master')
@section('main')
    @include('frontend.components.top-bar')
    <!----------Recent Project section start here--------->
    <div class="recent-project-section  bg-[#F9F9F9] pt-20 px-5 sm:px-14 md:px-10">
        <div class="recent-text text-center pb-20">
            <h2 class="text-lg font-raleway text-gray-500">WORK OF EXCELLENCE</h2>
            <h2 class="text-3xl font-heading font-bold">RECENT PROJECTS</h2>
        </div>
        <div class="recent-link-section overflow-x-hidden w-fit mx-auto">
            <ul class="flex flex-wrap space-x-2 filter-button-group gap-y-5 font-heading " id="gallery-tab">
                <li data-filter="*" class="active cursor-pointer py-2 px-4 rounded-t  text-sm  font-semibold">
                    Show all
                </li>
                @foreach ($categories as $category)
                    <li data-filter=".{{ str_replace(' ', '_', $category->category_name) }}"
                        class="cursor-pointer py-2 px-4 rounded-t uppercase-sm text-sm  font-bold">
                        {{ $category->category_name }}
                    </li>
                @endforeach
            </ul>
            <div class=" pb-14 px-0">
                <div class="line bg-primary w-full h-1"></div>
            </div>
        </div>

        <div class="gallery recent-image-section mb-14 " id="item">

            @foreach ($galleries as $gallery)
                <div
                    class="grid-item {{ str_replace(' ', '_', $gallery->category->category_name) }} w-full sm:w-6/12 lg:w-4/12 group">
                    <div class="relative overflow-hidden">
                        <img loading="lazy" src="{{ asset($gallery->image) }}" alt=""
                            class="h-[380px] w-full object-cover   group-hover:scale-125 transition-all duration-700 ">
                        <div
                            class="absolute h-full w-full bg-black/60 group-hover:bg-opacity-[0.4]  bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <a href="{{ asset($gallery->image) }}" class="show-image">
                                <ion-icon name="add"
                                    class="text-white  absolute top-0  right-0 text-3xl  bg-primary  cursor-zoom-in">
                                </ion-icon>
                            </a>
                            <div class="absolute inset-y-1/2 group-hover:inset-y-1/3 px-10 mx-auto  duration-300">
                                <h2 class="text-white font-raleway text-xl font-bold uppercase text-limit">
                                    {{ $gallery->title }}
                                </h2>
                                <h2
                                    class="text-white font-raleway text-xs font-bold uppercase bg-primary py-2 px-4 text-center mt-4 inline-block">
                                    {{ $gallery->category->category_name }}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
    <!----------Recent Project section end here--------->
@endsection


@push('gallery-page-js')
    <script>
        // active gallery tab
        $("#gallery-tab li").on('click', function() {
            $(this).addClass('active')
            $(this).siblings().hasClass('active') ? $(this).siblings().removeClass('active') : ""
        })
    </script>
@endpush
