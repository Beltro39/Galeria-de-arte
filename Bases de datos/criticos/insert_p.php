<?php
 
// Create connection
require('../configuraciones/conexion.php');
$cedula = $_POST["cedula"];

//query
    $query="INSERT INTO `critico`(`cedula`,`nombre`, `fecha nacimiento`, `pais`, `genero`)
 	VALUES ('$_POST[cedula]','$_POST[nombre]','$_POST[fecha_nacimiento]','$_POST[pais]','$_POST[exampleRadios]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: critico.php");
        
         
 	

}

?>
