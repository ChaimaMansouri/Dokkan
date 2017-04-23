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
    @foreach($type as $t)
    <tr><td>{{$t->id}}</td><td>{{$t->name}}</td><td><a onclick="return updateType('{{$t->id}}','{{$t->name}}');">éditer</a>  |  <a onclick="return suppType({{$t->id}});">supprimer</a>
    </td></tr>
    @endforeach
  </table>
    
  
</div>
  
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
