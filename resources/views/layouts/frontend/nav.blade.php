<!-- START NAVBAR -->
<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-20 align-self-center">
                <div class="site-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend_assets/img/logo.png') }}"
                            alt=""></a>
                </div>
            </div>
            <!--- END Col -->

            <div class="col-60 d-flex">
                <nav id="main-menu">
                    <ul>
                        <li class=""><a href="{{ route('home') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li class="menu-item-has-children"><a href="{{ route('course') }}">Course</a>
                            <ul>
                                <li><a href="{{ route('course') }}">Course</a></li>
                                <li><a href="{{ route('course_details') }}">Course Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul>
                                <li><a href="{{ route('instructor') }}">Instructor</a></li>
                                <li><a href="{{ route('ins_details') }}">Instructor Details</a></li>
                                <li><a href="pricing.html">Pricing Plan</a></li>
                                <li><a href="{{ route('faq') }}">Faq Page</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('blog') }}">Blog</a>
                            <ul>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('blog_single') }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!--- END Col -->

            <div class="col-20 d-none d-xl-block text-end align-self-center">
                <a href="#" class="header-btn">Sign In</a>
                <a href="{{ route('contact') }}" class="btn_one">Sign Up</a>
            </div>
            <!--- END Col -->

            <ul class="mobile_menu">
                <li><a href="{{ route('home') }}">Home</a>
                </li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="#">Course</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('course') }}">Course</a></li>
                        <li><a href="{{ route('course_details') }}">Course Deails</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('instructor') }}">Instructor</a></li>
                        <li><a href="{{ route('ins_details') }}">Instructor Details</a></li>
                        <li><a href="pricing.html">Pricing Plan</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('blog') }}">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('blog_single') }}">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
        <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</div>
<!-- END NAVBAR -->
