<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Issum - Sevelen am Niederrhein</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Issum - Sevelen am Niederrhein" />
    <meta name="keywords" content="Sebastian, Herold, Sebastian Herold, Informatik, IT, Fachinformatiker, Entwickler, Developer, Fullstack, Webdevelopment, PHP, CSS, CSS3, SASS, HTML, HTML5, JavaScript, JS, Laravel, cakePHP, Issum, Sevelen, Geldern, Niederrhein, macOS, iOS" />

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:locale" content="de_DE" />
    <meta property="og:site_name" content="bastiherold.de" />
    <meta property="og:link" content="https://www.bastiherold.de" />

    <!-- Dublin Core Metadata -->
    <meta property="DC.title" content="" />
    <meta property="DC.creator" content="Sebastian Herold" />
    <meta property="DC.subject" content="Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Issum - Sevelen am Niederrhein" />
    <meta property="DC.description" content="Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Issum - Sevelen am Niederrhein" />
    <meta property="DC.language" content="de" />
    <meta property="DC.format" content="text/html" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/footer-distributed-with-address-and-phones.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- Google Font a. Custome CSS -->
    <link href='//fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet'>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel='stylesheet'>

    <!-- Cookie -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#000"
            },
            "button": {
                "background": "#f1d600"
          }
        }
     })});
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @yield('content')

  <footer class="footer-distributed">
      <div class="container">
          <div class="footer-left">
  
              <h3 class="handwrite">basti<span>herold</span>.de</h3>
              <p class="footer-links">
              <ol class="breadcrumb">
                  <li><a href="#top">Home</a></li>
                  <li><a href="#skills">Kompetenzen</a></li>
                  <li><a href="#contact">Kontakt</a></li>
                  <li><a href="#legal">Impressum</a></li>
                  <li><a v-on:click="console.log('vueClicked!')" href="#privacy">Datenschutz</a></li>
              </ol>
              </p>
  
              <p class="footer-company-name">bastiherold.de © {{ date('Y') }}</p>
  
          </div>
          <div class="footer-center">
  
              <div>
                  <a title="Location" href="https://goo.gl/maps/2Q1B78s55SN2" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                  <p id="address-footer">Enable JavaScript!</p>
              </div>
  
              <div>
                  <span class="personal-bubble">
                      <i class="fas fa-envelope"></i>
                      <p id="email-footer">Enable JavaScript!</p>
                  </span>
              </div>
  
          </div>
          <div class="footer-right">
  
              <div class="footer-company-about">
                  <span>Soziale Netzwerke</span>
                  <p>
                      Sie können mich unter folgenden Sozialen Netzwerken finden.
                      Jedoch präferiere ich eine Kontaktaufnahme per E-Mail oder Kontaktformular, da ich so schnellstmöglich reagieren kann.
                  </p>
              </div>
  
              <div class="footer-icons">
                  <a href="https://www.xing.com/profile/Sebastian_Herold24" target="_blank" title="Xing">
                      <i class="fab fa-xing"></i>
                  </a>
                  <a href="https://twitter.com/bastiherold" target="_blank" title="Twitter">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="https://github.com/bastiherold/" target="_blank" class="social-inactive" title="GitHub">
                      <i class="fab fa-github-alt"></i>
                  </a>
                  <a href="https://www.facebook.com/bastiherold.de" target="_blank" title="Facebook">
                      <i class="fab fa-facebook"></i>
                  </a>
              </div>
              <span id="toTop" style="display: inline;"><i class="fas fa-angle-double-up"></i></span>
          </div>
      </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="{{ asset('/js/scripts.js') }}"></script>
  
  <!-- GA -->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-37030774-5', 'auto');
      ga('send', 'pageview');
  </script>
  
  <script>
      document.getElementById('email-footer').textContent   = atob('YmFzdGloZXJvbGRAYmFzdGloZXJvbGQuZGU=');
      document.getElementById('address-footer').textContent = atob('RG9yZnN0ci4gMjAsIDQ3NjYxIElzc3Vt');
  </script>
  
</body>
</html>
