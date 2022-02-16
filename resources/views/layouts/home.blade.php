<!doctype html>
<html lang="en">

<!-- Google Web Fonts
	================================================== -->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

<!-- Basic Page Needs
	================================================== -->

<title>Superowl</title>

<meta charset="utf-8">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">

<!-- Mobile Specific Metas
	================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Vendor CSS
	============================================ -->

<link rel="stylesheet" href="{{URL::asset('depan/font/demo-files/demo.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/plugins/revolution/css/settings.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/plugins/revolution/css/layers.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/plugins/revolution/css/navigation.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/plugins/fancybox/jquery.fancybox.css')}}">

<!-- Vendor CSS
	============================================ -->

<link rel="stylesheet" href="{{URL::asset('depan/font/demo-files/demo.css')}}">

<!-- CSS theme files
	============================================ -->
<link rel="stylesheet" href="{{URL::asset('depan/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/css/fontello.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('depan/css/responsive.css')}}">

</head>

<body>

    <div class="loader"></div>

    <!--cookie-->
    <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f-right"><a href="#" class="button button-type-3 button-orange">Accept Cookies</a><a href="#" class="button button-type-3 button-grey-light">Read More</a></div>
            </div>
          </div>
        </div>-->

    <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

    <div id="wrapper" class="wrapper-container">

        <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

        <nav id="mobile-advanced" class="mobile-advanced"></nav>

        <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

        <header id="header" class="header">

            <!-- top-header -->
            <div class="top-header">

                <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

                <!--main menu-->

                <div class="menu-holder">

                    <div class="menu-wrap">

                        <div class="table-row">

                            <!-- logo -->

                            <div class="logo-wrap">

                                <a href="index.html" class="logo"><img src="{{URL::asset('depan/images/logo.png')}}"
                                        alt=""></a>

                            </div>

                            <!-- Menu & TopBar -->
                            <div class="nav-item">



                                <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->

                                @include('layouts.menu_depan')
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- bottom-separator -->
            <div class="bottom-separator"></div>

        </header>

        <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

        <div id="content">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <div class="breadcrumbs-wrap" data-bg="{{URL::asset('depan/images/1920x280_bg2.jpg')}}">

                <div class="container">

                    <h1 class="page-title">Berita Terbaru</h1>

                    <ul class="breadcrumbs">

                    </ul>

                </div>

            </div>

            <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

            <div class="page-content-wrap">

                <div class="container">

                    <div class="row">

                        <!-- Main content -->
                        <main id="main" class="col-md-8">

                            <div class="content-element5">

                                <div class="welcome-section blog-type type-2 style-2">

                                    <!-- image post -->
                                    <div class="welcome-col">

                                        <div class="welcome-item">

                                            <div class="welcome-inner">

                                                <div class="welcome-img">
                                                    <img src="{{URL::asset('depan/images/750x460_img3.jpg')}}" alt="">
                                                </div>

                                                <div class="welcome-content">

                                                    <svg class="bigHalfCircle" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                                                        <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                                                    </svg>

                                                    <div class="entry">

                                                        <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                                        <div class="entry-body">

                                                            <time class="entry-date" datetime="2016-08-20">
                                                                <span>20</span>aug
                                                            </time>

                                                            <div class="wrapper">

                                                                <h4 class="entry-title"><a href="#">Image Post
                                                                        Example</a></h4>

                                                                <p>Sed in lacus ut enim adipiscing aliquet. Nulla
                                                                    venenatis. In pede mi, aliquet sit amet, euismod in,
                                                                    auctor ut, ligula. Aliquam dapibus tincidunt metus.
                                                                    Praesent justo dolor, lobortis quis, lobortis
                                                                    dignissim, pulvinar ac, lorem. </p>

                                                                <a href="#" class="info-btn">Read More</a>

                                                            </div>

                                                        </div>

                                                        <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                                        <div class="entry-meta">

                                                            <div class="entry-byline"><a href="#">Admin</a></div>
                                                            <a href="#" class="entry-news">News</a>
                                                            <a href="#" class="entry-comments-link">3</a>
                                                            <a href="#" class="entry-share f-right">Share</a>

                                                        </div>

                                                        <!-- - - - - - - - - - - - - - Entry meta - - - - - - - - - - - - - - - - -->

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <ul class="pagination">
                                <li>
                                    <a href="#" class="prev-page"></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#" class="next-page"></a>
                                </li>
                            </ul>

                        </main>

                        <!-- Sidebar-->
                        <aside id="sidebar" class="col-md-4">


                            <!-- widget links -->



                            <!-- widget News -->
                            <div class="widget">

                                <h4 class="widget-title">Popular News</h4>

                                <ul class="news-list small-img">

                                    <li>

                                        <article class="entry">

                                            <!-- - - - - - - - - - - - - - Attachment - - - - - - - - - - - - - - - - -->

                                            <div class="entry-attachment">

                                                <a class="#" href="#"><img
                                                        src="{{URL::asset('depan/images/100x100_entry1.jpg')}}"
                                                        alt=""></a>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of Attachment - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                            <div class="entry-body">

                                                <!-- - - - - - - - - - - - - - Entry Meta - - - - - - - - - - - - - - - - -->

                                                <div class="entry-meta">

                                                    <time class="entry-date" datetime="2016-01-27">AUG 20</time>

                                                </div>

                                                <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - - - - -->

                                                <h5 class="entry-title"><a href="#">Image Post Example</a></h5>

                                                <div class="entry-meta">

                                                    <a href="#" class="entry-news">News</a>
                                                    <a href="#" class="entry-comments-link">3</a>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                        </article>

                                    </li>

                                </ul>

                            </div>
                            <!-- /widget -->

                            <!-- widget Calendar -->


                            <!-- widget Events -->
                            <div class="widget">

                                <h4 class="widget-title">Upcoming Events</h4>

                                <ul class="news-list">

                                    <li>

                                        <article class="entry">

                                            <!-- - - - - - - - - - - - - - Entry body - - - - - - - - - - - - - - - - -->

                                            <div class="entry-body">

                                                <!-- - - - - - - - - - - - - - Entry Meta - - - - - - - - - - - - - - - - -->

                                                <div class="entry-meta">

                                                    <time class="entry-date" datetime="2016-01-27">Tue Dec 20</time>

                                                </div>

                                                <!-- - - - - - - - - - - - - - End of Meta - - - - - - - - - - - - - - - - -->

                                                <h5 class="entry-title"><a href="#">Christmas Picnic</a></h5>

                                                <div class="contact-info-menu">

                                                    <div class="contact-info-item">
                                                        <i class="icon-clock"></i>
                                                        <span>12:00 AM - 5:00 PM</span>
                                                    </div>
                                                    <div class="contact-info-item">
                                                        <i class="icon-location"></i>
                                                        <span>8901 Marmora Road, Glasgow, D04 89GR</span>
                                                    </div>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of Entry body - - - - - - - - - - - - - - - - -->

                                        </article>

                                    </li>


                                </ul>

                                <a href="#" class="info-btn">Event Selanjutnya</a>

                            </div>
                            <!-- /widget -->

                            <!-- widget Facebook -->


                            <!-- widget Comments -->




                            <!-- widget Pages -->






                        </aside>

                    </div>

                </div>

            </div>

        </div>

        <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

        <footer id="footer" class="footer">

            <!-- Top footer -->
            <div class="top-footer">

                <div class="container">

                    <div class="row">

                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->
                        <div class="col-md-12 col-xs-12">

                            <div class="widget">


                                <p class="text-center">Copyright <span>ME Soft</span> © 2021. <br> All Rights
                                    Reserved
                                </p>

                            </div>

                        </div>
                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Widget - - - - - - - - - - - - - - - - -->

                    </div>

                </div>

            </div>

        </footer>

        <div id="footer-scroll"></div>

        <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

    </div>

    <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->

    <!-- JS Libs & Plugins
  ============================================ -->
    <script src="{{URL::asset('depan/js/libs/jquery.modernizr.js')}}"></script>
    <script src="{{URL::asset('depan/js/libs/jquery-2.2.4.min.js')}}"></script>
    <script src="{{URL::asset('depan/js/libs/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('depan/js/libs/retina.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/jquery.scrollTo.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/jquery.localScroll.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/jquery.queryloader2.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/instafeed.min.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
    <script src="{{URL::asset('depan/plugins/audioplayer.js')}}"></script>


    <!-- JS theme files
  ============================================ -->
    <script src="{{URL::asset('depan/js/plugins.js')}}"></script>
    <script src="{{URL::asset('depan/js/script.js')}}"></script>

</body>

</html>
