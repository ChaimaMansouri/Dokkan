<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ajouter Artisan</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-4">
          <form method="POST" action="/uploadPhoto"  class="dropzone dz-clickable" >
          
            </form>
           <input type="file" name="file" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
           </div>

           <div class="col-md-8">
           <label class="col-3 col-form-label">Nom:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="name" placeholder="Nom" required="required"><br></div>
    <br><label class="col-3 col-form-label">Description:</label><div class="col-5"><textarea class="form-control"  type="text" name="description" required></textarea>
    <br></div>
     <br><label class="col-3 col-form-label">Addresse:</label>
    <div class="col-5">
    <input class="form-control" type="text" name="Address" placeholder="23- chedli kallela lafayette" required="required"><br></div>
    <label class="col-3 col-form-label">Region:</label>
    <select class="form-control">
    <option>Ariana</option>
    <option>Béja</option>
<option>Ben Arous</option>
<option>Bizerte</option>
<option>Gabes</option>
<option>Gafsa</option>
<option>Jendouba</option>
<option>Kairouan</option>
<option>Kasserine</option>
<option>Kebili</option>
<option>La Manouba</option>
<option>Le Kef<option>
<option>Mahdia</option>
<option>Médenine</option>
<option>Monastir</option>
<option>Nabeul</option>
<option>Sfax</option>
<option>Sidi Bouzid</option>
<option>Siliana</option>
<option>Sousse</option>
<option>Tataouine</option>
<option>Tozeur</option>
<option>Tunis</option>
<option>Zaghouan</option>

    </select>
           </div>
      </div>
      <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" onclick="return addartisan()">Sauvgarder</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
 
  function addartisan()
  {

  }
</script>