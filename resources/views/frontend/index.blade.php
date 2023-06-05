@extends('frontend.layouts.master')
@section('main')
    {{-- hero section starts  --}}
    <section class="mb-4 owl-carousel" id="hero-section">
        @for ($i = 0; $i < 3; $i++)
            <div
                class="item z-5 py-10 bg-[url('https://assets-us-01.kc-usercontent.com/fa776f1a-4d27-4a6b-ae1c-2ce928f9647d/9cd8ea0f-679b-4ed3-a238-3ee8a3c5ea98/construction-site-Cropped2.jpg')] bg-cover bg-center bg-no-repeat relative before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-black before:opacity-[0.4] before:z-0">
                <div class="px-5 max-w-[1280px] mx-auto z-10 relative select-none ">
                    <div class="flex flex-col items-center justify-center md:items-start uppercase min-h-screen">
                        <a>
                            <h6
                                class="font-raleway font-bold text-white text-md w-full my-4  relative md:left-16 before:hidden md:before:inline-block before:absolute before:content-[''] before:-left-14 before:top-[45%] before:h-1 before:w-12 before:bg-primary ">
                                Car Was and dealing service</h6>
                        </a>
                        <h1 class="text-4xl sm:text-6xl md:text-[80px] lg:text-[120px] font-black font-raleway md:px-10 text-[#ff0000] z-5 leading-[-1] "
                            style="-webkit-text-stroke: 2px">
                            Advanced
                        </h1>
                        <div
                            class="water-effect text-center lg:text-end w-full text-4xl h-[20px] sm:text-6xl sm:h-[40px] md:h-[80px] md:text-[80px] lg:h-[120px] lg:text-[120px] font-black font-raleway  md:px-10 outline-2 outline-[#e74c3c] z-5">
                            <h1 class="stroke-2 lg:w-full left-0 md:right-0">
                                Construction
                            </h1>
                            <h1 class=" lg:w-full left-0 md:right-0">
                                Construction
                            </h1>
                        </div>
                        <a href="#" class="inline-block  mb-4 mt-8">
                            <h6
                                class="font-raleway font-bold text-white text-md w-full relative md:left-16 before:hidden md:before:inline-block before:absolute before:content-[''] before:-left-14 before:top-[45%] before:h-1 before:w-12 before:bg-primary ">
                                Our services</h6>
                        </a>
                        <div class="w-full text-center absolute bottom-10">
                            <a href="https://www.youtube.com/watch?v=FQPlEnKav48&t=58s&pp=ygUSYmVzdCB3ZWIgZnJhbWV3b3Jr"
                                class="play-video">
                                <label
                                    class="text-2xl text-white p-4 inline-flex items-center justify-center bg-primary rounded-full button">
                                    <ion-icon name="play"></ion-icon>

                                    <span></span>
                                    <span></span>
                                </label>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @endfor
    </section>
    {{-- hero section ends --}}
    <div class=" px-5 sm:px-20 md:px-14 max-w-[1280px] mx-auto lg:grid grid-cols-12 py-12" id="about">
        <div class="about-main lg:col-span-6 lg:pr-5 ">
            <h3 class="uppercase mt-3 text-lg text-gray-600 font-raleway">about us</h3>
            <h1 class="uppercase text-3xl font-extrabold mt-3 font-heading">we delivered landmark projects</h1>
            <p class="mt-3 leading-7 text-gray-600 text-justify ">We are rethoric question ran over her cheek
                When
                she reached
                the first hills
                of the
                Italic
                Mountains, she had
                a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                subline of her own road, the Line Lane.</p>
            <div class="icon-group mt-8">
                <ul class="font-heading">
                    <div class="md:flex justify-around">
                        <div class="space-y-3 md:space-y-8 md:pr-5">
                            <li class="flex items-center">
                                <ion-icon name="trophy" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base  font-bold">WE'VE REPUTION FOR
                                    EXCELLENCE</span>
                            </li>
                            <li class="flex items-center pb-3 md:pb-0">
                                <ion-icon name="reorder-three-outline" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold">WE BUILD PARTNERSHIPS</span>
                            </li>
                        </div>

                        <div class="space-y-3 md:space-y-8 md:pl-5">
                            <li class="flex items-center">
                                <ion-icon name="thumbs-up" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold ">GUIDED BY COMMITMENT</span>
                            </li>
                            <li class="flex items-center">
                                <ion-icon name="people" class="text-5xl text-primary"></ion-icon><span
                                    class="pl-4 text-base font-bold ">A TEAM OF PROFESSIONALS</span>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="value lg:col-span-6 lg:pl-5">
            <h1 class="uppercase text-3xl font-extrabold mt-14 font-heading">Our values</h1>
            <p class="mt-3 leading-7 text-gray-600 text-base">Minim Austin 3 wolf moon scenester aesthetic, umami odio
                pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>
            <div class="accordion-section pt-5 pb-20">

                <div id="accordion-collapse" data-accordion="collapse" class="space-y-2">
                    <div class="accordion">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left  border text-black border-gray-200 rounded-t"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="uppercase font-heading font-bold font text-md">Safety</span>
                                <svg data-accordion-icon
                                    class="w-6 h-6 duration-[0.3s] rotate-180 shrink-0 bg-primary rounded-sm text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="custom-accordion-collapse-body-1" class=""
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border  border-gray-200 rounded-b">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidata</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border  border-gray-200 rounded-t"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span class="uppercase font-heading font-bold text-md">customer service</span>
                                <svg data-accordion-icon
                                    class="w-6 h-6 duration-[0.3s] rotate-180 shrink-0 bg-black rounded-sm text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="custom-accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border  border-gray-200 rounded-b">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Anim pariatur cliche reprehenderit, enim
                                    eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                    cupidata</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 rounded-t"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span class="uppercase font-heading font-bold text-md">intigrity</span>
                                <svg data-accordion-icon
                                    class="w-6 h-6 duration-[0.3s] rotate-180 shrink-0 bg-black rounded-sm text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="custom-accordion-collapse-body-3" class="hidden"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-t-0 border-gray-200 rounded-b">
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
    <div class="counter-section bg-[#252525] ">
        <div class="items space-y-10 md:space-y-0 py-10 md:flex md:justify-center">

            <div class="sm:flex sm:justify-center space-y-10 sm:space-y-0  md:gap-x-10 lg:gap-x-24">
                <div class="flex sm:pr-14 md:pr-0">
                    <div class="single-item mx-auto flex flex-col space-y-4">
                        <ion-icon name="home-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl  font-bold mx-auto">4252</h2>
                        <h2 class="uppercase text-lg font-bold  font-raleway text-primary mx-auto">total
                            project
                        </h2>
                    </div>
                </div>

                <div class="flex sm:pl-14 md:pl-0">
                    <div class="single-item mx-auto flex flex-col space-y-4 md:pr-5 lg:pr-12">
                        <ion-icon name="person-circle-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-bold mx-auto">582</h2>
                        <h2 class="uppercase font-bold text-lg  font-raleway text-primary mx-auto">staff
                            members</h2>
                    </div>
                </div>
            </div>

            <div class="sm:flex sm:justify-center space-y-10 sm:space-y-0 md:gap-x-10 lg:gap-x-24">
                <div class="flex sm:pr-14 md:pr-0">
                    <div class="single-item mx-auto flex flex-col space-y-4 md:pl-5 lg:pl-12">
                        <ion-icon name="time-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-bold mx-auto">4000</h2>
                        <h2 class="uppercase font-bold text-lg  font-raleway text-primary mx-auto">hours of
                            work</h2>
                    </div>
                </div>

                <div class="flex sm:pl-14 md:pl-0">
                    <div class="single-item mx-auto flex flex-col space-y-4">
                        <ion-icon name="globe-outline" class="text-primary text-7xl mx-auto"></ion-icon>
                        <h2 class="counter text-white text-5xl font-bold mx-auto">65</h2>
                        <h2 class="uppercase font-bold text-lg  font-raleway text-primary mx-auto">
                            total projects</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------Specialists Section start here------------------->
    <section class="specialists-section max-w-[1280px] mx-auto">
        <div class=" px-5 sm:px-20 md:px-14">
            <div class="specialists-text text-center py-14">
                <h2 class="text-lg font-light font-raleway">WE ARE SPECIALISTS IN</h2>
                <h2 class="text-4xl font-extrabold font-heading">WHAT WE DO</h2>
            </div>
            <div class="specialists-content lg:grid lg:grid-cols-12 lg:items-end">
                <div class="content-grp-1 space-y-12 lg:col-span-4 pb-20">
                    <div class="single-item flex space-x-8">
                        <div class="single-item-icon">
                            <ion-icon name="business-outline" class="text-6xl text-primary"></ion-icon>
                        </div>
                        <div class="single-item-text">
                            <h2 class="text-base font-bold font-raleway pb-1">HOME CONSTRUCTION</h2>
                            <p class="text-[15px] text-gray-600 font-normal font-raleway">Lorem ipsum dolor sit amet
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
                            <h2 class="text-base font-bold font-raleway pb-1">BUILDING REMODELS</h2>
                            <p class="text-[15px] text-gray-600 font-normal font-raleway">Lorem ipsum dolor sit amet
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
                            <h2 class="text-base font-bold font-raleway pb-1">INTERIOR DESIGN</h2>
                            <p class="text-[15px] text-gray-600 font-normal font-raleway">Lorem ipsum dolor sit amet
                                consectetur
                                adipiscing
                                elit Integer
                                adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                        </div>
                    </div>
                </div>
                <div class="content-grp-2 lg:col-span-4 pb-10 lg:pb-0">
                    <img loading="lazy" src="{{ asset('image/service-center.jpg') }}" alt=""
                        class="pt-14 max-w-[350px] mx-auto lg:pt-0 ">
                </div>
                <div class="content-grp-3 lg:col-span-4 space-y-12 pb-20">
                    <div class="single-item flex space-x-8">
                        <div class="single-item-icon">
                            <span class="material-symbols-outlined text-6xl text-primary">
                                architecture
                            </span>
                        </div>
                        <div class="single-item-text">
                            <h2 class="text-base font-bold font-raleway pb-1">HOME CONSTRUCTION</h2>
                            <p class="text-[15px] text-gray-600 font-normal font-raleway">Lorem ipsum dolor sit amet
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
                            <h2 class="text-base font-bold font-raleway pb-1">BUILDING REMODELS</h2>
                            <p class="text-[15px] text-gray-600 font-normal font-raleway">Lorem ipsum dolor sit amet
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
                            <h2 class="text-base font-bold font-raleway pb-1">INTERIOR DESIGN</h2>
                            <p class="text-[15px] text-gray-600 font-normal font-raleway">Lorem ipsum dolor sit amet
                                consectetur
                                adipiscing
                                elit Integer
                                adipiscing erat Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------Specialists Section end here------------------->
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

        <div class="gallery recent-image-section " id="item">

            @foreach ($galleries as $gallery)
                <div
                    class="grid-item {{ str_replace(' ', '_', $gallery->category->category_name) }} w-full sm:w-6/12 lg:w-4/12 group">
                    <div class="relative overflow-hidden">
                        <img loading="lazy" src="{{ asset($gallery->image) }}" alt=""
                            class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700 ">
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
        <div class="recent-button-section pt-10 pb-14 mx-auto w-fit block">
            <a href="#"
                class=" font-raleway focus:outline-none text-white bg-primary hover:bg-black duration-150 focus:ring-2 ring-offset-2 focus:ring-red-300  rounded-md text-sm px-5 py-4 mr-2 mb-2 uppercase font-bold">View
                all
                projects</a>
        </div>

    </div>


    <!----------Recent Project section end here--------->

    {{-- /* ------------------------------- client area ------------------------------ */ --}}
    <section class="client-section p-5 sm:p-20 md:p-14 ">
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col md:flex-row gap-y-8">
                <div class=" basis-full md:basis-[50%]  p-4 md:p-8">
                    <h4 class="text-2xl font-raleway uppercase font-bold text-center md:text-left">
                        TESTIMONIALS
                    </h4>
                    <div class="owl-carousel max-w-[400px] " id="client-carousel">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex flex-col">
                                <div class="my-8 flex gap-4 ">
                                    <blockquote class=" italic font-semibold text-gray-900 dark:text-white  ">
                                        <svg aria-hidden="true" class="w-14 h-14 text-gray-400 dark:text-gray-600"
                                            viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                                fill="currentColor" />
                                        </svg>

                                    </blockquote>
                                    <i class="text-sm font-raleway  leading-relaxed ">"Flowbite is just awesome. It
                                        contains tons of predesigned components and pages starting from
                                        login screen to complex dashboard. Perfect choice for your next SaaS
                                        application."</i>
                                </div>

                                <div class="gap-4 mt-12 mx-auto">
                                    <div class="flex items-center space-x-4 font-raleway">
                                        <img loading="lazy" class="w-18 h-18 max-w-[4.5rem] rounded-md"
                                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="">
                                        <div class="font-semibold text-primary">
                                            <div>Jese Leos</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Director, AKT</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class=" basis-full md:basis-[50%] p-4 md:p-8">
                    <h4 class="text-2xl font-raleway uppercase font-bold text-center md:text-left">
                        Happy Client
                    </h4>
                    <div class="grid grid-flow-row grid-cols-2  md:grid-cols-1 lg:grid-cols-3 gap-4 mt-12">
                        @for ($i = 0; $i < 9; $i++)
                            <div class="ring-1 ring-gray-300 h-20 p-3 place-content-center">
                                <img loading="lazy"
                                    src="https://static.vecteezy.com/system/resources/previews/007/794/715/original/construction-logo-template-suitable-for-construction-company-brand-format-and-easy-to-edit-free-vector.jpg"
                                    class="h-12 object-contain w-full grayscale" alt="">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- /* ------------------------------- client area ------------------------------ */ --}}

    {{-- news letter section --}}
    <section class="news-letter-section  bg-primary overflow-x-hidden w-full mb-12">
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col md:flex-row  justify-center">
                <div class="basis-full md:basis-[30%] font-bold font-raleway text-center py-7">
                    <h4 class="text-xl">CAN WE HELP?</h4>
                    <h4 class="text-2xl text-white">(+9) 847-291-4353</h4>
                </div>
                <div
                    class="basis-full mx-auto md:basis-[70%] w-full md:w-auto max-w-[500px] md:max-w-none font-raleway  text-white bg-black relative after:content-[''] after:absolute after:w-0 md:after:w-full after:h-full after:left-full after:bg-black after:top-0 opacity-1 md:after:opacity-1 py-7">
                    <div class="flex flex-col lg:flex-row items-center justify-center">
                        <div class="basis-full lg:basis-[50%]  p-4 md:px-8 lg:px-12">
                            <h4 class="text-2xl font-bold">NEWSLETTER SIGN-UP</h4>
                            <p class="text-sm">Latest updates and news</p>
                        </div>
                        <div class="basis-full lg:basis-[50%]  font-raleway text-center px-4 ">
                            <form action="" method="post">
                                <input type="text"
                                    class="p-3 bg-black w-full ring-1 ring-slate-600 focus:ring-slate-500 outline-none border-none focus:bg-white focus:text-black"
                                    placeholder="your email here and hit enter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- news letter section --}}

    {{-- news section  --}}
    <section class="news-secction max-w-[1280px] mx-auto">
        <div class=" px-5 sm:px-20 md:px-14">
            <div class="news-text text-center py-10">
                <h2 class="text-lg font-raleway">WORK OF EXCELLENCE</h2>
                <h2 class="text-3xl pt-2 font-bold font-heading">RECENT PROJECTS</h2>
            </div>
            <div class="news-image-section space-y-10 pb-14 md:grid md:grid-cols-12 md:space-y-0 md:gap-x-5 md:gap-y-10 ">

                @for ($i = 0; $i < 3; $i++)
                    <div class="single-item md:col-span-6 lg:col-span-4 group overflow-hidden">
                        <a href="">
                            <img loading="lazy" src="{{ asset('image/news2.jpg') }}"
                                class="object-cover opacity-[0.7] group-hover:scale-110 group-hover:opacity-100  duration-200"
                                alt="" srcset="">
                            <h2
                                class="pt-5 pb-1 text-lg font-semibold font-raleway group-hover:text-primary transition-all duration-300 text-limit">
                                WE JUST COMPLETES $17.6 MILLION
                                MEDICAL CLINIC IN MID-MISSOURI
                                MEDICAL CLINIC IN MID-MISSOURI
                            </h2>
                            <h2 class="font-raleway text-sm text-gray-600 opacity-100 duration-200 group-hover:opacity-0">
                                JULY 20, 2017</h2>
                        </a>
                    </div>
                @endfor


            </div>
            <div class="news-btn-section flex justify-center pb-14">

                <a href="#"
                    class=" font-raleway focus:outline-none text-white bg-primary hover:bg-black duration-150 focus:ring-2 ring-offset-2 focus:ring-red-300 font-bold rounded-md text-sm px-5 py-4 mr-2 mb-2 uppercase">View
                    all
                    posts</a>
            </div>
        </div>
    </section>
    {{-- news section --}}
@endsection


@push('home-page-js')
    <script>
        // hero section slider
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

        // active gallery tab
        $("#gallery-tab li").on('click', function() {
            $(this).addClass('active')
            $(this).siblings().hasClass('active') ? $(this).siblings().removeClass('active') : ""
        })
        // video popup
        $('.play-video').magnificPopup({
            type: 'iframe',
            preloader: true,
            removalDelay: 300,
            mainClass: 'mfp-fade',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close "></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>',

                patterns: {
                    youtube: {
                        index: 'youtube.com/',

                        id: 'v=',

                        src: 'https://www.youtube.com/embed/FQPlEnKav48'
                    },
                }
            }
        });
        // client-carousel
        $('#client-carousel').owlCarousel({

            items: 1,
            margin: 0,
            nav: false,
            dots: true,
            loop: false,
            smartSpeed: 450
        });

        // accordion
        let i = 0;
        $('.accordion').each(function(index, item) {
            $(this).addClass('duration-[0.5s]')
            // i += 1
            $(this).find(`#accordion-collapse-heading-${index+=1}`).on('click', function(e) {
                $(this).find("button").toggleClass('text-black text-gray-500')
                $(`#custom-accordion-collapse-body-${index}`).toggle("3000")
                $(this).find('svg').toggleClass("rotate-180 bg-black bg-primary")
            })
        })
    </script>
@endpush
