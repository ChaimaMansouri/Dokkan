<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModalupdate">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ajouter Artisan</h4>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-md-4">
        <div id="divartisanupdate">
          <form method="POST" action="/uploadPhoto"  class="dropzone dz-clickable" id="dropzoneup">
 
            </form>
           <input type="file" name="file" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
           </div>
           <br><br>
      
            <br>
          <select class="form-control" name="type"  required>
    <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
           </div>

           <div class="col-md-8">
           <label class="col-3 col-form-label">Nom:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="name" placeholder="Nom" required="required"><br></div>
    <br><label class="col-3 col-form-label">Description:</label><div class="col-5"><textarea class="form-control"  type="text" name="description" required></textarea>
    <br></div>
    <br><label class="col-3 col-form-label">E-mail:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="email" placeholder="exemple@gmail.com" required="required"><br></div>
     <br><label class="col-3 col-form-label">Adresse:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="Address" placeholder="23- chedli kallela lafayette" required="required" ><br></div>
    <br><label class="col-3 col-form-label">Telephone:</label>
    
    <div class="input-group col-5">
  <span class="input-group-addon" id="sizing-addon11">+216</span>
    <input class="form-control" type="text" name="tel" placeholder="23260645" pattern="\d{8}" required="required" ><br></div><br><br>
    <label class="col-3 col-form-label">Region:</label>
    <select class="form-control" name="region" required>
    <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($r->id); ?>"><?php echo e($r->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
           </div>
           </div>
      </div>
      <br> <br>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="return cancelartisanupdate();">Annuler</button>
        <button type="submit" class="btn btn-primary" onclick="return upartisan();">Sauvgarder</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
