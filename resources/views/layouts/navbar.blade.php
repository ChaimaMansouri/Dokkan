 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Dokkan</a>
        </div>
        <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
            <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <label>Artisan</label> <i class="glyphicon glyphicon-plus"></i>
  </a>
             <div class="dropdown-menu">
<a class="btn" id="artisan">Ajouter Artisan</a>
  <a class="btn" id="listeArtisan">Lister Artisan</a>
  </div>
            </li>
            @include('artisan')
           @include('listeArtisan')
           @include('updateArtisan')
            <li>
                  <a class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <label><strong>Type</strong></label> <i class="glyphicon glyphicon-plus"></i>

  </a>
             <div class="dropdown-menu">
<a class="btn" id="type">Ajouter Type</a>
  <a class="btn" id="listeType">Lister Type</a>
  </div>
            </li>
            @include('type')
            @include('listeType')
            @include('updateType')
            @include('erreursupp')
           
          </ul>
          
        </div>
        </div>
      </div>
    </nav>
