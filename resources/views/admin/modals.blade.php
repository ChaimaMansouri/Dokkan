<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="addModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ajouter Admin</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 add_form">
                        <h6 id="response"></h6>
                        <label class="col-3 col-form-label">Nom Utilisateur:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="username" id="username" placeholder="Nom Utilisateur" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Mot De Passe:</label>
                        <div class="col-5">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Mot De Passe" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Prenom:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Prenom" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Nom:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Nom" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">E-mail:</label>
                        <div class="col-5">
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required="required" id="email"><br></div>
                        <br><label class="col-3 col-form-label">Addresse:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="adr" placeholder="Addresse" required="required" id="adr"><br></div>
                        <br><label class="col-3 col-form-label">Telephone:</label>

                        <div class="input-group col-5">
                            <span class="input-group-addon" id="sizing-addon1">+216</span>
                            <input class="form-control" type="text" name="tel" placeholder="Numero Telephone" pattern="\d{8}" required="required" id="tel"><br></div><br><br>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="add" name="add">Sauvgarder</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modifyModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modifier Admin</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 modify_form">
                        <label class="col-3 col-form-label">Nom Utilisateur:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="username" id="username" placeholder="Nom Utilisateur" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Mot De Passe:</label>
                        <div class="col-5">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Mot De Passe" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Prenom:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Prenom" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Nom:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Nom" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">E-mail:</label>
                        <div class="col-5">
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required="required" id="email"><br></div>
                        <br><label class="col-3 col-form-label">Addresse:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="adr" placeholder="Addresse" required="required" id="adr"><br>
                        </div>
                        <br><label class="col-3 col-form-label">Telephone:</label>

                        <div class="col-5">
                            <input class="form-control" type="text" name="tel" placeholder="Numero Telephone" pattern="\d{8}" required="required" id="tel"><br>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="modify" name="modify">Sauvgarder</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="deleteModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modifier Admin</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 delete_form">
                        <h6 id="response"></h6>
                        <label class="col-3 col-form-label">Nom Utilisateur:</label>
                        <div class="col-5">
                            <input class="form-control" type="text" name="username" id="username" placeholder="Nom Utilisateur" required="required"><br></div>
                        <br>
                        <label class="col-3 col-form-label">Mot De Passe:</label>
                        <div class="col-5">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Mot De Passe" required="required"><br></div>
                        <br>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="delete" name="delete">Sauvgarder</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript" src="/js/admin/tool.js">

</script>