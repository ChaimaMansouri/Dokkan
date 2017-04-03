<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ajouter Artisan</h4>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-md-4">
          <form method="POST" action="/uploadPhoto"  class="dropzone dz-clickable" id="dropzone">
 
            </form>
           <input type="file" name="file" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
           <br><br>
      
            <br>
         
           </div>

           <div class="col-md-8">
           <label class="col-3 col-form-label">Nom:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="name" id="name" placeholder="Nom" required="required"><br></div>
    <br><label class="col-3 col-form-label">Description:</label><div class="col-5"><textarea class="form-control"  type="text" name="description" id="description" required></textarea>
    <br></div>
    <br><label class="col-3 col-form-label">E-mail:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="email" placeholder="exemple@gmail.com" required="required" id="email"><br></div>
     <br><label class="col-3 col-form-label">Addresse:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="Address" placeholder="23- chedli kallela lafayette" required="required" id="address"><br></div>
    <br><label class="col-3 col-form-label">Telephone:</label>
    
    <div class="input-group col-5">
  <span class="input-group-addon" id="sizing-addon1">+216</span>
    <input class="form-control" type="text" name="tel" placeholder="23260645" pattern="\d{8}" required="required" id="tel"><br></div><br><br>
    <label class="col-3 col-form-label">Region:</label>
    <select class="form-control" name="region" id="region" required>
    <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option><?php echo e($r->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
           </div>
           </div>
      </div>
      <br> <br>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary" onclick="return addartisan();">Sauvgarder</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
 
  function addartisan()
  {
    id=$(".up_photo").attr('id');
    address=$("#address").val();
    description=$("#description").val();
    name=$("#name").val();
    email=$("#email").val();
    tel=$("#tel").val();
    region=$("#region").val();
   

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
        'region':region
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
</script>