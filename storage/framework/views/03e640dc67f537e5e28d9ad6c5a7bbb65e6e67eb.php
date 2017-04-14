
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

   <?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <div class="accordion">
          <ul class="nav nav-sidebar">
            <li><a>Type Produit</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a><?php echo e($t->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          </ul>
          </div>
            <div class="accordion">
          <ul class="nav nav-sidebar">
            <li><a>Zone Géographique</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><a><?php echo e($r->name); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          </ul>
          </div>
        </div>
    <?php echo $__env->yieldContent('content'); ?>
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