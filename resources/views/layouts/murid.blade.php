<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">

    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{url ('/dashboard_murid')}}"><img class="main-logo" src="/img/logo/logoo2.png" alt="" /></a>
                <strong><a href="{{url ('/dashboard_murid')}}><img src="/img/logo/logoo2.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="{{url ('/profil_murid')}}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Profil</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="{{url ('/jadwal_murid')}}" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Jadwal Les</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="{{url ('/')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="{{url ('/')}}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Rating</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Guru</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Murid</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Tentang Kami</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="/img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name">Murid</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a data-toggle="collapse" data-target="#demopro" href="{{url ('/profil_murid')}}">Profil<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#demopro" href="{{url ('/jadwal_murid')}}">Jadwal Les<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#demopro" href="{{url ('/')}}">Transaksi<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#demopro" href="{{url ('/')}}">Rating untuk Guru<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->


            @yield('container');



            <!-- jquery
		============================================ -->
            <script src="js/vendor/jquery-1.12.4.min.js"></script>
            <!-- bootstrap JS
		============================================ -->
            <script src="js/bootstrap.min.js"></script>
            <!-- wow JS
		============================================ -->
            <script src="js/wow.min.js"></script>
            <!-- price-slider JS
		============================================ -->
            <script src="js/jquery-price-slider.js"></script>
            <!-- meanmenu JS
		============================================ -->
            <script src="js/jquery.meanmenu.js"></script>
            <!-- owl.carousel JS
		============================================ -->
            <script src="js/owl.carousel.min.js"></script>
            <!-- sticky JS
		============================================ -->
            <script src="js/jquery.sticky.js"></script>
            <!-- scrollUp JS
		============================================ -->
            <script src="js/jquery.scrollUp.min.js"></script>
            <!-- counterup JS
		============================================ -->
            <script src="js/counterup/jquery.counterup.min.js"></script>
            <script src="js/counterup/waypoints.min.js"></script>
            <script src="js/counterup/counterup-active.js"></script>
            <!-- mCustomScrollbar JS
		============================================ -->
            <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
            <!-- metisMenu JS
		============================================ -->
            <script src="js/metisMenu/metisMenu.min.js"></script>
            <script src="js/metisMenu/metisMenu-active.js"></script>
            <!-- morrisjs JS
		============================================ -->
            <script src="js/morrisjs/raphael-min.js"></script>
            <script src="js/morrisjs/morris.js"></script>
            <script src="js/morrisjs/morris-active.js"></script>
            <!-- morrisjs JS
		============================================ -->
            <script src="js/sparkline/jquery.sparkline.min.js"></script>
            <script src="js/sparkline/jquery.charts-sparkline.js"></script>
            <script src="js/sparkline/sparkline-active.js"></script>
            <!-- calendar JS
		============================================ -->
            <script src="js/calendar/moment.min.js"></script>
            <script src="js/calendar/fullcalendar.min.js"></script>
            <script src="js/calendar/fullcalendar-active.js"></script>
            <!-- plugins JS
		============================================ -->
            <script src="js/plugins.js"></script>
            <!-- main JS
		============================================ -->
            <script src="js/main.js"></script>
            <!-- tawk chat JS
		============================================ -->
            <script src="js/tawk-chat.js"></script>
            <script src="js/data-table/bootstrap-table.js"></script>
            <script src="js/data-table/tableExport.js"></script>
            <script src="js/data-table/data-table-active.js"></script>
            <script src="js/data-table/bootstrap-table-editable.js"></script>
            <script src="js/data-table/bootstrap-editable.js"></script>
            <script src="js/data-table/bootstrap-table-resizable.js"></script>
            <script src="js/data-table/colResizable-1.5.source.js"></script>
            <script src="js/data-table/bootstrap-table-export.js"></script>
            <!--  editable JS
		============================================ -->
            <script src="js/editable/jquery.mockjax.js"></script>
            <script src="js/editable/mock-active.js"></script>
            <script src="js/editable/select2.js"></script>
            <script src="js/editable/moment.min.js"></script>
            <script src="js/editable/bootstrap-datetimepicker.js"></script>
            <script src="js/editable/bootstrap-editable.js"></script>
            <script src="js/editable/xediable-active.js"></script>
</body>

</html>