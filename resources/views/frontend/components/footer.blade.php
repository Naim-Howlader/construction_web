@stack('navsticky')

<script src="{{ asset('js/jquery.min.js') }}"></script>
{{-- mobile nav js  --}}
<script src="{{ asset('js/grt-responsive-menu.js') }}"></script>
{{-- nav sticky js  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/flowbite.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
@stack('home-page-js')
@stack('mobile-nav-js')
@stack('gallery-page-js')
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
