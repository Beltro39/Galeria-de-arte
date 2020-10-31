<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
    if($_POST["persona"]=== "Casual"){
		$query="INSERT INTO tiquete(`codigo`, `fecha visita galeria`,`cedula`, `tipo persona`) 
		VALUES('$_POST[codigo]','$_POST[fecha_visita_galeria]','$_POST[cedula_1]','$_POST[persona]')";
	}else{
		$query="INSERT INTO tiquete(`codigo`, `fecha visita galeria`,`cedula`, `tipo persona`) 
	    VALUES('$_POST[codigo]','$_POST[fecha_visita_galeria]','$_POST[cedula_2]','$_POST[persona]')";
	}	
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: tiquetes.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear el pasajero";
	 }



?>
