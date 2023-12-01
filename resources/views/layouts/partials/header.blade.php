        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="logo">
                    <h1>
                        <img src="{{ asset('img/logo.jpeg') }}" class="img-fluid rounded-circle" alt="">
                        <a href="/">Tasaka Software</a>
                    </h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="{{ asset('Vesperr') }}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        @if (!Request::is('/'))
                            <li><a class="nav-link  {{ Request::is('/') ? 'active' : '' }}" href="/">Jelajahi</a>
                            </li>
                        @endif
                        <li><a class="nav-link  {{ Request::is('jasawebsite') ? 'active' : '' }}"
                                href="/jasawebsite">Web
                                Design</a></li>
                        <li><a class="nav-link  {{ Request::is('desaingrafis') ? 'active' : '' }}"
                                href="/desaingrafis">Graphic Design</a></li>
                        <li><a class="nav-link  {{ Request::is('softwareaplikasi') ? 'active' : '' }}"
                                href="/softwareaplikasi">Software Aplikasi</a></li>
                        <li><a class="nav-link  {{ Request::is('perbaikanwebsite') ? 'active' : '' }}"
                                href="/perbaikanwebsite">Repair Website</a></li>
                        @if (Request::is('/'))
                            <li><a class="getstarted scrollto" href="#about">Jelajahi</a></li>
                        @else
                            {{ '' }}
                        @endif
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->
