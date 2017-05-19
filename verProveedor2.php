<?php
session_start();
if ($_SESSION['estado']==0) {
  header("Location:../publicidad/loguin.php");
}
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Klimatizar-Empleado</title>
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
      <link   rel="shortcut icon" href="../images/LOGO KLIMACOL.jpg" type="image/x-icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
  </head>
    <body>
 <div class="container">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="head">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i style="margin-top:-15px;margin-left:10px;"  class="fa fa-globe fa-2x"></i></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav" >
      <li  class="active"><a href="Principal.php"><span class="fa fa-home fa-fw"></span>Home</a></li>
              <!--Gestion de empleados-->
                <li  class="active" ><a href="#" data-toggle="dropdown"  ><span  class="fa fa-user"></span>  Gestion de Empleados 
      <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
   <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Empleado<span  class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="GestionEmple.php">Listado</a></li>
            <li role="separator" class="divider"></li>
          <li><a tabindex="-1" href="cosultaEmpleado.php">Buscar Documento</a></li>
        </ul>
      </li>
               <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">cargo<span  class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="Cargo1.php">Listado</a></li>
            <li role="separator" class="divider"></li>
          <li><a tabindex="-1" href="consultaCargo.php">Buscar  codigo</a></li>
        </ul>
      </li>
      </li>
                </ul>
              </li>
      <li  class="active"><a data-toggle="dropdown"  href="fichaTecnica.php"><span class="fa fa-cog fa-spin fa-1x fa-fw"></span> Ficha Tecnica  <span class="caret"></span></a>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#">Registrar obra</span></a></li> 
     <li><a href="fichaTecnica.php">Registrar ficha tecnica</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
      <li  class="active"><a href="#"  data-toggle="dropdown"><span class="fa fa-check-square-o"></span> Kardex <span class="caret"></span></a>
      <ul class="dropdown-menu" role="Menu" >
        <li><a href="solicitudMaterial.php" >Solicitud de material</span></a></li> 
          <li><a  href="RegistrarCargo.php">Orden de compra</a>
              <li><a class="dropdown-item" href="#">Remision de material</a></li>
          </li>
      </ul>
     </li>
      <li  class="active"><a href="#" data-toggle="dropdown" ><span class="fa fa-book fa-fw"> </span> Consulta 
      <span class="caret"></a>
    <ul class="dropdown-menu" role="Menu" >
      <li><a href="consultaEmpleado1.php">Empleado</span></a></li> 
      <li><a href="consultaCargo1.php">Cargo</a></li>
      <li><a href="#">Ficha tecnica</a></li>
      <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Kardex<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Solicitud de material</a></li>
          <li><a tabindex="-1" href="#">Orden de compra</a></li>
          <li><a tabindex="-1" href="#">Remision de material</a></li>
        </ul>
      </li>
      <li><a href="producto.php">Producto</a></li>
      <li><a href="verProveedor1.php">Proveedor</a></li>
    </ul>
      </li> 
      <li  class="active" ><a href="#" data-toggle="dropdown" >Producto<span class="caret"></a>
  <ul class="dropdown-menu" role="Menu" >
    <li><a href="producto.php" >Producto</span></a></li> 
      <li><a  href="verProveedor1.php">Proveedor</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Regular link</a></li>
          <li><a class="dropdown-item disabled" href="#">Disabled link</a></li>
          <li><a class="dropdown-item" href="#">Another link</a></li>
        </ul>
      </li>
    <li><a  href="#" class="dropdown-item disabled">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a  href="#">Separated link</a></li>
  </ul>
      </li>
    <ul class="nav navbar-nav">
     <li><i style="margin-top:10px;margin-left:15px; " class="fa fa-power-off fa-2x" aria-hidden="true" data-toggle="dropdown"></i>
    <ul class="dropdown-menu" role="Menu" >
    <li><a href="#"  data-toggle="dropdown">Informacion Personal</a></li> 
    <li><a href="modificarContrasena1.php">Cambiar contraseña</a></li>
    <li><a href="#">fvgbhj</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
  </ul>
      </li> 
      </ul>
        </div><!--/.container-fluid -->
      </nav> 
      </div>
  <br>
  <br>
  <br>
      <div class="row">
      <div class="col-md-2 col-md-offset-10">
        <button class="btn btn-primary" data-toggle="modal" data-target="#inst_Proveedor">
          Agregar
          <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
        </button>
      </div><!-- /.span -->
    </div>
    <br>
    <br>
<section class="contenedor">
<?php   
include 'conectar.php';
  include('../Crud/md_agregarProveedor.php');
 ?>
 <?php  
$jorge=conectar();
$registro=$jorge->query("SELECT * FROM proveedor WHERE visibilidad=1")or die($jorge->error);
echo '<div class="table-responsive">';
echo '<table class="table table-bordered table-hover">';
echo "<tr>";
echo '<th><center>NIT</th>';
echo '<th><center>NOMBRE</th>';
echo '<th><center>DIRECCION</th>';
echo '<th><center>TELEFONO</th>';
echo '<th><center>CONTACTO DE VENTA</th>';
echo '<th><center>CORREO</th>';
echo '<th><center>CELULAR</th>';
echo '<th width="10%"></th>';
echo "</tr>";
      while($row=$registro->fetch_array())
      {   
          echo "<tr>";
          echo "<td>";
          echo $row['NIT'];
          echo "</td>";
          echo "<td>";
          echo $row['nombreProveedor'];
          echo "</td>";
          echo "<td>";
          echo $row['direccion'];
          echo "</td>";
          echo "<td>";
          echo $row['telefono'];
          echo "</td>";
          echo "<td>";
          echo $row['contactoVenta'];
          echo "</td>";
          echo "<td>";
          echo $row['correo'];
          echo "</td>";
          echo "<td>";
          echo $row['celular'];
          echo "</td>";
include '../Crud/md_modificarProveedor.php';
  ?>
  <td>
        <a href="" id="<?php echo $row["NIT"];?>" class="btn btn-sm btn-warning btn-editar" data-toggle="modal" data-target="#modificarProveedor"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <button id="<?php echo $row["NIT"];?>" name="eliminar" class="btn btn-sm btn-danger">
    <i class="fa fa-trash-o" aria-hidden="true"></i>
    </button>
    </td>
<?php 
      }
echo "</table>"; 
echo '</div>';
$jorge->close();    
  ?>
  <br>
  <br>
  <center>
<form action="producto.php">
    <button style="margin-left:125px;" type="submit" class="btn btn-primary">Volver</button>
    </form>
    </center>
</section>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modalsProveedor.js"></script>
    <script>
    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
    </script>
</body>
</html>