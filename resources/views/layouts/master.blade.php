
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
function addartisan()
  { 
    id=$(".up_photo").attr('id');
    address=$("#address").val();
    description=$("#description").val();
    name=$("#name").val();
    email=$("#email").val();
    tel=$("#tel").val();
    region=$("#region option:selected").val();

    idtype=$('#typeName option:selected').val();
   
    $.ajax({
      url:"/store",
      method:'POST',
      data:{
        'address':address,
        'description':description,
        'name':name,
        'email':email,
        'tel':tel,
        'photo_name':id,
        'region':region,
        'type':idtype
      },
 success:function(res){
console.log(res);
 document.location.href="/";

  },
  error:function(res){
    console.log(res);
   
  }
    });

  }
 
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
  

    $('[data-toggle="tooltip"]').tooltip();   

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
    $("#listeArtisan").click(function()
    {
      $("#mylistArtisanModal").modal({
  keyboard: true,
  show:true
});
    });
     $("#listeType").click(function()
    {
      $("#modallistetype").modal({
  keyboard: true,
  show:true
});
    });

});

function suppType(id)
{
  $.ajax({
    url:"/suppt",
    method:"post",
    data:{
      'id':id
    },
    success:function(res){
      if(res==="error"){
        $('#supperreur').modal({
  keyboard: true,
  show:true
});
      }
      else{

      var resultat= JSON.parse(res);
      var a="";
      $(resultat).each(function(index,item){

 a+="<tr><td>"+this.id+'</td><td>'+this.name+"</td><td><a onclick=\"return updateType('"+this.id+"','"+this.name+"');\">éditer</a> | <a onclick=\"return suppType('"+this.id+"');\">supprimer</a></td></tr>";
        });
      a="<tbody>"+a+"</tbody>";
      $("#tabletype").children().remove();
      $("#tabletype").append(a);
       $("a").css("cursor","pointer");
         }
       },
    error:function(res){
      console.log('error');
      console.log(res);
    }
  });
}
function updateType(id,name)
{
    $("#modallistetype").modal('hide');
   $("#mytypeModalupdate").modal({
  keyboard: true,
  show:true
});
  $("#TypeNameupdate").val(name);

$("#updateTypebtn").click(function(){
  nom=$("#TypeNameupdate").val();
  $.ajax({
    url:"/updatet",
    method:"post",
    data:{
      'id':id,
      'name':nom
    },
    success:function(res){
 
      $("#mytypeModalupdate").modal('hide');
      var resultat= JSON.parse(res);
      var a="";
      $(resultat).each(function(index,item){

 a+="<tr><td>"+this.id+"</td><td>"+this.name+"</td><td><a onclick=\"return updateType('"+this.id+"','"+this.name+"');\">éditer</a> | <a onclick=\"return suppType('"+this.id+"');\">supprimer</a></td></tr>";
        });
      a="<tbody>"+a+"</tbody>";

      $("#tabletype").children().remove();
      $("#tabletype").append(a);
       $("a").css("cursor","pointer");
      $("#modallistetype").modal({
  keyboard: true,
  show:true
});
   
    },
    error:function(res){
      console.log('error');
      console.log(res);
    }
  });
});

}
function suppArtisan(id)
{
  $.ajax({
    url:"/suppartisan",
    method:"post",
    data:{
      'id':id
    },
    success:function(res){
   
        var resultat= JSON.parse(res);
      var a="";
      $(resultat).each(function(index,item){

 a+="<tr><td>"+this.id+'</td><td><a href="/profil/'+this.id+'" data-toggle="tooltip" data-placement="top" title="visiter le profil de '+this.name+'"">'+this.name+'</a></td><td><a onclick="updateArtisan('+this.id+');">éditer</a> | <a onclick="suppArtisan('+this.id+');">supprimer</a></td></tr>';
        });
      a="<tbody>"+a+"</tbody>";

      $("#artisantable").children().remove();
      $("#artisantable").append(a);
       $("a").css("cursor","pointer");
      $("#mylistArtisanModal").modal({
  keyboard: true,
  show:true
});
      
    },
    error:function(res){
      console.log('error');
      console.log(res);
    }
  });
}
function  updateArtisan(id){
  $.ajax({
    url:"/getArtisan",
    method:"post",
    data:{
      'id':id
    },
    success:function(res){
      var r=JSON.parse(res);
        $("#mylistArtisanModal").modal('hide');
   $("#myModalupdate input[name='name']").val(r.name);
   $("#myModalupdate textarea[name='description']").val(r.description);
   $("#myModalupdate input[name='email']").val(r.email);
   $("#myModalupdate input[name='Address']").val(r.address);
   $("#myModalupdate input[name='tel']").val(r.tel);
   $("#myModalupdate select[name='regionup']").val(r.region_id);
   $("#myModalupdate select[name='typeup']").val(r.type_id);
  
   aph="<div class=\"dz-preview up_photo dz-processing dz-image-preview dz-success dz-complete\" id=\""+r.photo_name+"\"><div class=\"dz-image\"><img data-dz-thumbnail=\"\" alt=\""+r.photo_name+"\" src=\"/storage/photo/"+r.photo_name+"\" width=\"100%\" height=\"100%\"></div>  <div class=\"dz-details\"><div class=\"dz-size\"><span data-dz-size=\"\"><strong>56.8</strong> KB</span></div> <div class=\"dz-filename\"><span data-dz-name=\"\">"+r.photo_name+"</span></div> </div>  <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>  <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div><div class=\"dz-success-mark\">    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\"><title>Check</title> <defs></defs><g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\"> </g> </g></svg></div><a class=\"dz-remove\" href=\"javascript:undefined;\" data-dz-remove=\"\" onclick=\"removephoto('"+r.photo_name+"','"+r.id+"');\">Remove file</a></div>";

   $('#myModalupdate #divartisanupdate').children().remove();

   drop=" <form attribute=\""+r.id+"\" method=\"POST\" action=\"/uploadPhoto\"  class=\"dropzone dz-clickable\" id=\"dropzoneup\"></form><input type=\"file\" name=\"file\" class=\"dz-hidden-input\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">";
$('#myModalupdate #divartisanupdate').append(drop);
 $("#myModal #dropzoneup").dropzone({
url:"/uploadPhoto",
maxFiles:"1",
method : "post"
});

$('#myModalupdate #dropzoneup').append(aph);
   $('#myModalupdate').modal({
   keyboard: true,
  show:true
});
$('#myModalupdate').on('shown.bs.modal',function(){
$('body').attr('class','modal-open');
});

    },
    error:function(res){
      console.log('error');
      console.log(res);
    }
  });

}
function canceltype()
{
  $('#mytypeModalupdatedivartisan #TypeNameupdate').val("");
  $('#mytypeModal #TypeName').val("");

  $("#mytypeModalupdate").modal('hide');
  $("#mytypeModal").modal('hide');

}
function cancelartisan()
{
  id=$(".up_photo").attr('id');
 $("#myModal input").val("");
  $("#myModal textarea").val("");
   $("#myModal select[name='region']").val($("select[name='region'] option:first").val());
   $("#myModal select[name='type']").val($("select[name='type'] option:first").val());

 a="<form method=\"POST\" action=\"/uploadPhoto\"  class=\"dropzone dz-clickable\" id=\"dropzone\"><div class=\"dz-default dz-message\"><span>Drop Photo here to upload</span></div></form><input type=\"file\" name=\"file\" class=\"dz-hidden-input\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">";


 $("#myModal #divartisan").children().remove();
 $("#myModal #divartisan").append(a);
  $("#myModal #dropzone").dropzone({
url:"/uploadPhoto",
maxFiles:"1",
method : "post"
});
  
  if (id) {
    $.ajax({
      url:"/suppPhoto",
      method:"post",
      data:{
        'delPhoto':id
      },
      success:function(res){
        console.log(res);
      },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    });
  }
}
function cancelartisanupdate(){
  $("#myModalupdate input").val("");
  $("#myModalupdate textarea").val("");
   $("#myModalupdate select[name='region']").val($("select[name='region'] option:first").val());
   $("#myModalupdate select[name='type']").val($("select[name='type'] option:first").val());

 a="<form method=\"POST\" action=\"/uploadPhoto\"  class=\"dropzone dz-clickable\" id=\"dropzone\"><div class=\"dz-default dz-message\"><span>Drop Photo here to upload</span></div></form><input type=\"file\" name=\"file\" class=\"dz-hidden-input\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">";


 $("#myModalupdate #divartisan").children().remove();
 $("#myModalupdate #divartisan").append(a);
  $("#myModalupdate #dropzone").dropzone({
url:"/uploadPhoto",
maxFiles:"1",
method : "post"
});
  
}
function removephoto(idphoto,id)
{

         $.ajax({
                    url:"/suppPhoto",
                    method:"post",
                    data: {
                        'delPhoto':idphoto
                    },
                    success:function(res)
                    {
                        
                        $('#myModalupdate #divartisanupdate').children().remove();

   drop="<form method=\"POST\" action=\"/uploadPhoto\"  class=\"dropzone dz-clickable\" id=\"dropzoneup\" attribute=\""+id+"\"><div class=\"dz-default dz-message\"><span>Drop Photo here to upload</span></div></form><input type=\"file\" name=\"file\" class=\"dz-hidden-input\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">";
$('#myModalupdate #divartisanupdate').append(drop);
 $("#myModalupdate #dropzoneup").dropzone({
url:"/uploadPhoto",
maxFiles:"1",
method : "post"
});
},
error:function(res){
console.log('error');
console.log(res);
}
});
}
function upartisan(idart)
{
   id=$(".up_photo").attr('id');
   name=$("#myModalupdate input[name='name']").val();
   description=$("#myModalupdate textarea[name='description']").val();
   email=$("#myModalupdate input[name='email']").val();
   address=$("#myModalupdate input[name='Address']").val();
   tel=$("#myModalupdate input[name='tel']").val();
   region=$("#myModalupdate #regionup option:selected").val();
   idtype=$("#myModalupdate #typeup option:selected").val();
  
    $.ajax({
      url:"/upArtisan",
      method:'POST',
      data:{
        'address':address,
        'description':description,
        'name':name,
        'email':email,
        'tel':tel,
        'photo_name':id,
        'region':region,
        'type':idtype,
        'id':idart
      },
 success:function(res){

var resultat= JSON.parse(res);
      var a="";
      $(resultat).each(function(index,item){

 a+="<tr><td>"+this.id+'</td><td><a href="/profil/'+this.id+'" data-toggle="tooltip" data-placement="top" title="visiter le profil de '+this.name+'"">'+this.name+'</a></td><td><a onclick="updateArtisan('+this.id+');">éditer</a> | <a onclick="suppArtisan('+this.id+');">supprimer</a></td></tr>';
        });
      a="<tbody>"+a+"</tbody>";

      $("#artisantable").children().remove();
      $("#artisantable").append(a);
       $("a").css("cursor","pointer");
       $('#myModalupdate').modal('hide');
      $("#mylistArtisanModal").modal({
  keyboard: true,
  show:true
});

  },
  error:function(res){
    console.log(res);
   
  }
    });
}
</script>