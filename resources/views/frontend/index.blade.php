@extends('frontend.layouts.master')
@section('main')
    {{-- hero section starts  --}}
    <section class="mb-4 owl-carousel" id="hero-section">
        @for ($i = 0; $i < 3; $i++)
            <div
                class="item z-5 py-10 bg-[url('https://assets-us-01.kc-usercontent.com/fa776f1a-4d27-4a6b-ae1c-2ce928f9647d/9cd8ea0f-679b-4ed3-a238-3ee8a3c5ea98/construction-site-Cropped2.jpg')] bg-cover bg-center bg-no-repeat relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-black before:opacity-[0.4] before:z-0">
                <div class="px-5 max-w-[1200px] mx-auto z-10 relative select-none">
                    <div class="flex flex-col items-center justify-center md:items-start uppercase min-h-screen">
                        <h6
                            class="font-heading font-bold text-white text-md w-full my-4  relative md:left-16 before:hidden md:before:inline-block before:absolute before:content-[''] before:-left-14 before:top-[45%] before:h-1 before:w-12 before:bg-primary">
                            Hand car wash and dealing service</h6>
                        <h1
                            class="text-4xl sm:text-6xl md:text-[90px] lg:text-[120px] font-black font-heading md:px-10 text-[#ff0000] z-5 leading-[-1]">
                            Advanced
                        </h1>
                        <div
                            class="water-effect lg:text-end md:w-full text-4xl h-[2.5rem] sm:text-6xl sm:h-[4.75rem] md:h-[90px] md:text-[90px] lg:h-[120px] lg:text-[120px] font-black font-heading  md:px-10 outline-2 outline-[#e74c3c] z-5">
                            <h1 class="stroke-2 w-full">
                                Construction
                            </h1>
                            <h1 class=" w-full">
                                Construction
                            </h1>
                        </div>
                        <a href="#">
                            <h6
                                class="font-heading font-bold text-white text-md w-full my-4  relative md:left-16 before:hidden md:before:inline-block before:absolute before:content-[''] before:-left-14 before:top-[45%] before:h-1 before:w-12 before:bg-primary ">
                                Our services</h6>
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </section>
    {{-- hero section ends --}}
    <div class="about-section px-5 sm:px-20 md:px-14 lg:px-20 lg:grid grid-cols-12 py-12">
        <div class="about-main lg:col-span-6 lg:pr-5">
            <h3 class="uppercase mt-3 text-lg text-gray-600 font-montserrat">about us</h3>
            <h1 class="uppercase text-3xl font-extrabold mt-3 font-montserrat">we delivered landmark projects</h1>
            <p class="mt-3 leading-7 text-gray-600 text-base">We are rethoric question ran over her cheek When she reached
                the first hills
                of the
                Italic
                Mountains, she had
                a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                subline of her own road, the Line Lane.</p>
            <div class="icon-group mt-8">
                <ul>
                    <div class="md:flex justify-around">
                        <div class="space-y-3 md:space-y-8 md:pr-5">
                            <li class="flex items-center">
                                <ion-icon name="trophy" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold font-montserrat">WE'VE REPUTION FOR EXCELLENCE</span>
                            </li>
                            <li class="flex items-center pb-3 md:pb-0">
                                <ion-icon name="reorder-three-outline" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold font-montserrat">WE BUILD PARTNERSHIPS</span>
                            </li>
                        </div>

                        <div class="space-y-3 md:space-y-8 md:pl-5">
                            <li class="flex items-center">
                                <ion-icon name="thumbs-up" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold font-montserrat">GUIDED BY COMMITMENT</span>
                            </li>
                            <li class="flex items-center">
                                <ion-icon name="people" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold font-montserrat">A TEAM OF PROFESSIONALS</span>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="value lg:col-span-6 lg:pl-5">
            <h1 class="uppercase text-3xl font-extrabold mt-14 font-montserrat">Our values</h1>
            <p class="mt-3 leading-7 text-gray-600 text-base">Minim Austin 3 wolf moon scenester aesthetic, umami odio
                pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>
            <div class="accordion-section pt-5 pb-20">

                <div id="accordion-collapse" data-accordion="collapse" class="space-y-2">
                    <div class="">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border  border-gray-300 "
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="uppercase font-montserrat font-bold text-md">Safety</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0 bg-black rounded-sm text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border  border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidata</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border  border-gray-300 "
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span class="uppercase font-montserrat font-bold text-md">customer service</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0 bg-black rounded-sm text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border  border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidata</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-300 "
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span class="uppercase font-montserrat font-bold text-md">intigrity</span>
                                <svg data-accordion-icon class="w-6 h-6 shrink-0 bg-black rounded-sm text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidata</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-------------------I have work in this section-------------------->
    <div class="counter-section bg-[#252525] px-5">
        <div class="items space-y-10 md:space-y-0 py-20 md:flex md:justify-center">

            <div class="sm:flex sm:justify-center space-y-10 sm:space-y-0  md:gap-x-10 lg:gap-x-24">
                <div class="flex sm:pr-14 md:pr-0">
                    <div class="single-item mx-auto flex flex-col space-y-4">
                        <ion-icon name="home-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-montserrat font-bold mx-auto">4252</h2>
                        <h2 class="uppercase text-lg font-bold  font-montserrat text-primary mx-auto">total
                            project
                        </h2>
                    </div>
                </div>

                <div class="flex sm:pl-14 md:pl-0">
                    <div class="single-item mx-auto flex flex-col space-y-4 md:pr-5 lg:pr-12">
                        <ion-icon name="person-circle-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-montserrat font-bold mx-auto">582</h2>
                        <h2 class="uppercase font-bold text-lg  font-montserrat text-primary mx-auto">staff
                            members</h2>
                    </div>
                </div>
            </div>

            <div class="sm:flex sm:justify-center space-y-10 sm:space-y-0 md:gap-x-10 lg:gap-x-24">
                <div class="flex sm:pr-14 md:pr-0">
                    <div class="single-item mx-auto flex flex-col space-y-4 md:pl-5 lg:pl-12">
                        <ion-icon name="time-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-montserrat font-bold mx-auto">4000</h2>
                        <h2 class="uppercase font-bold text-lg  font-montserrat text-primary mx-auto">hours of
                            work</h2>
                    </div>
                </div>

                <div class="flex sm:pl-14 md:pl-0">
                    <div class="single-item mx-auto flex flex-col space-y-4">
                        <ion-icon name="globe-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-montserrat font-bold mx-auto">65</h2>
                        <h2 class="uppercase font-bold text-lg  font-montserrat text-primary mx-auto">
                            total projects</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------Specialists Section start here------------------->
    <div class="specialists-section px-5 sm:px-20 md:px-14 lg:px-20">
        <div class="specialists-text text-center py-14">
            <h2 class="text-lg font-light font-montserrat">WE ARE SPECIALISTS IN</h2>
            <h2 class="text-3xl font-extrabold font-montserrat">WHAT WE DO</h2>
        </div>
        <div class="specialists-content lg:grid lg:grid-cols-12">
            <div class="content-grp-1 space-y-12 lg:col-span-4">
                <div class="single-item flex space-x-8">
                    <div class="single-item-icon">
                        <ion-icon name="business-outline" class="text-6xl text-primary"></ion-icon>
                    </div>
                    <div class="single-item-text">
                        <h2 class="text-base font-bold font-montserrat pb-1">HOME CONSTRUCTION</h2>
                        <p class="text-[15px] text-gray-600 font-normal font-montserrat">Lorem ipsum dolor sit amet
                            consectetur
                            adipiscing
                            elit Integer
                            adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                    </div>
                </div>
                <div class="single-item flex space-x-8">
                    <div class="single-item-icon">
                        <ion-icon name="settings-outline" class="text-6xl text-primary"></ion-icon>
                    </div>
                    <div class="single-item-text">
                        <h2 class="text-base font-bold font-montserrat pb-1">BUILDING REMODELS</h2>
                        <p class="text-[15px] text-gray-600 font-normal font-montserrat">Lorem ipsum dolor sit amet
                            consectetur
                            adipiscing
                            elit Integer
                            adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                    </div>
                </div>
                <div class="single-item flex space-x-8">
                    <div class="single-item-icon">
                        <span class="material-symbols-outlined text-6xl text-primary">
                            design_services
                        </span>
                    </div>
                    <div class="single-item-text">
                        <h2 class="text-base font-bold font-montserrat pb-1">INTERIOR DESIGN</h2>
                        <p class="text-[15px] text-gray-600 font-normal font-montserrat">Lorem ipsum dolor sit amet
                            consectetur
                            adipiscing
                            elit Integer
                            adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                    </div>
                </div>
            </div>
            <div class="content-grp-2 lg:col-span-4">
                <img src="{{ asset('image/service-center.jpg') }}" alt="" srcset=""
                    class="pt-14 lg:pt-0 pb-10">
            </div>
            <div class="content-grp-3 lg:col-span-4 space-y-12 pb-20">
                <div class="single-item flex space-x-8">
                    <div class="single-item-icon">
                        <span class="material-symbols-outlined text-6xl text-primary">
                            architecture
                        </span>
                    </div>
                    <div class="single-item-text">
                        <h2 class="text-base font-bold font-montserrat pb-1">HOME CONSTRUCTION</h2>
                        <p class="text-[15px] text-gray-600 font-normal font-montserrat">Lorem ipsum dolor sit amet
                            consectetur
                            adipiscing
                            elit Integer
                            adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                    </div>
                </div>
                <div class="single-item flex space-x-8">
                    <div class="single-item-icon">
                        <span class="material-symbols-outlined text-6xl text-primary">
                            front_loader
                        </span>
                    </div>
                    <div class="single-item-text">
                        <h2 class="text-base font-bold font-montserrat pb-1">BUILDING REMODELS</h2>
                        <p class="text-[15px] text-gray-600 font-normal font-montserrat">Lorem ipsum dolor sit amet
                            consectetur
                            adipiscing
                            elit Integer
                            adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                    </div>
                </div>
                <div class="single-item flex space-x-8">
                    <div class="single-item-icon">
                        <span class="material-symbols-outlined text-6xl text-primary">
                            engineering
                        </span>
                    </div>
                    <div class="single-item-text">
                        <h2 class="text-base font-bold font-montserrat pb-1">INTERIOR DESIGN</h2>
                        <p class="text-[15px] text-gray-600 font-normal font-montserrat">Lorem ipsum dolor sit amet
                            consectetur
                            adipiscing
                            elit Integer
                            adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------Specialists Section end here------------------->
    <!----------Recent Project section start here--------->
    <div class="recent-project-section  bg-[#F9F9F9] pt-20 px-5 sm:px-14 md:px-10">
        <div class="recent-text text-center pb-20">
            <h2 class="text-lg font-montserrat text-gray-500">WORK OF EXCELLENCE</h2>
            <h2 class="text-3xl font-montserrat font-bold">RECENT PROJECTS</h2>
        </div>
        <div class="recent-link-section overflow-x-hidden w-fit mx-auto">
            <ul class="flex flex-wrap space-x-2 filter-button-group gap-y-5" id="gallery-tab">
                <li data-filter="*"
                    class="active cursor-pointer py-2 px-4 rounded-t uppercase text-sm font-montserrat font-bold">
                    show all
                </li>
                @foreach ($categories as $category)
                    <li data-filter=".{{ str_replace(' ', '_', $category->category_name) }}"
                        class="cursor-pointer py-2 px-4 rounded-t uppercase-sm text-sm font-montserrat font-bold">
                        {{ $category->category_name }}
                    </li>
                @endforeach
            </ul>
            <div class=" pb-14 px-0">
                <div class="line bg-primary w-full h-1"></div>
            </div>
        </div>

        <div class="gallery recent-image-section " id="item">

            @foreach ($galleries as $gallery)
                <div
                    class="grid-item {{ str_replace(' ', '_', $gallery->category->category_name) }} w-full sm:w-6/12 lg:w-4/12 group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset($gallery->image) }}" alt=""
                            class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                        <div
                            class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <a href="{{ asset($gallery->image) }}" class="show-image">
                                <ion-icon name="add-outline"
                                    class="text-white  absolute top-0  right-0 text-3xl  bg-primary font-bold">
                                </ion-icon>
                            </a>
                            <div class="absolute inset-y-1/3 px-10 mx-auto">

                                <h2 class="text-white font-montserrat text-xl font-bold uppercase">
                                    {{ $gallery->title }}
                                </h2>
                                <h2
                                    class="text-white font-montserrat text-xs font-bold uppercase bg-primary w-44 py-2 text-center mt-4">
                                    commercial
                                    interior
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
    <div class="recent-button-section pt-10 pb-14 mx-auto w-fit block">
        <a href="#"
            class="uppercase font-montserrat focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">view
            all
            projects</a>
    </div>
    </div>
    <!----------Recent Project section end here--------->
@endsection


@push('hero-section-js')
    <script>
        $('#hero-section').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'fadeIn',
            items: 1,
            margin: 0,
            nav: false,
            dots: false,
            loop: true,
            smartSpeed: 450
        });
        $("#gallery-tab li").on('click', function() {
            $(this).addClass('active')
            $(this).siblings().hasClass('active') ? $(this).siblings().removeClass('active') : ""
        })
    </script>
@endpush
