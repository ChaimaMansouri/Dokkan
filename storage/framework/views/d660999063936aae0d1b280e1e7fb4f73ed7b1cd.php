<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo e($a->name); ?></h1>

          <div class="row placeholders">
            
          <div class="table-responsive">
           
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="/storage/photo/<?php echo e($a->photo_name); ?>" width="600" height="500" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4></h4>
              
          
            
          </div>

         
          </div>
        </div>

            </div>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>