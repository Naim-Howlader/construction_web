<div class="absolute top-0 left-0 w-full  bg-[#07090db3] text-white z-50 hidden lg:block">
    <div class="flex justify-between px-5 sm:px-20 md:px-14 lg:px-20 text-sm text-thin border-b border-gray-600">
        <div class="flex justify-between py-2 gap-4">
            <p>+(123) 1234-567-8901</p>
            <p> info@domain.com</p>
            <p> Mon - Sat 8:00 - 17:30, Sunday - CLOSED</p>
        </div>
        <div class="flex py-2 gap-8">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
        </div>
    </div>
    <div class="flex justify-between items-center px-5 sm:px-20 md:px-14 lg:px-20 text-sm text-thin py-4"
        id="nav-sticky">
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ env('APP_LOGO') }}" class="h-[52px]" alt="">
            </a>
        </div>
        <div>
            <ul class="flex gap-8">
                <li class="hover:text-primary duration-150"><a href="{{ route('home') }}">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="/about">About</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
                <li class="hover:text-primary duration-150"><a href="#">Home</a></li>
            </ul>
        </div>
        <div>
            <a href="#"
                class="uppercase py-4 px-6 bg-primary rounded inline-block relative before:content-[''] before:h-full before:w-0 hover:before:w-full before:duration-150 before:bg-red-700 before:absolute before:left-0 before:top-0 before:opacity-[0.4]">Contact
                Now</a>
        </div>
    </div>
</div>


@push('navsticky')
    <script>
        const nav = document.getElementById('nav-sticky');

        function fixNav() {

            if (window.scrollY > 220) {

                nav.classList.add('fixed', 'w-full', 'top-0', 'bg-[#2f2e2e]',
                    'duration-[0.4s]')
            } else {
                nav.classList.remove('fixed', 'w-full', 'top-0', 'bg-[#2f2e2e]', 'duration-[0.4s]')
            }
        }
        fixNav()
        window.addEventListener('scroll', function() {
            fixNav();
        })
    </script>
@endpush
