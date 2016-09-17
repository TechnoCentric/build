
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BuildOptions | @yield('title')</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="BuildOptions App">
        <meta name="keywords" content="BuildOptions, Design, Construction, Estate Development, Real Estate, Nigeria, Africa, Abuja, Facility Management">
        <meta name="author" content="TechnoCentric Limited">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <!-- Base Css Files -->
      <link href="{{ url('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
      <link href="{{url('assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
      <link href="{{url('assets/libs/pace/pace.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
      <link href="{{url('assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
      <!-- Code Highlighter for Demo -->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
      <link href="{{url('assets/libs/prettify/github.css')}}" rel="stylesheet" />
      
          <!-- Extra CSS Libraries Start -->
          <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
          <!-- Extra CSS Libraries End -->
  <link href="{{url('assets/css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="{{url('assets/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{url('assets/img/apple-touch-icon.png')}}" />
  <link rel="apple-touch-icon" sizes="57x57" href="{{url('assets/img/apple-touch-icon-57x57.png')}}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/img/apple-touch-icon-72x72.png')}}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/apple-touch-icon-76x76.png')}}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/img/apple-touch-icon-114x114.png')}}" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('assets/img/apple-touch-icon-120x120.png')}}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{url('assets/img/apple-touch-icon-144x144.png')}}" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{url('assets/img/apple-touch-icon-152x152.png')}}" />
 
</head>
 
<body>
  <!-- Begin page -->
 
  <div id="wrapper">
    
    <!-- Top Bar Start -->
 
<div class="topbar">
  <div class="topbar-left">
    <div class="logo">
      <h1><a href="/"><img alt="Logo"  src="{{url('assets/img/menu_logo.jpg')}}"></a></h1>
    </div><button class="button-menu-mobile open-left fa fa-bars" style="font-style: italic"></button>
  </div><!-- Button mobile view to collapse sidebar menu -->
 
  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-collapse2">
        <ul class="nav navbar-nav">          
        </ul>
 
        <ul class="nav navbar-nav navbar-right top-navbar">
          
 
          <li class="dropdown topbar-profile">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong></strong> <i class="fa fa-caret-down"></i></a>
 
            <ul class="dropdown-menu">
              <li>
                <a href="  {{ url('/profile') }} ">My Profile</a>
              </li>
              
              <li>
               
              </li>              
 
              <li class="divider"></li> 
              <li>
                <a class="md-trigger" data-modal="logout-modal" href=""><i class="icon-logout-1"></i> Logout</a>
              </li>
            </ul>
          </li>          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<!-- Top Bar End -->
 
    <div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">
    <!-- Search form -->
 
    <form class="navbar-form">
      <div class="form-group">
        <input class="form-control" placeholder="Search" type="text"> <button class="btn search-button fa fa-search" style="font-style: italic" type="submit"></button>
      </div>
    </form>
 
    <div class="clearfix"></div><!--- Profile -->
 
    <div class="profile-info">      
      <div class="col-xs-8">
        <div class="profile-text">
          Welcome <b> User </b>
        </div>        
      </div>
    </div><!--- Divider -->
 
    <div class="clearfix"></div>
    <hr class="divider">
 
    <div class="clearfix"></div><!--- Divider -->
 
    <div id="sidebar-menu">
      <ul>
        <li>
          <a href='/'><i class='icon-home-3'></i><span>Home</span></a>
        </li>
        <li>
          <a href="{{url('/reports')}}"><i class="fa fa-taxi text-lightblue-1"></i><span>Site Reports</span> </a>
        </li>        
        <li>
          <a href="{{url('/projects')}}"><i class="fa fa-building text-darkblue-2"></i><span>Projects</span></a>
        </li>
        <li>
          <a href="{{url('/report')}}"><i class="fa fa-area-chart text-orange-4"></i><span>Reports Generation</span></a>
        </li>
 
             <div class="clearfix"></div>
    </div>
 
    <div class="clearfix"></div>
    
 
    <div class="clearfix"></div><br>
    <br>
    <br>
  </div>
 
          <div class="left-footer">
            <div class="progress progress-xs">
              <div class="progress-bar bg-green-1" style="width: 80%">
                <span class="progress-precentage">80%</span>
              </div><a class="btn btn-default md-trigger fa fa-inbox" data-modal="task-progress" data-toggle="tooltip" style="font-style: italic" title="See task progress"></a>
            </div>
          </div>
        </div>
        <!-- Left Sidebar End -->        
        <!-- Start right content -->
        <div class="content-page" style="padding-top: 60px;">
            @yield('content')                               
        <!-- Footer Start -->
        <footer>
            BuildOptions App| Powered By <a href="http://www.technocentric.net" target="_blank">TechnoCentric</a>
            <div class="footer-links pull-right">
                <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
            </div>
        </footer>
        <!-- Footer End -->         
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <div id="contextMenu" class="dropdown clearfix">
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
                <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
            </ul>
        </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/libs/jquery-detectmobile/detect.js"></script>
    <script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
    <script src="assets/libs/ios7-switch/ios7.switch.js"></script>
    <script src="assets/libs/fastclick/fastclick.js"></script>
    <script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
    <script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
    <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="assets/libs/nifty-modal/js/classie.js"></script>
    <script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
    <script src="assets/libs/sortable/sortable.min.js"></script>
    <script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
    <script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/libs/bootstrap-select2/select2.min.js"></script>
    <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
    <script src="assets/libs/pace/pace.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/libs/jquery-icheck/icheck.min.js"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="assets/libs/prettify/prettify.js"></script>

    <script src="assets/js/init.js"></script>
    <!-- Page Specific JS Libraries -->
    <script src="assets/libs/d3/d3.v3.js"></script>
    <script src="assets/libs/rickshaw/rickshaw.min.js"></script>
    <script src="assets/libs/raphael/raphael-min.js"></script>
    <script src="assets/libs/morrischart/morris.min.js"></script>
    <script src="assets/libs/jquery-knob/jquery.knob.js"></script>
    <script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/libs/jquery-clock/clock.js"></script>
    <script src="assets/libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
    <script src="assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
    <script src="assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
    <script src="assets/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>
    <script src="assets/js/apps/calculator.js"></script>
    <script src="assets/js/apps/todo.js"></script>
    <script src="assets/js/apps/notes.js"></script>
    <script src="assets/js/pages/index.js"></script>
    @include('partials.javascripts')

    @yield('javascript')
    </body>
</html>