<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="JAAC-img">
                            <a href="index.html">
                                <img src="img/JAAC.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="index.html">Inicio</a></li>
                                    <li><a href="package.html"></a></li>
                                    <li><a href="Support.html">Quejas y reclamos</a></li>
                                    <li><a href="about.html">Ayuda</a></li>
                                    <li><a href="contact.html">Contactanos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="log_chat_area d-flex align-items-center">
                        @guest
                        @if (Route::has('register'))
                            <a href="#test-form" class="login popup-with-form">
                                <i class="flaticon-user"></i>
                                <span>log in</span>
                             </a>    
                        @endif
                        @else
                        <a href="#" class="login popup-with-form">
                                <i class="flaticon-user"></i>
                                <span> {{ Auth::user()->name }}</span>
                             </a> 
                         @endif    

                            </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

