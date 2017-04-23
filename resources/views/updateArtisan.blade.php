<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModalupdate">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mettre à jour Artisan</h4>
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
          <select class="form-control" name="typeup" id="typeup" required>
    @foreach($type as $t)
    <option value="{{$t->id}}">{{$t->name}}</option>
    @endforeach
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
    <select class="form-control" name="regionup" id="regionup" required>
    @foreach($region as $r)
    <option value="{{$r->id}}">{{$r->name}}</option>
    @endforeach
    </select>
    
           </div>
           </div>
      </div>
      <br> <br>  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="return cancelartisanupdate();">Annuler</button>
        <button type="submit" class="btn btn-primary" onclick="return upartisan($('#dropzoneup').attr('attribute'));">Sauvgarder</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
