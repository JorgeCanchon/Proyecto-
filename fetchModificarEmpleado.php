<?php
require_once 'core.php';
include 'conectar.php';
 if (isset($_POST['idPersona'])) {
  $id=$_POST['idPersona'];  
 $connecta=conectar(); 
      $query = "SELECT * FROM viewconsultaempleado WHERE Documento ='$id'";  
      $result = $connecta->query($query);  
      $row = $result->fetch_array();  
      echo json_encode($row);  
 }
 ?>