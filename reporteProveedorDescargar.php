<?php 
session_start();
require_once 'core.php';
header('Content-type: application/vnd.ms-word');
header("Content-Disposition: attachment; filename=Proveedor.doc");
header("Pragma: no-cache");
header("Expires: 0");
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Klimatizar-Proveedor</title>
      <style type="text/css">
        body {
          background-color: gray 
        }
    .tablalistado{
      background-color: white;
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: auto;
    }
    .tablalistado th{
      border:1px solid #6A9E98;
    }
    .tablalistado td{
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73; 
    }
      </style>
  </head>
    <body>
    
<?php   
include 'conectar.php';
 ?>
 <img src="../images/LOGOKLIMACOL.jpg" />
 <h1>LISTADO DE PRODUCTOS</h1>
 <?php  
$jorge=conectar();
$registro=$jorge->query("select * from proveedor")or die($jorge->error);
echo '<table class="tablalistado">';
echo "<tr>";
echo '<th>NIT</th>';
echo '<th>Nombre</th>';
echo '<th>Direccion</th>';
echo '<th>Telefono</th>';
echo '<th>Contacto de venta</th>';
echo '<th>Correo</th>';
echo '<th>Celular</th>';
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
          echo "</tr>";
      }
$jorge->close();    
  ?>
</body>
</html>

<!--Consulta de tecnicos 
select * from empleado inner join cargo on cargo.codigoCargo=empleado.Cargo_codigoCargo  where NombreCargo like 'tec%';-->