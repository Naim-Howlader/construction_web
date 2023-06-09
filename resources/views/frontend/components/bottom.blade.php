{{-- footer section --}}
<section class="footer-section p-10 lg:py-20 bg-black">
    <div
        class="max-w-[1280px] mx-auto grid grid-cols-12  grid-flow-row items-start space-y-5 md:space-y-0 text-gray-300 gap-5">
        <div class="col-span-12 lg:col-span-4 p-4">
            <div
                class="title w-full relative before:absolute before:conent-[''] before:h-full before:w-1 before:bg-primary before:left-0 before:top-0">
                <h2 class="text-md font-raleway font-bold text-white uppercase ml-5">About US</h2>
            </div>
            <img src="{{ asset('image/logo.png') }}" alt="" class="my-8 invert w-[200px]">
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                inci
                done idunt utp
                labore et dolore magna aliqua.</p>
            <div class="flex pb-2 pt-6 gap-8 text-sm text-gray-400">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 lg:col-span-4 p-4">
            <div
                class="title w-full relative before:absolute before:conent-[''] before:h-full before:w-1 before:bg-primary before:left-0 before:top-0 mb-8">
                <h2 class="text-md font-raleway font-bold text-white uppercase ml-5">WORKING HOURS</h2>
            </div>
            <p>We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                Hotline and Contact form.</p>
            <br>
            <div class="w-full flex mb-1 justify-between mt-8">
                <p> Monday - Friday:</p>
                <p class="text-end mb-1">10:00 - 16:00</p>
            </div>
            <div class=" w-full flex mb-1 justify-between">
                <p>Saturday:</p>
                <p class="text-end mb-1">12:00 - 15:00</p>
            </div>

        </div>
        <div class="col-span-12 md:col-span-6 lg:col-span-4 p-4 ">
            <div
                class="title w-full relative before:absolute before:conent-[''] before:h-full before:w-1 before:bg-primary before:left-0 before:top-0 mb-8">
                <h2 class="text-md font-raleway font-bold text-white uppercase ml-5">SERVICES</h2>
            </div>
            <ul class="w-full space-y-3">
                <li class=" flex group cursor-pointer ">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="relative bottom-1 ml-2 group-hover:text-primary ">Pre-Construction</a>
                </li>
                <li class=" flex group cursor-pointer">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="relative bottom-1 ml-2 group-hover:text-primary ">Pre-Construction</a>
                </li>
                <li class=" flex group cursor-pointer">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="relative bottom-1 ml-2 group-hover:text-primary ">Pre-Construction</a>
                </li>
                <li class=" flex group cursor-pointer">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="relative bottom-1 ml-2 group-hover:text-primary ">Pre-Construction</a>
                </li>
                <li class=" flex group cursor-pointer">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    <a href="#" class="relative bottom-1 ml-2 group-hover:text-primary ">Pre-Construction</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<footer class="bg-primary px-4">
    <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row items-center py-4 space-y-5 md:space-y-0">
        <div class="basis-full md:basis-[40%] text-center md:text-left">
            <p class="text-sm">Copyright © {{ date('Y') }} Developed by <span><a
                        href="https://www.linkedin.com/in/nurul-komor"
                        class="hover:text-white font-medium duration-150">Nurul
                        Komor</a> & <a href="https://www.facebook.com/profile.php?id=100016277460214"
                        class="hover:text-white font-medium duration-150">Naim
                        Howlader</a></span></p>
        </div>
        <div class="text-sm basis-full md:basis-[60%]">
            <ul class="flex md:justify-end justify-center gap-3">
                <li class="hover:text-white {{ Route::is('home') ? 'text-white' : '' }} duration-150"><a
                        href="{{ route('home') }}">Home</a></li>white
                <li class="hover:text-white {{ Route::is('common.projects') ? 'text-white' : '' }} duration-150"><a
                        href="{{ route('common.projects') }}">Projects</a></li>

                <li class="hover:text-white {{ Route::is('common.all-news') ? 'text-white' : '' }} duration-150"><a
                        href="{{ route('common.all-news') }}">News</a></li>


            </ul>
        </div>
    </div>
</footer>
{{-- footer section --}}
