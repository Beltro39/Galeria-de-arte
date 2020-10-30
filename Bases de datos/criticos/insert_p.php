<?php
 
// Create connection
require('../configuraciones/conexion.php');
$cedula = $_POST["cedula"];

//query
    $query="INSERT INTO `pasajero`(`cedula`,`nombre`, `edad`, `peso`, `altura`, `genero`)
 	VALUES ('$_POST[cedula]','$_POST[nombre]','$_POST[edad]','$_POST[peso]','$_POST[altura]','$_POST[exampleRadios]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if($_POST["exampleRadios"]=== "M"){
		$query="INSERT INTO hombre(`cedula`, `servicio_militar`)
		VALUES ('$_POST[cedula]','$_POST[exampleRadiosYo]')";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    }else{
        $query="INSERT INTO mujer(`cedula`, `fertilidad`)
		VALUES ('$_POST[cedula]','$_POST[exampleRadiosYo]')";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	}

 	if($result){
        header ("Location: pasajeros.php");
        
         
 	

}

?>
