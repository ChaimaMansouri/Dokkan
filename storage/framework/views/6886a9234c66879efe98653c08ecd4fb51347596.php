<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="mylistArtisanModal" name="modallisteartisan">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Liste des Artisans</h4>
      </div>
      <div class="modal-body">
      <br>
     
      <div class="panel panel-default">
  
  <table class="table panel-heading">
  <tr><th>#</th><th>Nom</th><th>Action</th></tr>
   </table>
   
   <table class="table" id="artisantable">
    <?php $__currentLoopData = $artisan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr><td><?php echo e($art->id); ?></td><td><a href="/profil/<?php echo e($art->id); ?>" data-toggle="tooltip" data-placement="top" title="visiter le profil de <?php echo e($art->name); ?>"><?php echo e($art->name); ?></a></td><td><a onclick="updateArtisan('<?php echo e($art->id); ?>');">éditer</a> | <a onclick="suppArtisan('<?php echo e($art->id); ?>');">supprimer</a></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
    
  
</div>
  
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
