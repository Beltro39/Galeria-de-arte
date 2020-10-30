<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query= "";
    if($_POST["dueno"]==="0"){
		$query="INSERT INTO silla(`codigo`, `dueno`,`modelo`, `fecha_fabricacion`, `fecha_compra`) 
		VALUES('$_POST[codigo]',NULL,'$_POST[modelo]','$_POST[fecha_fabricacion]','$_POST[fecha_compra]')";
    }else{
		$query="INSERT INTO silla(`codigo`, `dueno`,`modelo`, `fecha_fabricacion`, `fecha_compra`) 
        VALUES('$_POST[codigo]','$_POST[dueno]','$_POST[modelo]','$_POST[fecha_fabricacion]','$_POST[fecha_compra]')";
	}

	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: sillas.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear el pasajero";
	 }



?>
