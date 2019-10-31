<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instructor Dashboard</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets/css/material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/material-icons.rtl.css')}}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/fontawesome.rtl.css')}}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/app.rtl.css')}}" rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="{{asset('assets/css/flatpickr.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/flatpickr.rtl.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/flatpickr-airbnb.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/flatpickr-airbnb.rtl.css')}}" rel="stylesheet">

    <!-- Quill Theme -->
    <link type="text/css" href="{{asset('assets/css/quill.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/quill.rtl.css')}}" rel="stylesheet">

    <!-- Nestable -->
    <link rel="stylesheet" href="{{asset('assets/css/nestable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nestable.rtl.css')}}">

    @yield('assets')
</head>

<body class=" layout-fluid">

<div class="preloader">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
    </div>
</div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header" data-fixed class="mdk-header js-mdk-header mb-0">
        <div class="mdk-header__content">

            <!-- Navbar -->
            <nav id="default-navbar" class="navbar navbar-expand navbar-dark bg-primary m-0">
                <div class="container-fluid">
                    <!-- Toggle sidebar -->
                    <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Brand -->
                    <a href="instructor-dashboard.html" class="navbar-brand">
                        <img src="{{asset('assets/images/logo/white.svg')}}" class="mr-2" alt="LearnPlus" />
                        <span class="d-none d-xs-md-block">LearnPlus</span>
                    </a>

                    <ul class="nav navbar-nav navbar-nav-stats d-none d-md-flex flex-nowrap">
                        <li class="nav-item">
                            <div class="nav-stats">$591 <small>GROSS</small></div>
                        </li>
                        <li class="nav-item">
                            <div class="nav-stats">$31 <small>TAXES</small></div>
                        </li>
                        <li class="nav-item mr-3">
                            <div class="nav-stats">$560 <small>NET</small></div>
                        </li>
                    </ul>

                    <!-- Search -->
                    <form class="search-form d-none d-md-flex">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="button"><i class="material-icons font-size-24pt">search</i></button>
                    </form>
                    <!-- // END Search -->

                    <div class="flex"></div>

                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="instructor-forum.html">Forum</a>
                        </li>
                    </ul>

                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">




                        <!-- Notifications dropdown -->
                        <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                            <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                                <i class="material-icons">notifications</i>
                                <span class="badge badge-notifications badge-danger">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="instructor-messages.html" class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-primary"></span>

                                                </span>
                                            <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="{{asset('assets/images/people/110/woman-5.jpg')}}" alt="people" class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Michelle</strong>
                                                        <span class="text-black-70">Clients loved the new design.</span>
                                                    </span>
                                                </span>
                                        </a>

                                        <a href="instructor-messages.html" class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-primary"></span>

                                                </span>
                                            <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="{{asset('assets/images/people/110/woman-5.jpg')}}" alt="people" class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Michelle</strong>
                                                        <span class="text-black-70">🔥 Superb job..</span>
                                                    </span>
                                                </span>
                                        </a>

                                    </div>

                                    <div class="dropdown-header"><strong>System notifications</strong></div>
                                    <div class="list-group list-group-flush mb-0">

                                        <a href="instructor-messages.html" class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">3 minutes ago</small>

                                                </span>
                                            <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                    </span>
                                                </span>
                                        </a>

                                        <a href="instructor-messages.html" class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 hours ago</small>

                                                </span>
                                            <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-success">group_add</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Adrian. D</strong>
                                                        <span class="text-black-70">Wants to join your private group.</span>
                                                    </span>
                                                </span>
                                        </a>

                                        <a href="instructor-messages.html" class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">1 day ago</small>

                                                </span>
                                            <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-warning">storage</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your deploy was successful.</span>
                                                    </span>
                                                </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- // END Notifications dropdown -->
                        <!-- User dropdown -->
                        <li class="nav-item dropdown ml-1 ml-md-3">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="{{asset('assets/images/people/50/guy-6.jpg')}}" alt="Avatar" class="rounded-circle" width="40"></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="instructor-account-edit.html">
                                    <i class="material-icons">edit</i> Edit Account
                                </a>
                                <a class="dropdown-item" href="instructor-profile.html">
                                    <i class="material-icons">person</i> Public Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="material-icons">lock</i> {{ __('Logout') }}
                                </a>
                            </div>
                        </li>
                        <!-- // END User dropdown -->
                    </ul>
                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">

                @yield('content')

            </div>




            <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                <div class="mdk-drawer__content ">
                    <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                        <div class="sidebar-p-y">
                            <div class="sidebar-heading">APPLICATIONS</div>
                            <ul class="sidebar-menu sm-active-button-bg">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="{{route('teacher.dashboard')}}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Instructor
                                    </a>
                                </li>
                            </ul>
                            <div class="sidebar-heading">Instructor</div>
                            <ul class="sidebar-menu sm-active-button-bg">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('courses.index') }}">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Manager
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="instructor-quizzes.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">help</i> Quiz Manager
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="instructor-earnings.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">trending_up</i> Earnings
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="instructor-statement.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">receipt</i> Statement
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#forum_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                        Community
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu sm-indent collapse" id="forum_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="instructor-forum.html">
                                                <span class="sidebar-menu-text">Forum</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="instructor-forum-thread.html">
                                                <span class="sidebar-menu-text">Discussion</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="instructor-forum-ask.html">
                                                <span class="sidebar-menu-text">Ask Question</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-profile.html">
                                                <span class="sidebar-menu-text">Student Profile - Courses</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="student-profile-posts.html">
                                                <span class="sidebar-menu-text">Student Profile - Posts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="instructor-profile.html">
                                                <span class="sidebar-menu-text">Instructor Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="instructor-help-center.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Help Center
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open
                                        </i>{{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- jQuery -->
<script src="{{asset('assets/vendor/jquery.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('assets/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>

<!-- Perfect Scrollbar -->
<script src="{{asset('assets/vendor/perfect-scrollbar.min.js')}}"></script>

<!-- MDK -->
<script src="{{asset('assets/vendor/dom-factory.js')}}"></script>
<script src="{{asset('assets/vendor/material-design-kit.js')}}"></script>

<!-- App JS -->
<script src="{{asset('assets/js/app.js')}}"></script>

<!-- Highlight.js -->
<script src="{{asset('assets/js/hljs.js')}}"></script>







<!-- Global Settings -->
<script src="{{asset('assets/js/settings.js')}}"></script>

<!-- Moment.js -->
<script src="{{asset('assets/vendor/moment.min.js')}}"></script>
<script src="{{asset('assets/vendor/moment-range.min.js')}}"></script>

<!-- Chart.js -->
<script src="{{asset('assets/vendor/Chart.min.js')}}"></script>

<!-- UI Charts Page JS -->
<script src="{{asset('assets/js/chartjs-rounded-bar.js')}}"></script>
<script src="{{asset('assets/js/chartjs.js')}}"></script>

<!-- Chart.js Samples -->
<script src="{{asset('assets/js/page.instructor-dashboard.js')}}"></script>

<!-- List.js -->
<script src="{{asset('assets/vendor/list.min.js')}}"></script>
<script src="{{asset('assets/js/list.js')}}"></script>


<!-- Nestable -->
<script src="{{asset('assets/vendor/jquery.nestable.js')}}"></script>
<script src="{{asset('assets/js/nestable.js')}}"></script>

<!-- Quill -->
<script src="{{asset('assets/vendor/quill.min.js')}}"></script>
<script src="{{asset('assets/js/quill.js')}}"></script>

<!-- Flatpickr -->
<script src="{{asset('assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/js/flatpickr.js')}}"></script>
@yield('script')
</body>

</html>
