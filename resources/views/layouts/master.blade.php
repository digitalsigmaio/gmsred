<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GMS Group app control panel">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="GMS, Company, App, Control Panel">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <title>GMS Admin Area</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">

    <!-- =======================================================
      Author: GMS Group
      Author URL: https://gms-group.company
	  Developer: Mohamed Ibrahim
	  E-Mail: m.sayed@gmsproduction.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{ route('home') }}" class="logo">GMS GROUP <span class="lite">Admin</span></a>
        <!--logo end-->
        <div class="top-nav notification-row">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    @include('layouts.navigation')
    <!--sidebar end-->

    <!--main content start-->
    <div id="app">
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                @yield('content')
            </section>
        </section>
    </div>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<!-- nice scroll -->
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<!-- jQuery full calendar -->
<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('js/calendar-custom.js') }}"></script>
<script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('js/jquery.customSelect.min.js') }}"></script>
<script src="{{ asset('assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src="{{ asset('js/scripts.js') }}"></script>

<!-- custom script for this page-->
<script src="{{ asset('js/sparkline-chart.js') }}"></script>
<script src="{{ asset('js/easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('js/xcharts.min.js') }}"></script>
<script src="{{ asset('js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('js/gdp-data.js') }}"></script>
<script src="{{ asset('js/morris.min.js') }}"></script>
<script src="{{ asset('js/sparklines.js') }}"></script>
<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script>
    //knob
    $(function() {
        $(".knob").knob({
            'draw': function() {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function() {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });

    /* ------------ Delete ------------*/
    $(document).ready(function () {
       $('.deleteItem').on('click', function () {
           if (confirm('Are you sure?')) {
           } else {
               return false;
           }
       });
    });
</script>

</body>

</html>
