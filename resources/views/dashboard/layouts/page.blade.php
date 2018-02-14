{{--  
  * CoreUI - Open Source Bootstrap Admin Template
  * @version v1.0.10
  * @link http://coreui.io
  * Copyright (c) 2018 creativeLabs Łukasz Holeczek
  * @license MIT  
--}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
   <meta name="author" content="Łukasz Holeczek">
   <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
   <link rel="shortcut icon" href="/dashboard/img/favicon.png">
   <title>CoreUI - Open Source Bootstrap Admin Template</title>
 
   {{--  Icons  --}}
   <link href="{{ asset('dashboard/vendors/css/font-awesome.min.css') }}" rel="stylesheet">
   <link href="{{ asset('dashboard/vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">
 
   {{--  Main styles for this application  --}}
   <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
   {{--  Styles required by this views  --}}
 
 </head>
 
{{--  
 BODY options, add following classes to body to change options
 
 // Header options
 1. '.header-fixed'					- Fixed Header
 
 // Brand options
 1. '.brand-minimized'       - Minimized brand (Only symbol)
 
 // Sidebar options
 1. '.sidebar-fixed'					- Fixed Sidebar
 2. '.sidebar-hidden'				- Hidden Sidebar
 3. '.sidebar-off-canvas'		- Off Canvas Sidebar
 4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
 5. '.sidebar-compact'			  - Compact Sidebar
 
 // Aside options
 1. '.aside-menu-fixed'			- Fixed Aside Menu
 2. '.aside-menu-hidden'			- Hidden Aside Menu
 3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu
 
 // Breadcrumb options
 1. '.breadcrumb-fixed'			- Fixed Breadcrumb
 
 // Footer options
 1. '.footer-fixed'					- Fixed footer  
--}}
 
 <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
   
  @include('dashboard.partials.header.header')
 
   <div class="app-body">
    
    @include('dashboard.partials.sidebar.sidebar')
 
     {{--  Main content  --}}
     <main class="main">
 
       {{--  Breadcrumb  --}}
       @include('dashboard.partials.breadcrumbs.breadcrumbs')
 
       <div class="container-fluid">
 
         <div class="animated fadeIn">
           @yield('content')
         </div>
 
       </div>
       <!-- /.conainer-fluid -->
     </main>
 
     @include('dashboard.partials.aside-menu.aside-menu')
 
   </div>
 
   @include('dashboard.partials.footer.footer')
 
   <!-- Bootstrap and necessary plugins -->
   <script src="{{ asset('dashboard/vendors/js/jquery.min.js') }}"></script>
   <script src="{{ asset('dashboard/vendors/js/popper.min.js') }}"></script>
   <script src="{{ asset('dashboard/vendors/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('dashboard/vendors/js/pace.min.js') }}"></script>
 
   <!-- Plugins and scripts required by all views -->
   <script src="{{ asset('dashboard/vendors/js/Chart.min.js') }}"></script>
 
   <!-- CoreUI main scripts -->
 
   <script src="{{ asset('dashboard/js/app.js') }}"></script>
 
   <!-- Plugins and scripts required by this views -->
 
   <!-- Custom scripts required by this view -->
   <script src="{{ asset('dashboard/js/views/main.js') }}"></script>
 
 </body>
 </html>
