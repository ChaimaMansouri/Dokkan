
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokkan | TunisiaNow </title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
          integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
          crossorigin=""/>
    <link href="/css/map.css" rel="stylesheet">
    <script src="/js/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery/jquery-ui.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
            integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
            crossorigin=""></script>
</head>

<body>
@include('layouts.accueil_navbar')
<div id="container">

    <!-- Partie mta3 el Navigation à Gauche -->
    <div class="col-sm-3 nav nav-sidebar sidebar" role="navigation">
        hello <br/>
        hello <br/>
        hello <br/>
        hello <br/>
        hello <br/>
        hello <br/>
        hello <br/>
        hello <br/>
    </div>
    <!-- Fin Partie mta3 el Navigation à Gauche -->

    <div class="col-sm-9" id="main" role="main">
    @include('layouts.homemap')
    </div>
</div>
</body>
</html>
