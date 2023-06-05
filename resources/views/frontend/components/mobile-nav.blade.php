<section class="block lg:hidden  bg-transparent absolute top-0 w-full left-0 z-50 bg-slate-400">
    <div class=" relative ml-8 mt-7">
        <div class="absolute left-5">
            <a href="{{ route('home') }}">
                <img src="{{ asset('image/logo.png') }}" class="h-[52px]" alt="">
            </a>
        </div>
    </div>
    <div class="fixed top-0 left-0 min-h-screen w-full  bg-slate-700 mobile-nav-area ">
        <div class="relative  z-2">
            <div class="absolute left-[80%] top-[24px] z-5">
                <ion-icon name="menu-outline" class="text-[30px] text-white cursor-pointer p-4 z-5 inline-block "
                    id="mobile-nav-btn">
                </ion-icon>
            </div>
            <ul
                class="absolute w-full top-20 min-h-[70vh] text-2xl text-white mx-auto  text-center space-y-5 grid place-content-center">
                <li class="hover:text-primary duration-150"><a href="{{ route('home') }}">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="/about">About</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
            </ul>
        </div>
    </div>
</section>

@push('mobile-nav-js')
    <script>
        $('#mobile-nav-btn').on('click', function() {
            if ($('.mobile-nav-area').hasClass('show') || $('.mobile-nav-area').hasClass('hide')) {
                $('.mobile-nav-area').toggleClass('hide show')
            } else {
                $('.mobile-nav-area').addClass('show')

            }
        })
    </script>
@endpush
