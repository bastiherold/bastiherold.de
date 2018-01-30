<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Geldern am Niederrhein</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Geldern am Niederrhein" />
    <meta name="keywords" content="Sebastian, Herold, Sebastian Herold, Informatik, IT, Fachinformatiker, PHP, CSS, CSS3, SASS, HTML, HTML5, JavaScript, JS, Laravel, cakePHP, Geldern, Niederrhein, macOS, iOS" />

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:locale" content="de_DE" />
    <meta property="og:site_name" content="bastiherold.de" />
    <meta property="og:type" content="website" />
    <meta property="og:link" content="https://www.bastiherold.de" />

    <!-- Dublin Core Metadata -->
    <meta property="DC.title" content="" />
    <meta property="DC.creator" content="Sebastian Herold" />
    <meta property="DC.subject" content="Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Geldern am Niederrhein" />
    <meta property="DC.description" content="Sebastian Herold, Fachinformatiker für Anwendungsentwicklung aus Geldern am Niederrhein" />
    <meta property="DC.language" content="de" />
    <meta property="DC.format" content="text/html" />

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
    <link href='css/app.css' rel='stylesheet'>

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

<nav id="top" class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="#!/bin/bash"><i class="fa fa-terminal"></i><span class="js_project-text" data-text="Project Name">$ bastiherold.de</span></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="nav_type" class="nav navbar-nav navbar-right">
                <li title="Home"><a href="#top"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li title="Home"><a href="#skills"><i class="fa fa-code" aria-hidden="true"></i> Kompetenzen</a></li>
                <li title="Kontakt"><a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i> Kontakt</a></li>
                <li title="Impressum"><a href="#legal"><i class="fa fa-gavel" aria-hidden="true"></i> Impressum</a></li>
            </ul>

        </div>
    </div>
</nav>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('status'))
    <div class="alert alert-success">
        <ul>
            <li>
                {{ session()->get('status') }}
            </li>
        </ul>
    </div>
@endif

<section id="home" class="">

    <div class="container table-container">

        <div class="row table-cell">

            <div class="col-xs-12 col-sm-12 col-md-12">


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-header center-middle"><h2>Willkommen</h2></div>
                </div>

                <div class="col-xs-12 col-xs-offset-0 col-sm-3 col-sm-offset-0 col-md-offset-0 col-md-3 about-image-frame">
                    <div class="about-image"></div>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9">
                    <p class="about-info-text">
                        Hallo, mein Name ist Sebastian Herold und ich komme aus Geldern am Niederrhein. Seit nun beinah zwanzig Jahren beschäftige ich mich mit dem Thema Informationstechnologie im Bereich Hard- und Software.
                    </p>
                </div>


            </div>

        </div>

    </div>

</section>

<section id="skills" class="">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="container center">

                    <div class="col-md-12">
                        <div class="page-header center-middle"><h2>Kompetenzen <a href="#skills" class="section-link-icon"><i class="fa fa-link" aria-hidden="true"></i></a></h2></div>
                    </div>

                    <div class="row center">

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="skills-icon text-center">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="text-center skills-header">Programmieren</div>
                            <ul class="skills-list well">
                                <li>
                                    PHP (OOP)<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    SQL<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    JavaScript<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    TypeScript<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                </li>
                                <li>
                                    HTML5 / CSS3<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="skills-icon text-center">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="text-center skills-header">Frameworks / CMS</div>
                            <ul class="skills-list well">
                                <li>
                                    Laravel 5<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                </li>
                                <li>
                                    jQuery<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    Angular 2+<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i>
                                </li>
                                <li>
                                    Bootstrap<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="skills-icon text-center">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text-center skills-header">Anwendungen</div>
                            <ul class="skills-list well">
                                <li>
                                    JetBrains PHPStorm<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                </li>
                                <li>
                                    Sublime Text 3<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    Atlassian Suite / Redmine<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                </li>
                                <li>
                                    GIT / Subversion<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="skills-icon text-center">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="text-center skills-header">Betriebssysteme</div>
                            <ul class="skills-list well">
                                <li>
                                    Windows<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    macOS<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    iOS, Android<br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    Linux <span class="sub text-muted">(Debian-Derivate)</span><br>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                        </div>
                        <!--
                                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                                        <div class="skills-icon text-center">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                        <div class="text-center skills-header">Technologien</div>
                                                        <ul class="skills-list well">
                                                            <li>
                                                                JSON<br>
                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                            </li>
                                                            <li>
                                                                REST<br>
                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                                            </li>
                                                            <li>
                                                                XML<br>
                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                                        <div class="skills-icon text-center">
                                                            <i class="fa fa-leaf"></i>
                                                        </div>
                                                        <div class="text-center skills-header">Interessen / Freizeit</div>
                                                        <ul class="skills-list well">
                                                            <li>Lesen</li>
                                                            <li>Schwimmen</li>
                                                            <li>
                                                                Angular 2<br>
                                                                <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                        -->
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<section id="contact" class="">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="container center">

                    <div class="row center-middle">

                        <div class="col-sx-12 col-sm-12 col-md-12">
                            <div class="page-header center-middle"><h2>Kontakt <a href="#contact" class="section-link-icon"><i class="fa fa-link" aria-hidden="true"></i></a></h2></div>
                        </div>

                        <div class="col-sx-12 col-sm-12 col-md-12 contactBoxInfoText">
                            <p>
                                Sie haben einen Fehler gefunden oder einfach nur eine Frage?
                                Dann kontaktieren Sie mich doch bitte.
                            </p>
                        </div>

                        <div class="col-sx-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 contactBoxSuccess">
                            <div class="contact_text">
                                <p>
                                    <span class="contact_success_headline"><i class="fa fa-check-circle"></i> Nachricht wurde gesendet!</span>
                                    <br><br>
                                    Ihre Nachricht wurde erfolgreich übermittelt.<br>Ich werde mich so schnell wie möglich mit Ihnen in Verbindung setzen.
                                </p>
                            </div>
                        </div>

                        <div class="col-sx-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 contact-form">
                            <form method="post" action="{{ route('messages.store') }}">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="text" value="{{ old('senderName') }}" name="senderName" required class="form-control" placeholder="Ihr Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{ old('email') }}" name="email" required class="form-control" placeholder="Ihre E-Mail Adresse">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{ old('subject') }}" name="subject" required class="form-control" placeholder="Betreff">
                                </div>
                                <div class="form-group">
                                    <textarea name="body" class="form-control" rows="3" placeholder="Nachricht">{{ old('senderName') }}</textarea>
                                </div>
                                <button type="submit" class="btn contact-btn">Nachricht abschicken</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<section style="display: none;" id="legal" class="container center">
    <div class='impressum'>
        <h1>Impressum</h1>
        <p>Angaben gemäß § 5 TMG</p>
        <p>Sebastian Herold<br>
            Dorfstr. 20<br>
            47661 Issum <br>
        </p>
        <p>
            <strong>Vertreten durch: </strong><br>
            Sebastian Herold<br>
        </p>
        <p>
            <strong>Kontakt:</strong> <br>
            E-Mail: bastiherold@bastiherold.de</br>

        </p>
        <p>
            <strong>Haftungsausschluss: </strong><br><br>
            <strong>Haftung für Inhalte</strong><br><br>
            Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.<br><br><strong>Haftung für Links</strong><br><br>
            Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.<br><br><strong>Urheberrecht</strong><br><br>
            Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.<br><br>
            <strong>Datenschutz</strong><br><br>
            Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. <br>
            Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich. <br>
            Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.<br>
            <br><br><strong>Google Analytics</strong><br><br>
            Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (''Google''). Google Analytics verwendet sog. ''Cookies'', Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglicht. Die durch den Cookie erzeugten Informationen über Ihre Benutzung diese Website (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten der Google in Verbindung bringen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.
        </p><br>
        Website Impressum erstellt durch <a href="http://www.impressum-generator.de">Impressum Generator Hasselbach</a>
    </div>
</section>

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
            </ol>
            </p>

            <p class="footer-company-name">bastiherold.de © 2017</p>

        </div>
        <div class="footer-center">

            <div>
                <a title="Location" href="https://goo.gl/maps/2Q1B78s55SN2" target="_blank"><i class="fa fa-map-marker"></i></a>
                <p id="address-footer">Enable JavaScript!</p>
            </div>

            <div>
                <span class="personal-bubble">
                    <i class="fa fa-envelope"></i>
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
                    <i class="fa fa-xing"></i>
                </a>
                <a href="https://twitter.com/bastiherold" target="_blank" title="Twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://github.com/bastiherold/" target="_blank" class="social-inactive" title="GitHub">
                    <i class="fa fa-github-alt"></i>
                </a>
                <a href="https://www.facebook.com/bastiherold.de" target="_blank" title="Facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </div>
            <span id="toTop" style=""><i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--  <script src="js/app.js"></script>  --}}

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
