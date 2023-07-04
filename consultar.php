<?php
 //http://localhost/Sistema_php/api/consultar.php
  $conexion = new mysqli("localhost","root","","sistema") or die("not connected".mysqli_connect_error());
  

    $sql= "SELECT * FROM `Clientes`;"; 
    
    $clientes = array();
    $result = mysqli_query ($conexion, $sql);

    while($fila = mysqli_fetch_array($result)){
    array_push($clientes, $fila);
    }

    echo json_encode($clientes);
    
    mysqli_free_result($result);
    mysqli_close($conexion);
 

?>