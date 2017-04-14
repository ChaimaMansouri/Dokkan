 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Dokkan</a>
        </div>
        <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="artisan">Ajouter Artisan</a></li>
            <?php echo $__env->make('artisan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <li><a id="type">Ajouter Type</a></li>
            <?php echo $__env->make('type', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <li><a href="#">Profil</a></li>
           
          </ul>
          
        </div>
        </div>
      </div>
    </nav>
