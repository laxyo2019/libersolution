<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>{{ config('app.name', 'Liber') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{route('admin')}}">Liber</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-lg"></i>{{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Kishan</p>
          <p class="app-sidebar__user-designation">Backend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('admin')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview {{ Request::segment(2) == 'home' ? 'is-expanded ' : '' || Request::segment(2) == 'product-and-services' ? 'is-expanded ' : '' || Request::segment(2) == 'platform-and-framework' ? 'is-expanded ' : ''}}"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Home</span><i class="treeview-indicator fa fa-angle-right" ></i></a>

          <ul class="treeview-menu " >
            <li class={{call_user_func_array('Request::is', (array)['/admin/home*']) ? 'active_subtab' : ''}}><a class="treeview-item active" href="{{url('admin/home')}}"><i class="icon fa fa-podcast"></i> SlideBar Content</a>
            </li>

            <li class={{call_user_func_array('Request::is', (array)['product-and-services']) ? 'active_subtab' : ''}}><a class="treeview-item" href="{{url('/admin/product-and-services')}}" ><i class="fa fa-shopping-basket"></i> Product And Services</a></li>

            <li class={{call_user_func_array('Request::is', (array)['/admin/platform-and-framework*']) ? 'active_subtab' : ''}}><a class="treeview-item" href="{{url('/admin/platform-and-framework')}}" ><i class="fa fa-sitemap"></i> Platform and Fromeworks</a></li>

          </ul>
        </li>
        <li class="treeview {{call_user_func_array('Request::is', (array)['/admin/aboutus*']) ? 'is-expanded' : ''}}"><a class="app-menu__item " href="{{url('/admin/aboutus')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">About Us</span></a></li>
        <li><a class="app-menu__item" href="{{url('/admin/contactus')}}"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">Contact Us</span></a></li>

        <li><a class="app-menu__item" href="{{url('/admin/our-products')}}"><i class="app-menu__icon fab fa-product-hunt"></i><span class="app-menu__label">Our Products</span></a></li>

        <li><a class="app-menu__item" href="{{url('/admin/our-services')}}"><i class="app-menu__icon fa fa-rss-square"></i><span class="app-menu__label">Our Services</span></a></li>

        <li><a class="app-menu__item" href="{{url('/admin/career')}}"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Career Form Data</span></a></li>

        <li><a class="app-menu__item" href="{{url('/admin/contact-data')}}"><i class="app-menu__icon fa fa-address-card"></i><span class="app-menu__label">Contact Form Data</span></a></li>

        <li><a class="app-menu__item" href="{{url('admin/footer-contents')}}"><i class="app-menu__icon  fa fa-bars"></i><span class="app-menu__label">All Footer Contents</span></a></li>
       {{--  <li><a class="app-menu__item" href="{{url('admin/footer-contents')}}"><i class="app-menu__icon  fa fa-bars"></i><span class="app-menu__label">Logos</span></a></li> --}}
         <li class="treeview {{ Request::segment(2) == 'logo' ? 'is-expanded ' : '' || Request::segment(2) == 'logo' ? 'is-expanded ' : '' }}"><a class="app-menu__item " href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Logos</span><i class="treeview-indicator fa fa-angle-right" ></i></a>

          <ul class="treeview-menu " >
            <li class={{call_user_func_array('Request::is', (array)['/admin/logo*']) ? 'active_subtab' : ''}}><a class="treeview-item active" href="{{url('admin/logo')}}"><i class="icon fa fa-podcast"></i> Header Logo</a>
            </li>

          </ul>
        </li>

        {{-- <li><a class="app-menu__item"  href="{{route('logout')}}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li> --}}
      <li><a class="app-menu__item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out fa-lg"></i>{{ __('Logout') }}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

      </ul>
    </aside>

    @yield('content')
   
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
      <script type="text/javascript" src="{{ asset('js/plugins/chart.js')}}"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
  <script>
      $(document).ready(function(){
      $('#ClientsTable').DataTable(); 
  });
  </script>
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
    <script>
    $(".treeview-menu").click(function(e){
      // e.preventDefault(); 
      $("#togal").toggle(500);
      $("#togal").show()
    });
  
</script>
  </body>
</html>