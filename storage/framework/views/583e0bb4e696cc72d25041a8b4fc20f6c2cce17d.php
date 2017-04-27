 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Dokkan</a>
        </div>
        <div class="container">
            <?php echo $__env->make('admin.modals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <?php echo $__env->yieldContent('admin_management'); ?>
              </li>
            <li>
            <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <label>Artisan</label> <i class="glyphicon glyphicon-plus"></i>
  </a>
             <div class="dropdown-menu">
<a class="btn" id="artisan">Ajouter Artisan</a>
  <a class="btn" id="listeArtisan">Lister Artisan</a>
  </div>
            </li>
            <?php echo $__env->make('artisan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <?php echo $__env->make('listeArtisan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <?php echo $__env->make('updateArtisan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <li>
                  <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <label><strong>Type</strong></label> <i class="glyphicon glyphicon-plus"></i>

  </a>
             <div class="dropdown-menu">
<a class="btn" id="type">Ajouter Type</a>
  <a class="btn" id="listeType">Lister Type</a>
  </div>
            </li>
            <?php echo $__env->make('type', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('listeType', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('updateType', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('erreursupp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           
          </ul>
          
        </div>
        </div>
      </div>
    </nav>
