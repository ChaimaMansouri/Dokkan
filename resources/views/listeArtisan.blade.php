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
    @foreach($artisan as $art)
    <tr><td>{{$art->id}}</td><td><a href="/profil/{{$art->id}}" data-toggle="tooltip" data-placement="top" title="visiter le profil de {{$art->name}}">{{$art->name}}</a></td><td><a onclick="updateArtisan('{{$art->id}}');">éditer</a> | <a onclick="suppArtisan('{{$art->id}}');">supprimer</a></td></tr>
    @endforeach
  </table>
    
  
</div>
  
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
