<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="mytypeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ajouter Type</h4>
      </div>
      <div class="modal-body">
      <br><label class="col-3 col-form-label">Type:</label>
    <div class="col-5">
   
    <input class="form-control" type="text" name="type" id="TypeName" required="required" id="email">
  <br></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="return canceltype();">Annuler</button>
        <button type="submit" class="btn btn-primary" onclick="return addType()">Sauvgarder</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
