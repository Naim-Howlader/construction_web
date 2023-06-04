{{-- <!----------Recent Project section start here--------->
<div class="recent-project-section  bg-[#F9F9F9] pt-20 px-5 sm:px-14 md:px-10">
    <div class="recent-text text-center pb-20">
        <h2 class="text-lg font-montserrat text-gray-500">WORK OF EXCELLENCE</h2>
        <h2 class="text-3xl font-montserrat font-bold">RECENT PROJECTS</h2>
    </div>
    <div class="recent-link-section overflow-x-hidden w-fit mx-auto">
        <ul class="flex flex-wrap space-x-4 filter-button-group gap-y-5">
            <li data-filter="*" class="cursor-pointer px-4 uppercase text-sm font-montserrat font-bold">show all</li>
            <li data-filter=".commercial" class="cursor-pointer uppercase text-sm font-montserrat font-bold">commerial
            </li>
            <li data-filter=".educational" class="cursor-pointer uppercase text-sm font-montserrat font-bold">
                educational</li>
            <li data-filter=".government" class="cursor-pointer uppercase text-sm font-montserrat font-bold">
                government</li>
            <li data-filter=".infrastructure" class="cursor-pointer uppercase text-sm font-montserrat font-bold">
                INFRASTRUCTURE</li>
            <li data-filter=".residential" class="cursor-pointer uppercase text-sm font-montserrat font-bold">
                RESIDENTIAL</li>
            <li data-filter=".healthcare" class="cursor-pointer uppercase text-sm font-montserrat font-bold">
                HEALTHCARE</li>
        </ul>
        <div class="pt-5 pb-14 px-0">
            <div class="line bg-primary w-full h-1"></div>
        </div>
    </div>
    <div class="gallery recent-image-section " id="item">
        <div class="grid-item government healthcare w-full sm:w-6/12 lg:w-4/12 group">
            <div class="relative overflow-hidden">
                <a href="{{ asset('image/project1.jpg') }}">
                    <img src="{{ asset('image/project1.jpg') }}" alt=""srcset=""
                        class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                </a>
                <div
                    class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <ion-icon name="add-outline"
                        class="text-white absolute top-0 btn right-0 text-3xl  bg-primary font-bold">
                    </ion-icon>
                    <div class="absolute inset-y-1/3 px-10 mx-auto">

                        <h2 class="text-white font-montserrat text-xl font-bold uppercase">capital teltway building
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

        <div class="grid-item commercial educational infrastructure w-full sm:w-6/12 lg:w-4/12 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/project2.jpg') }}" alt=""srcset=""
                    class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                <div
                    class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <ion-icon name="add-outline"
                        class="text-white absolute top-0 btn
                        right-0 text-3xl bg-primary font-bold btn">
                    </ion-icon>
                    <div class="absolute inset-y-1/3 px-10 mx-auto">

                        <h2 class="text-white font-montserrat text-xl font-bold uppercase">capital teltway building
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

        <div class="grid-item government educational healthcare w-full sm:w-6/12 lg:w-4/12 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/project3.jpg') }}" alt=""srcset=""
                    class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                <div
                    class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <ion-icon name="add-outline"
                        class="text-white btn absolute top-0 right-0 text-3xl  bg-primary font-bold">
                    </ion-icon>
                    <div class="absolute inset-y-1/3 px-10 mx-auto">

                        <h2 class="text-white font-montserrat text-xl font-bold uppercase">capital teltway building
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

        <div class="grid-item residential educational healthcare w-full sm:w-6/12 lg:w-4/12 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/project4.jpg') }}" alt=""srcset=""
                    class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                <div
                    class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <ion-icon name="add-outline"
                        class="text-white absolute btn top-0 right-0 text-3xl  bg-primary font-bold">
                    </ion-icon>
                    <div class="absolute inset-y-1/3 px-10 mx-auto">

                        <h2 class="text-white font-montserrat text-xl font-bold uppercase">capital teltway building
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

        <div class="grid-item government infrastructure w-full sm:w-6/12 lg:w-4/12 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/project5.jpg') }}" alt=""srcset=""
                    class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                <div
                    class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <ion-icon name="add-outline"
                        class="text-white absolute btn top-0 right-0 text-3xl  bg-primary font-bold">
                    </ion-icon>
                    <div class="absolute inset-y-1/3 px-10 mx-auto">

                        <h2 class="text-white font-montserrat text-xl font-bold uppercase">capital teltway building
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

        <div class="grid-item residential infrastructure commercial w-full sm:w-6/12 lg:w-4/12 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('image/project6.jpg') }}" alt=""srcset=""
                    class="h-full w-full object-cover  group-hover:scale-125 transition-all duration-700">
                <div
                    class="absolute h-full w-full bg-black/60  -bottom-40 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <ion-icon name="add-outline"
                        class="text-white absolute top-0 right-0 text-3xl  bg-primary font-bold">
                    </ion-icon>
                    <div class="absolute inset-y-1/3 px-10 mx-auto">

                        <h2 class="text-white font-montserrat text-xl font-bold uppercase">capital teltway building
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


    </div>
    <div class="recent-button-section pt-10 pb-14 mx-auto w-fit">
        <button class="font-montserrat text-base rounded text-white bg-primary px-5 py-2 font-bold uppercase">view all
            projects</button>
    </div>
</div>
<!----------Recent Project section end here---------> --}}
