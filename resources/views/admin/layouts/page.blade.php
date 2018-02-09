<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Dashboard Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>

  @include('admin.partials.navbar')

  <div class="container-fluid">
    <div class="row">

      @include('admin.partials.sidebar')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        @yield('content')
      </main>
      
    </div>
  </div>

</body>
</html>
