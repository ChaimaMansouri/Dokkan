
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokkan</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/dropzone.css">
    <link href="/css/dashboard.css" rel="stylesheet">
    <script src="/js/jquery/jquery.min.js"></script>
    <script src="/js/jquery/jquery-ui.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="/js/bootstrap.js"></script>



</head>

<body>

@include('layouts.accueil_navbar')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        </div>
    </div>
</div>

@yield ('additions')

</body>
</html>
