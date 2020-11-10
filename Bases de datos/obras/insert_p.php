<?php
 
// Create connection
require('../configuraciones/conexion.php');
$cedula = $_POST["codigo"];
//query
    $query="INSERT INTO `obra`(`codigo`,`nombre`,`autor`,`fecha publicacion`,`tipo`)
 	VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[autor]','$_POST[fecha_publicacion]','$_POST[tipo]')";
    
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
 	if($result){
        header ("Location: obras.php");
    }else{
		echo "Ha ocurrido un error al registrar una obra de arte";
	}

?>
