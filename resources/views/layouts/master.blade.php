
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokkan</title>
 
    <link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/dropzone.css">
   <link href="/css/dashboard.css" rel="stylesheet">
    <script src="/js/jquery/jquery.min.js"></script>
    <script src="/js/jquery/jquery-ui.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="/js/bootstrap.js"></script>
      
    

  </head>

  <body>

   @include('layouts.navbar')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <div class="accordion">
          <ul class="nav nav-sidebar">
            <li><a>Produit</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          @yield('produit')
           
          </ul>
          </div>
            <div class="accordion">
          <ul class="nav nav-sidebar">
            <li><a>Zone Géographique</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          @yield('zone')
           
          </ul>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            
          
            <a class="btn btn-primary myBtn" role="button">Button</a>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
<script>
$(document).ready(function()
{
  $(".accordion").accordion({
    animate:1000,
    active:1,
    collapsible:true,
    event:"click",
    heightStyle:"content"
  });
   $("a").css("cursor","pointer");
  $("#artisan").click(function(){
  
  $("#myModal").modal({
  keyboard: true,
  show:true
});
});
});
 $(".myBtn").click(function(){
  
  $("#myficheModal").modal({
  keyboard: true,
  show:true
});
});


</script>