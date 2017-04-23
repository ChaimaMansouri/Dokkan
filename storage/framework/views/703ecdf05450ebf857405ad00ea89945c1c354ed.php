<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modallistetype">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Liste des Types</h4>
      </div>
      <div class="modal-body">
      <br>
     
      <div class="panel panel-default">
  
  <table class="table panel-heading">
  <tr><th>#</th><th>Nom</th><th>Action</th></tr>
   </table>
   
   <table class="table" id="tabletype">
    <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr><td><?php echo e($t->id); ?></td><td><?php echo e($t->name); ?></td><td><a onclick="return updateType('<?php echo e($t->id); ?>','<?php echo e($t->name); ?>');">éditer</a>  |  <a onclick="return suppType(<?php echo e($t->id); ?>);">supprimer</a>
    </td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
    
  
</div>
  
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
