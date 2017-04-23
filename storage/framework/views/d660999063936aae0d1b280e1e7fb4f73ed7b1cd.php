<?php $__env->startSection('content'); ?>
<div class="container">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo e($a->name); ?></h1>

          <div class="row placeholders">
            
          <div class="table-responsive">
           
            <div class="col-xs-6 col-sm-3 placeholder">
            <br>
              <img src="/storage/photo/<?php echo e($a->photo_name); ?>" width="600" height="500" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4></h4>
              
          
            
          </div>

          <div class="table-responsive"> 
          <br>
          <div class="col-md-8" style="float:right">
          <div class="panel">
          <label>Type:</label>
          <?php echo e($a->type->name); ?>

         
          </div>
          <br>
          <div class="panel">
          <label>Description:</label>
          	<?php echo e($a->description); ?>

          	</div>
          	<br>
          	
          	<div class="panel">
          	<label>Addresse:</label>
          	<?php echo e($a->address); ?>

          	</div>
          	<br>
          	<div class="panel">
          	<label>E-mail:</label>
          	<?php echo e($a->email); ?>

          	</div>
          	<br>
          	<div class="panel">
          	<label>Telephone:</label>
          	<?php echo e($a->tel); ?>

          	</div>
          	</div>
          </div>
         </div>
          </div>
        </div>

            </div>
            </div>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>