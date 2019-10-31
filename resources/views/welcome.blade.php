<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema Best LMS Ever :)">
    <meta name="author" content="Ansonika">
    <title>UDEMA | LMS by iANikzad</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('layerslider/css/layerslider.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <style>
        .hidden-desktop {
            opacity: 0 !important;
            display: none !important;
        }
        @media(max-width: 991px) {
            .hidden-desktop {
                opacity: 1 !important;
                display: inline-block !important;
            }
        }
    </style>
</head>

<body>

<div id="page">

    <header class="header menu_2">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
        <div id="logo">
            <a href="index.html"><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></a>
        </div>
        <ul id="top_menu">
            <li class="hidden_tablet"><a href="{{ route('teacher.register_form') }}" class="btn_1 rounded">Enter as Teacher</a></li>
            <li class="hidden_tablet"><a href="{{ route('student.register_form') }}" class="btn_1 rounded">Enter as Student</a></li>
        </ul>
        <!-- /top_menu -->
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <ul>
                <li><span><a href="/">Home</a></span></li>
                <li><span><a href="{{ route('user.login') }}">Login</a></span></li>
                <li class="hidden-desktop"><span><a href="{{ route('teacher.register_form') }}">Enter as Teacher</a></span></li>
                <li class="hidden-desktop"><span><a href="{{ route('student.register_form') }}">Enter as Student</a></span></li>
            </ul>
        </nav>
        <!-- Search Menu -->
        <div class="search-overlay-menu">
            <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
            <form role="search" id="searchform" method="get">
                <input value="" name="q" type="search" placeholder="Search..." />
                <button type="submit"><i class="icon_search"></i>
                </button>
            </form>
        </div><!-- End Search Menu -->
    </header>
    <!-- /header -->

    <main>
        <!-- Slider -->
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:750px;">
                <!-- first slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                    <img src="{{asset('img/slides/slide_2.jpg')}}" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Udema <strong>Excellence</strong> in teaching</h3>
                    <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                        College | lms | University
                    </p>
                    <a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='courses-grid.html'>Read more</a>
                </div>
                <!-- second slide -->
                <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                    <img src="{{asset('img/slides/slide_3.jpg')}}" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Focus</strong> on improvement </h3>
                    <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                        College | lms | University
                    </p>
                    <a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='courses-grid.html'>Read more</a>
                </div>
                <!-- third slide -->
                <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                    <img src="img/slides/slide_1.jpg" class="ls-bg" alt="Slide background">
                    <h3 class="ls-l slide_typo" style="top:47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Friendly</strong> student community</h3>
                    <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                        College | lms | University
                    </p>
                    <a class="ls-l btn_1 rounded" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='courses-grid.html'>Explore</a>
                </div>
            </div>
        </div>
        <!-- End layerslider -->

        <div class="features clearfix">
            <div class="container">
                <ul>
                    <li><i class="pe-7s-study"></i>
                        <h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
                    </li>
                    <li><i class="pe-7s-cup"></i>
                        <h4>Expert teachers</h4><span>Find the right instructor for you</span>
                    </li>
                    <li><i class="pe-7s-target"></i>
                        <h4>Focus on target</h4><span>Increase your personal expertise</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /features -->

        <div class="container margin_30_95">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Udema Categories Courses</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{asset('img/course_1.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>15 Programmes</small>
                                <h3>Arts and Humanities</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{asset('img/course_2.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Engineering</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{asset('img/course_3.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Architecture</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{asset('img/course_4.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Science and Biology</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{asset('img/course_5.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Law and Criminology</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                    <a href="#0" class="grid_item">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="{{asset('img/course_6.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <small><i class="ti-layers"></i>23 Programmes</small>
                                <h3>Medical</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->



        <div class="call_section">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <div class="box_1">
                            <h3>Enjoy a great students community</h3>
                            <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                            <a href="#0" class="btn_1 rounded">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
    </main>
    <!-- /main -->

    <footer>
        <div class="container margin_120_95">
            <div class="row">
                <div class="col-lg-5 col-md-12 p-r-5">
                    <p><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></p>
                    <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
                    <div class="follow_us">
                        <ul>
                            <li>Follow us</li>
                            <li><a href="#0"><i class="ti-facebook"></i></a></li>
                            <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#0"><i class="ti-google"></i></a></li>
                            <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#0"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ml-lg-auto">
                    <h5>Useful links</h5>
                    <ul class="links">
                        <li><a href="#0">Admission</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Login</a></li>
                        <li><a href="#0">Register</a></li>
                        <li><a href="#0">News &amp; Events</a></li>
                        <li><a href="#0">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact with Us</h5>
                    <ul class="contacts">
                        <li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
                        <li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@udema.com</a></li>
                    </ul>
                    <div id="newsletter">
                        <h6>Newsletter</h6>
                        <div id="message-newsletter"></div>
                        <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <input type="submit" value="Submit" id="submit-newsletter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div id="copy">© 2017 Udema</div>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!-- page -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/common_scripts.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('layerslider/js/greensock.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript">
    'use strict';
    $('#layerslider').layerSlider({
        autoStart: true,
        navButtons: false,
        navStartStop: false,
        showCircleTimer: false,
        responsive: true,
        responsiveUnder: 1280,
        layersContainer: 1200,
        skinsPath: 'layerslider/skins/'
        // Please make sure that you didn't forget to add a comma to the line endings
        // except the last line!
    });
</script>

</body>
</html>
