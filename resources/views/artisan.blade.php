<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
    <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
              <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title">Ajouter Artisan</h4>
              </div>
              <div class="modal-body">
                    <div class="row">
                           <div class="col-md-4">
                                <div id="divartisan">
                                    <form method="POST" action="/uploadPhoto"  class="dropzone dz-clickable" id="dropzone">
                                     </form>
                                    <input type="file" name="file" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
                                </div>
                                <br><br><br>
                                <select class="form-control" name="type" id="typeName" required>
                                    @foreach($type as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
								<br><br><br>
							
                                <div class="input-group">
                                    <span class="input-group-addon">X</span>
                                    <input class="form-control" type="text" name="geoX" id="geoX" placeholder="0.0000"required" id="geoX" required>
                                
                                <span class="input-group-addon">Y</span>
                                <input class="form-control" type="text" name="geoY" id="geoY" placeholder="0.0000"required" id="geoY" required>
                                </div>
							
								<br><br>
								<div id="mapid" class="col-sm-12" style="height:250px;position:relative;"></div>
								<script type="text/javascript">
								var MyMap = L.map('mapid').setView([34.0002968, 10.0803333], 7);
								function onMapClick(e) {
								document.getElementById("geoX").value = e.latlng.lat.toString();
								document.getElementById("geoY").value = e.latlng.lng.toString();
								;}
								L.tileLayer ('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZ2hhaXRodHJvdWRpIiwiYSI6ImNqMXcxZG9kcDAwMHoycXMzZGY2bTNrZnAifQ.j1L_293D_BTc-JUI4B18lw',
								{
								attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> Développé par TunisiaNow, Imagery © <a href="http://mapbox.com">Mapbox</a>',
								maxZoom: 18
								}
								).addTo(MyMap);
								MyMap.on('click', onMapClick);
								</script>
                            </div>

                           <div class="col-md-8">
                                <label class="col-3 col-form-label">Nom:</label>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Nom" required="required"><br>
                                </div>
                                <br>
                                <label class="col-3 col-form-label">Description:</label>
                                <div class="col-5">
                                   <textarea class="form-control"  type="text" name="description" id="description" required></textarea>
                                   <br>
                                </div>
                                <br>
                                <label class="col-3 col-form-label">E-mail:</label>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="email" placeholder="exemple@gmail.com" required="required" id="email"><br>
                                </div>
                                <br>
                                <label class="col-3 col-form-label">Adresse:</label>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="Address" placeholder="23- chedli kallela lafayette" required="required" id="address">
                                    <br>
                                </div>
                                <br>
                                <label class="col-3 col-form-label">Telephone:</label>
								<div class="col-sx-5">
                                <div class="input-group col-5">
                                    <span class="input-group-addon" id="sizing-addon1">+216</span>
                                    <input class="form-control" type="text" name="tel" placeholder="23260645" pattern="\d{8}" required="required" id="tel">
                                    <br>
                                </div>
								</div>
                                <br><br>
                                <label class="col-3 col-form-label">Region:</label>
                                <select class="form-control" name="region" id="region" required>
                                    @foreach($region as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach
                                </select>
                           </div>
                    </div>
              </div>
              <br> <br>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="return cancelartisan();">Annuler</button>
                    <button type="submit" class="btn btn-primary" onclick="return addartisan();">Sauvgarder</button>
              </div>
         </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
