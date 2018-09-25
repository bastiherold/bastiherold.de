<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bastiherold.de - Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/styles.css') }}">
</head>

<body>

  @include('dashboard.partials.header.header')

  <div class="container">
    <div class="columns">

      <div class="column is-3">
        @include('dashboard.partials.aside-menu.aside-menu')
      </div>

      <div class="column is-9">
        {{ Breadcrumbs::render(\Request::route()->getName()) }}
        @yield('content')
      </div>

    </div>
  </div>
  <script async type="text/javascript" src="{{ asset('dashboard/js/burger.js') }}"></script>
</body>

</html>
