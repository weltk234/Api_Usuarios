<?php
  //http://localhost/Sistema_php/api/editar.php?nombre=Tomas&apellido=Sojo&email=tomnas234@gmail.com&telefono=71999491188&id=11

  $conexion = new mysqli("localhost","root","","sistema") or die("not connected".mysqli_connect_error());
  
  if(isset ($_GET ["nombre"])){
  $id = $_GET["id"];
  $nombre = $_GET["nombre"];
  $apellido = $_GET ["apellido"];
  $email = $_GET ["email"];
  $telefono = $_GET["telefono"];
  $detalle = $_GET ["detalle"];

    $sql= "UPDATE `Clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `Clientes`.`id` = $id;"; 
    $query=mysqli_query($conexion,$sql);
    if($query){
      echo"1 row update";
    }else{
      echo mysqli_error($conexion);
    }
  
 }

?>