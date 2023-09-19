<section class="block md:hidden">
    <header>
        <div class="menu-container">
            <div class="grt-menu-row">
                <div class="grt-menu-logo">
                    <a href="#" class="grt-logo"><img src="{{ asset('image/logo.png') }}"></a>
                </div>
                <div class="grt-menu-right">
                    <nav>
                        <button class="grt-mobile-button"><span class="line1"></span><span class="line2"></span><span
                                class="line3"></span></button>
                        <ul class="grt-menu">
                            <li class="hover:text-primary {{ Route::is('home') ? 'active' : '' }} duration-150"><a
                                    href="{{ route('home') }}">Home</a></li>

                            <li
                                class="hover:text-primary {{ Route::is('common.projects') ? 'active' : '' }} duration-150">
                                <a href="{{ route('common.projects') }}">Projects</a>
                            </li>

                            <li
                                class="hover:text-primary {{ Route::is('common.all-news') ? 'active' : '' }} duration-150">
                                <a href="{{ route('common.all-news') }}">Readymix</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</section>
