
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

   @include('layouts.navbar')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <div class="accordion">
          <ul class="nav nav-sidebar">
            <li><a>Type Produit</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          @foreach($type as $t)
<li><a>{{$t->name}}</a></li>
@endforeach
           
          </ul>
          </div>
            <div class="accordion">
          <ul class="nav nav-sidebar">
            <li><a>Zone Géographique</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          @foreach($region as $r)
 <li><a>{{$r->name}}</a></li>
@endforeach
           
          </ul>
          </div>
        </div>
    @yield('content')
      </div>
    </div>

  </body>
</html>
<script>
 function addType() {
    nom=$('#TypeName').val();
    console.log(nom);
    $.ajax({
      url:"storeType",
      method:"post",
      data:{
        'name':nom
      },
      success:function(res){
        console.log(res);
        location.reload();
      },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    });
    
  }
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
    $("#type").click(function(){
  
  $("#mytypeModal").modal({
  keyboard: true,
  show:true
});
});
});


</script>