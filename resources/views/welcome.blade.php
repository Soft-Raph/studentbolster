@include('layouts.header')
<body>
    <div class="super_container">

    <div class="home">
    <div class="home_slider_container">

    <div class="owl-carousel owl-theme home_slider">

    <div class="owl-item">
    <div class="slider_background" style="background-image:url({{URL('/')}}/asset/images/home_slider_1.jpg)"></div>
    <div class="home_slider_content text-center">
    <h3  style="color: #ffffff">Don't Delay - Invest Today</h3>
    <div class="home_slider_text" style="color: #a09f9e;font-size: medium">with STUDENTBOLSTER can get up to 50% Return Over Investment within 14days in our single package.
        All you need is to sign up and invest now!</div>
    <div class="link_button home_slider_button"><a href="{{route('register')}}">Sign Up</a></div>
    </div>
    </div>

    <div class="owl-item">
    <div class="slider_background" style="background-image:url({{URL('/')}}/asset/images/home_slider_1.jpg)"></div>
    <div class="home_slider_content text-center">
    <h3  style="color: #ffffff">Don't Delay - Invest Today </h3>
    <div class="home_slider_text" style="color: #a09f9e;font-size: medium">with STUDENTBOLSTER can get up to 50% Return Over Investment within 14days in our single package.
        All you need is to sign up and invest now!</div>
    <div class="link_button home_slider_button"><a href="{{route('register')}}">Sign Up</a></div>
    </div>
    </div>

    <div class="owl-item">
    <div class="slider_background" style="background-image:url({{URL('/')}}/asset/images/home_slider_1.jpg)"></div>
    <div class="home_slider_content text-center">
    <h3  style="color: #ffffff">Don't Delay - Invest Today</h3>
    <div class="home_slider_text" style="color: #a09f9e;font-size: medium">with STUDENTBOLSTER can get up to 50% Return Over Investment within 14days in our single package.
        All you need is to sign up and invest now!</div>
    <div class="link_button home_slider_button"><a href="{{route('register')}}">Sign Up</a></div>
    </div>
    </div>

    <div class="owl-item">
    <div class="slider_background" style="background-image:url({{URL('/')}}/asset/images/home_slider_1.jpg)"></div>
    <div class="home_slider_content text-center">
    <h3  style="color: #ffffff">Don't Delay - Invest Today</h3>
    <div class="home_slider_text" style="color: #a09f9e;font-size: medium">with STUDENTBOLSTER can get up to 50% Return Over Investment within 14days in our single package.
        All you need is to sign up and invest now!
    </div>
    <div class="link_button home_slider_button"><a href="{{route('register')}}">Sign Up</a></div>
    </div>
    </div>
    </div>
    <div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center"><img src="{{URL('/')}}/asset/images/arrow_l.png" alt=""></div>
    <div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="{{URL('/')}}/asset/images/arrow_r.png" alt=""></div>
    </div>

    <header class="header">

    <div class="top_bar">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
    <div class="logo_container">
    <div class="logo">
    <a href="#">
    <div class="logo_line_1"><span>STUDENT</span>BOLSTER</div>
    {{-- <div class="logo_line_2">Blockchain</div> --}}
    <div class="logo_img"><img src="{{URL('/')}}/asset/images/sbpng.png" alt=""></div>
    </a>
    </div>
    </div>
    <div class="top_bar_content ml-auto">
    {{-- <div class="coins">
    <ul>
    <li>BTC $10200</li>
    <li>ETH $979</li>
    <li>LTC $230</li>
    </ul>
    </div> --}}
    <div class="register_login">
    <div class="register"><a href="{{route('register')}}">register</a></div>
    <div class="login"><a href="{{route('login')}}">login</a></div>
    </div>
    </div>
    <div class="burger">
    <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="main_menu">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
    <div class="main_menu_content">
    <ul class="main_menu_list">
    <li class="active hassubs">
    <a href="#">home
    {{-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg> --}}
    </a>
    {{-- <ul>
    <li><a href="#">Blockchain
    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="financial.html">Financial
    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    </ul> --}}
    </li>
    <li><a href="#aboutus">about us
    <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li class="hassubs">
    <a href="#services">services
    {{-- <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg> --}}
    </a>
    {{-- <ul>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    </ul> --}}
    </li>
    <li class="hassubs">
    <a href="#news">News
    {{-- <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg> --}}
    </a>
    {{-- <ul>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
     <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    <li><a href="#">Menu Item
    <svg version="1.1" id="Layer_14" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />
    </g>
    </svg>
    </a></li>
    </ul> --}}
    </li>
    <li><a href="#testimony">Testimony
    <svg version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
    <g>
    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 " />
    </g>
    </svg>
    </a></li>
{{--    <li><a href="contact.html">contact--}}
{{--    <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">--}}
{{--    <g>--}}
{{--    <polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	" />--}}
{{--    </g>--}}
{{--    </svg>--}}
{{--    </a></li>--}}
    </ul>
    </div>
    <div class="main_menu_contact ml-auto">
    <div class="main_menu_phone"><img src="{{URL('/')}}/asset/images/phone-call.svg" alt=""><span>09039912263</span></div>
    <div class="main_menu_email"><img src="{{URL('/')}}/asset/images/envelope.svg" alt=""><span>ariyoraphael2263</span></div>
    <div class="main_menu_search">
    <div class="main_menu_search_button">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px" height="15px">
    <g>
    <path class="mag_path" d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#f4f4f8" />
    </g>
    </svg>
    </div>
    <div class="main_menu_search_content">
    <form action="#">
    <input class="search_input" type="search" placeholder="Keyword" required="required">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="menu">
    <div class="menu_register_login">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
    <div class="register"><a href="{{route('register')}}">register</a></div>
    <div class="login"><a href="{{route('login')}}">login</a></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <ul class="menu_list">
    <li class="menu_item">
    <div class="container">
    <div class="row">
    <div class="col">
    <a href="#">Home</a>
    </div>
    </div>
    </div>
    </li>
    <li class="menu_item">
    <div class="container">
    <div class="row">
    <div class="col">
    <a href="#aboutus">About us</a>
    </div>
    </div>
    </div>
    </li>
    <li class="menu_item">
    <div class="container">
    <div class="row">
    <div class="col">
    <a href="#services">Services</a>
    </div>
    </div>
    </div>
    </li>
    <li class="menu_item">
    <div class="container">
    <div class="row">
    <div class="col">
    <a href="#news">News</a>
    </div>
    </div>
    </div>
    </li>
    <li class="menu_item">
    <div class="container">
    <div class="row">
    <div class="col">
{{--    <a href="contact.html">blog</a>--}}
    </div>
    </div>
    </div>
    </li>
    <li class="menu_item">
    <div class="container">
    <div class="row">
    <div class="col">
{{--    <a href="contact.html">contact</a>--}}
    </div>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </header>
    </div>
        <div class="info">
            <div class="container">
                <div class="row" id="services">
                    <div class="col">
                        <div class="section_title_container text-center">
{{--                            <div class="section_subtitle">take a look at our</div>--}}
                            <div class="section_title">Why Should I Invest With StudentBolster?</div>
                        </div>
                    </div>
                </div>
                <div class="row info_row">

                    <div class="col-lg-4 info_col">
                        <div class="info_item text-center">
                            <div class="info_image"><img src="{{URL('/')}}/asset/images/1.JFIF" alt=""></div>
                            <div class="info_title">FIRST REASON</div>
                            <div class="info_text">
                                <p>We aim at helping you as a student in achieving your financial goal by consistent investing</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 info_col">
                        <div class="info_item text-center">
                            <div class="info_image"><img src="{{URL('/')}}/asset/images/3.JFIF"  alt=""></div>
                            <div class="info_title">SECOND REASON</div>
                            <div class="info_text">
                                <p>We aim at helping you become independent by providing a platform to learn one of the high income digital skill (FX market).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 info_col">
                        <div class="info_item text-center">
                            <div class="info_image"><img src="{{URL('/')}}/asset/images/2.JFIF" alt=""></div>
                            <div class="info_title">THIRD REASON</div>
                            <div class="info_text">
                                <p>At STUDENTBOLSTER we provide an opportunity for you to secure a digital job, which is oversees by our intelligent team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="intro">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="intro_image text-lg-right text-center"><img src="{{URL('/')}}/asset/images/ab.png" alt=""></div>
    </div>
    <div class="col-lg-6" >
    <div class="intro_content" >
    <div class="intro_title_container">
{{--    <div class="intro_subtitle">take a look at our</div>--}}
    <h1 class="intro_title"  id="aboutus">About Us</h1>
    </div>
    <div class="intro_text">
    <p>studentbolster is an investment initiative with years of experience in the financial market,<br>
        aim at helping students financially by giving them access to invest and get up to 50% return,<br>
        and also creating and environment where student can learn about the current money well (The Money Market Fund).
        Our ideology is to see every student getting a source of income,<br>
        and thereby preparing them for the future!</p>
    </div>
{{--    <div class="link_button intro_button"><a href="#">read more</a></div>--}}
    </div>
    </div>
    </div>
    </div>
    </div>
        <div class="news">
            <div class="container">
                <div class="row" id="news">
                    <div class="col">
                        <div class="section_title_container text-center">
{{--                            <div class="section_subtitle">take a look at our</div>--}}
                            <div class="section_title">Latest News in Crypto</div>
                        </div>
                    </div>
                </div>
                <div class="row news_row">

                    <div class="col-lg-4 news_col">
                        <div class="news_item">
                            <div class="news_image">
                                <img src="{{URL('/')}}/asset/images/n1.JFIF" alt="https://unsplash.com/@silverhousehd">
                            </div>
                            <div class="news_content">
                                <div class="news_title" style="text-transform:uppercase" >Top best forex brokers (Companies) in Nigeria</div>
                                <div class="news_text">
                                    <p>Forex trading in Nigeria is lucrative; this article gives you the top 5 best forex brokers in Nigeria,
                                        giving you the leverage to choose easily based on your strategy.
                                        Forex trading is one of the investments you can get a good return from if you leverage it well.</p>
                                </div>
                            </div>
                            <div class="news_button"><a href="https://nairametrics.com/2021/03/24/top-best-forex-brokers-companies-in-nigeria/" target="_blank">read more</a></div>
                        </div>
                    </div>

                    <div class="col-lg-4 news_col">
                        <div class="news_item">
                            <div class="news_image">
                                <img src="{{URL('/')}}/asset/images/n2.JFIF" alt="https://unsplash.com/@silverhousehd">
                            </div>
                            <div class="news_content">
                                <div class="news_title" style="text-transform:uppercase" > look at some of the best binary options platforms</div>
                                <div class="news_text">
                                    <p>Getting involved in binary options trading is one of the easiest ways to invest. We have reviewed many brokers and have compiled the very best.</p>
                                </div>
                            </div>
                            <div class="news_button"><a href="https://www.securities.io/best-binary-options-brokers/">read more</a></div>
                        </div>
                    </div>

                    <div class="col-lg-4 news_col">
                        <div class="news_item">
                            <div class="news_image">
                                <img src="{{URL('/')}}/asset/images/n3.JFIF" alt="https://unsplash.com/@silverhousehd" target="_blank">
                            </div>
                            <div class="news_content">
                                <div class="news_title"  style="text-transform:uppercase" >In brief: For index exchange-traded funds (ETFs)</div>
                                <div class="news_text">
                                    <p>Msynthetic replication has recently gained equal footing with physical replication and, for tracking some indices, prominence at their expense.
                                        .</p>
                                </div>
                            </div>
                            <div class="news_button"><a href="https://ifamagazine.com/article/synthetic-replication-may-offer-a-structural-advantage/" target="_blank">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="services">
    <div class="container">
        <div class="row" id="news">
            <div class="col">
                <div class="section_title_container text-center">
                    {{--                            <div class="section_subtitle">take a look at our</div>--}}
                    <div class="section_title">TESTIMONIES</div>
                </div>
            </div>
        </div>

    <div class="row" id="testimony">
    <div class="col">

    <div class="services_slider_container">
    <div class="owl-carousel owl-theme services_slider">

    <div class="owl-item">
    <div class="services_item d-flex flex-column align-items-center justify-content-center">
    <div class="services_item_bg"></div>
    <div class="services_icon"><img class="svg" src="{{URL('/')}}/asset/images/tt.png" alt=""></div>
    <div class="services_title">Johnrich Raphael</div>
    <p class="services_text">Thank you for your support and concern for students,
        especially during this period. Accessing my money is very easy.
        Opening an investment account with you was a good decision.</p>
{{--    <div class="services_link"><a href="#">Read More</a></div>--}}
    </div>
    </div>

    <div class="owl-item">
    <div class="services_item d-flex flex-column align-items-center justify-content-center">
    <div class="services_item_bg"></div>
    <div class="services_icon"><img class="svg" src="{{URL('/')}}/asset/images/tt.png" alt=""></div>
    <div class="services_title">Adebayo Gbenga</div>
    <p class="services_text">“I must say that I am very satisfied with the services provided by STUDENTBOLSTER.

        I didn't expect up to this from the team, but to my surprise, your service is great</p>
{{--    <div class="services_link"><a href="#">Read More</a></div>--}}
    </div>
    </div>

    <div class="owl-item">
    <div class="services_item d-flex flex-column align-items-center justify-content-center">
    <div class="services_item_bg"></div>
    <div class="services_icon"><img class="svg" src="{{URL('/')}}/asset/images/tt.png" alt=""></div>
    <div class="services_title">Adewale Tobi</div>
    <p class="services_text">You guys are really doing a good job. I am glad I decided to invest with you.</p>
{{--    <div class="services_link"><a href="#">Read More</a></div>--}}
    </div>
    </div>

{{--    <div class="owl-item">--}}
{{--    <div class="services_item d-flex flex-column align-items-center justify-content-center">--}}
{{--    <div class="services_item_bg"></div>--}}
{{--    <div class="services_icon"><img class="svg" src="{{URL('/')}}/asset/images/services_1.svg" alt=""></div>--}}
{{--    <div class="services_title">Exchange Fiat for Crypto</div>--}}
{{--    <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>--}}
{{--    <div class="services_link"><a href="#">Read More</a></div>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <div class="owl-item">--}}
{{--    <div class="services_item d-flex flex-column align-items-center justify-content-center">--}}
{{--    <div class="services_item_bg"></div>--}}
{{--    <div class="services_icon"><img class="svg" src="{{URL('/')}}/asset/images/services_2.svg" alt=""></div>--}}
{{--    <div class="services_title">Exchange Fiat for Crypto</div>--}}
{{--    <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>--}}
{{--    <div class="services_link"><a href="#">Read More</a></div>--}}
{{--     </div>--}}
{{--    </div>--}}

{{--    <div class="owl-item">--}}
{{--    <div class="services_item d-flex flex-column align-items-center justify-content-center">--}}
{{--    <div class="services_item_bg"></div>--}}
{{--    <div class="services_icon"><img class="svg" src="{{URL('/')}}/asset/images/services_3.svg" alt=""></div>--}}
{{--    <div class="services_title">Exchange Fiat for Crypto</div>--}}
{{--    <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>--}}
{{--    <div class="services_link"><a href="#">Read More</a></div>--}}
{{--    </div>--}}
{{--    </div>--}}
    </div>
    <div class="services_nav services_prev d-flex flex-column align-items-center justify-content-center"><img src="{{URL('/')}}/asset/images/arrow_l.png" alt=""></div>
    <div class="services_nav services_next d-flex flex-column align-items-center justify-content-center"><img src="{{URL('/')}}/asset/images/arrow_r.png" alt=""></div>
    </div>
    </div>
    </div>
    </div>
    </div>

{{--    <div class="converter">--}}
{{--    <div class="converter_background parallax-window" data-parallax="scroll" data-image-src="{{URL('/')}}/asset/images/logo.png" data-speed="0.8"></div>--}}
{{--    <div class="container">--}}
{{--    <div class="row">--}}
{{--    <div class="col-lg-5">--}}
{{--    <div class="converter_content">--}}
{{--    <div class="converter_title_container">--}}
{{--    <div class="converter_subtitle">take a look at our</div>--}}
{{--    <h1 class="converter_title">Bitcoin To Fiat Currency Calculator</h1>--}}
{{--    </div>--}}
{{--    <div class="converter_text">--}}
{{--    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci,--}}
{{--        lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit.Morbi ut dapibus dui. Sed ut--}}
{{--        iaculis elit, quis varius mauris. Integer ut ultricies orci, lobo rtis egestas sem. Morbi ut--}}
{{--        dapibus dui. Sed ut iaculis elit. Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris.--}}
{{--        Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit.</p>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    <div class="col-lg-7">--}}
{{--    <div class="converter_container">--}}
{{--    <form action="#">--}}
{{--    <input type="text" value="1" class="converter_input_value converter_input">--}}
{{--    <select class="dropdown_converter converter_input">--}}
{{--    <option>btc</option>--}}
{{--    <option>ltc</option>--}}
{{--    <option>eth</option>--}}
{{--    </select>--}}
{{--    <div class="eq">=</div>--}}
{{--    <input type="text" value="9400,45" readonly class="converter_input converter_result">--}}
{{--    <select class="dropdown_converter converter_input">--}}
{{--    <option>eur</option>--}}
{{--    <option>usd</option>--}}
{{--    <option>gbp</option>--}}
{{--    </select>--}}
{{--    </form>--}}
{{--    <form action="#">--}}
{{--    <input type="text" value="10400" class="converter_input_value converter_input">--}}
{{--    <select class="dropdown_converter converter_input">--}}
{{--    <option>usd</option>--}}
{{--    <option>eur</option>--}}
{{--    <option>gbp</option>--}}
{{--    </select>--}}
{{--    <div class="eq">=</div>--}}
{{--    <input type="text" value="1.02" readonly class="converter_input converter_result">--}}
{{--    <select class="dropdown_converter converter_input">--}}
{{--    <option>btc</option>--}}
{{--    <option>ltc</option>--}}
{{--    <option>eth</option>--}}
{{--    </select>--}}
{{--    </form>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <div class="info">--}}
{{--    <div class="container">--}}
{{--    <div class="row">--}}
{{--    <div class="col">--}}
{{--    <div class="section_title_container text-center">--}}
{{--    <div class="section_subtitle">take a look at our</div>--}}
{{--    <div class="section_title">A simple trading system</div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    <div class="row info_row">--}}

{{--    <div class="col-lg-4 info_col">--}}
{{--    <div class="info_item text-center">--}}
{{--    <div class="info_image"><img src="{{URL('/')}}/asset/images/info_1.png" alt=""></div>--}}
{{--    <div class="info_title">Create your wallet</div>--}}
{{--    <div class="info_text">--}}
{{--    <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris.</p>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <div class="col-lg-4 info_col">--}}
{{--    <div class="info_item text-center">--}}
{{--    <div class="info_image"><img src="{{URL('/')}}/asset/images/info_2.png" alt=""></div>--}}
{{--    <div class="info_title">Make payments</div>--}}
{{--    <div class="info_text">--}}
{{--    <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris.</p>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--    <div class="col-lg-4 info_col">--}}
{{--    <div class="info_item text-center">--}}
{{--    <div class="info_image"><img src="{{URL('/')}}/asset/images/info_3.png" alt=""></div>--}}
{{--    <div class="info_title">Buy or sell orders</div>--}}
{{--    <div class="info_text">--}}
{{--    <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris.</p>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}


    @include('layouts.footer')
