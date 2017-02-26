
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
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
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
 
  <div id="wrapper" class="forced enlarged">
    
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
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i> <strong> {{Auth::user()->name}} </strong> <i class="fa fa-caret-down"></i></a>
 
            <ul class="dropdown-menu">
              <li>
                <a href="  {{ url('/user/password') }} ">Change Password</a>
              </li>
              @if(Auth::user()->role = 'Admin')
                <li><a href="{{url('/users')}}">Users </a>  </li>              
              @endif
              <li class="divider"></li> 
              <li>
                <a class="md-trigger" data-modal="logout-modal" href="/logout"><i class="icon-logout-1"></i> Logout</a>
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
          <a href="{{url('/projects')}}"><i class="fa fa-building text-darkblue-2"></i><span>Projects</span></a>
        </li>
        <li>
          <a href="{{url('/report')}}"><i class="fa fa-area-chart text-orange-4"></i><span>Reports Generation</span></a>
        </li>        
 
             <div class="clearfix"></div>
    </div>    
  </div>          
</div>
        <!-- Left Sidebar End -->        
        <!-- Start right content -->
        <div class="content-page" >
          <div class="content">
            @if (session()->has('flash_notification.message'))
              <div class="alert alert-{{ session('flash_notification.level') }}">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                  {!! session('flash_notification.message') !!}
              </div>
              @endif
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
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->        
        <!-- End right content -->

    <!-- End of page -->        
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{asset('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-detectmobile/detect.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
      <script src="{{asset('assets/libs/ios7-switch/ios7.switch.js')}}"></script>
      <script src="{{asset('assets/libs/fastclick/fastclick.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
      <script src="{{asset('assets/libs/nifty-modal/js/classie.js')}}"></script>
      <script src="{{asset('assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
      <script src="{{asset('assets/libs/sortable/sortable.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap-select2/select2.min.js')}}"></script>
      <script src="{{asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
      <script src="{{asset('assets/libs/pace/pace.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
      <script src="{{asset('assets/libs/jquery-icheck/icheck.min.js')}}"></script>

      <!-- Demo Specific JS Libraries -->
    <script src="{{asset('assets/libs/prettify/prettify.js')}}"></script>

    <script src="{{asset('assets/js/init.js')}}"></script>
    <!-- Page Specific JS Libraries -->
    <script src="{{asset('assets/libs/d3/d3.v3.js')}} "></script>
    <script src=" {{asset('assets/libs/rickshaw/rickshaw.min.js')}} "></script>
    <script src="{{asset('assets/libs/raphael/raphael-min.js')}} "></script>
    <script src="{{asset('assets/libs/morrischart/morris.min.js')}} "></script>
    <script src="{{asset('assets/libs/jquery-knob/jquery.knob.js')}} "></script>
    <script src="{{asset('assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}} "></script>
    <script src="{{asset('assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js')}} "></script>
    <script src="{{asset('assets/libs/jquery-clock/clock.js')}} "></script>
    <script src="{{asset('assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}} "></script>
    <script src="{{asset('assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}} "></script>
    <script src="{{asset('assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}} "></script>
    <script src="{{asset('assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}} "></script>
    <script src="{{asset('assets/js/apps/calculator.js')}} "></script>
    <script src="{{asset('assets/js/apps/todo.js')}} "></script>
    <script src="{{asset('assets/js/apps/notes.js')}} "></script>
    <script src=" {{url('assets/js/pages/index.js')}} "></script>
    @include('partials.javascripts')

    @yield('javascript')
    <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
    </body>
</html>