<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href=""{{asset("/assets/images/favicon.png")}}
    />
    <!-- Custom CSS -->
    <link href="{{asset("/assets/libs/flot/css/float-chart.css")}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset("/dist/css/style.min.css")}}"rel="stylesheet" />
    
  </head>


 
  

  <body>

    @include("adminPanel.TopbarHeader")
    @include("adminPanel.SidebarNavigation")
  
    @yield('content')
  
    @include("Footer.footer")

    
    <script src="{{asset("/assets/libs/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset("/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
    <script src="{{asset("/assets/extra-libs/sparkline/sparkline.js")}}"></script>
    <!--Wave Effects -->
    <script src="{{asset("/dist/js/waves.js")}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset("/dist/js/sidebarmenu.js")}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset("/dist/js/custom.min.js")}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{asset("/dist/js/pages/dashboards/dashboard1.js")}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset("/assets/libs/flot/excanvas.js")}}"></script>
    <script src="{{asset("/assets/libs/flot/jquery.flot.js")}}"></script>
    <script src="{{asset("/assets/libs/flot/jquery.flot.pie.js")}}"></script>
    <script src="{{asset("/assets/libs/flot/jquery.flot.time.js")}}"></script>
    <script src="{{asset("/assets/libs/flot/jquery.flot.stack.js")}}"></script>
    <script src="{{asset("/assets/libs/flot/jquery.flot.crosshair.js")}}"></script>
    <script src="{{asset("/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js")}}"></script>
    <script src="{{asset("/dist/js/pages/chart/chart-page-init.js")}}"></script>
  </body>
</html>