<?php 
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
?>
<?php 
$mysql=conectar();
$i=0;
$row=$mysql->query("select documento from empleado")or die($mysql->error);
while ($vector=$row->fetch_array()) {
	$documento[$i]=$vector['documento'];
	$i++;
}
$mysql->close();
 ?>
<!-- Modal -->
	<div class="modal fade" id="inst_Persona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class='fa fa-plus'></i> Agregar nuevo Empleado</h4>
				</div>
				<form class="form-horizontal" method="POST" action="../controlers/RegistrarEmpleado1.php">
					<div class="modal-body">
					<!-- DOCUMENTO -->
						<div class="form-group">
							<label class="col-sm-4 control-label" style="margin-left: -0.9cm;">Documento</label>
							<div class="input-group">
							  <input type="text" class="form-control"  id="docu" name="documento" pattern="[0-9]{4,30}" title="Ingrese solo numeros"   placeholder="Ingrese Documento" required >
							  <span class="input-group-btn" >
										<button type="button" class="btn btn-secondary"
										onclick="validar()">
										<i class="fa fa-search" aria-hidden="true"></i>
										</button>
							</span>
							</div>
						</div>
						<!-- NOMBRE -->
						<div class="form-group">
							<label for="nomPersona" class="col-sm-3 control-label">Nombre</label>
							<div class="col-sm-8">
								<input class="form-control" placeholder="Nombre Completo" name="nombreCompleto" required>
							</div>
						</div>
						<!-- DIRECCION -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Direccion</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" placeholder="Ingrese Direccion" name="direccion" required>
							</div>
						</div>
						<!-- TELEFONO -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Telefono</label>
							<div class="col-sm-8">
								<input type="text" pattern="[0-9]{4,30}" title="Ingrese solo numeros" class="form-control" placeholder="Ingrese telefono" name="telefono" required>
							</div>
						</div>
						<!-- EMAIL -->
						<div class="form-group">
							<label  class="col-sm-3 control-label">E-mail</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" placeholder="Ingrese Email" name="correo" required>
							</div>
						</div>
						<!--FECHA NACIMIENTO-->
						<div class="form-group">
							<label class="col-sm-3 control-label">Fecha Nacimiento</label>
							<div class="col-sm-8">
							 <input type="date"  class="form-control" name="fecha" required>
							 </div>
						</div>
						<!--CARGO-->
						<div class="form-group">
						 <label class="col-sm-3 control-label"> Cargo:</label>
							 <div class="col-sm-8">
								<select name="codigoCargo" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" required>					
								 <?php 
								$jorge=conectar();
								$registros=$jorge->query("select * from cargo where visibilidad=1")
								or die($jorge->error);
								while ($reg=$registros->fetch_array()) {
								  echo "<option value=\"".$reg['codigoCargo']."\">".$reg['NombreCargo']."</option>";
								}
								  ?>
								  </select>
							  </div>
						  </div>
						  <!--EPS-->
						  <div class="form-group">
						  	<label class="col-sm-3 control-label">EPS:</label>
							  <div class="col-sm-8">
								<select name="idEPS" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;">
								 <?php 
								$jorge=conectar();
								$registros=$jorge->query("select * from eps")
								or die($jorge->error);
								while ($reg=$registros->fetch_array()) {
								  echo "<option value=\"".$reg['idEPS']."\">".$reg['nombreEPS']."</option>";
								}
								  ?>
								  </select>
								  </div>
							</div>
						  <!--ARL-->
						  <div class="form-group">
						  <label  class="col-sm-3 control-label">Seleccione ARL:</label>
						  <div class="col-sm-8">
							<select name="idARL" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;" >
							 <?php 
							$jorge=conectar();
							$registros=$jorge->query("select * from arl")
							or die($jorge->error);
							while ($reg=$registros->fetch_array()) {
							  echo "<option value=\"".$reg['idARL']."\">".$reg['nombreARL']."</option>";
							}
							  ?>
							  </select>
							  </div>
							  </div>
						    <!--AFP-->
						    <div class="form-group">								
							<label  class="col-sm-3 control-label">Seleccione AFP:</label>
							<div class="col-sm-8">
							<select name="idAFP" style="border-radius:5px;width: 370px;height: 33px;border-color:#BDBDBD;border-collapse:  collapse;">
							 <?php 
							$jorge=conectar();
							$registros=$jorge->query("select * from AFP")
							or die($jorge->error);
							while ($reg=$registros->fetch_array()) {
							  echo "<option value=\"".$reg['idAFP']."\">".$reg['nombreAFP']."</option>";
							}
							  ?>
							  </select>
							</div>
							</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script type='text/javascript'>
<?php 
$js_array=json_encode($documento);
echo "var vector=".$js_array.";\n";
 ?>
		function validar() {
			var doc = document.getElementById('docu').value;
			var control = 0;
				if (doc == "") {
					alert("Documento invalido, se encuentra vacio ");
				}else{
					for (var i = 0; i < vector.length; i++) 
					{
						if(vector[i] == doc)
							{
								control=1;
							}
					}
					if (control === 1) 
					{
						alert("Documento invalido" +" " + doc + " "+"ya se encuentra registrado");
					}else
					{
						alert("Documento valido"+doc);
					}	
				}
		}
</script>





