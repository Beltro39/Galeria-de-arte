<?php
 
// Create connection
require('../configuraciones/conexion.php');
$cedula = $_POST["cedula"];
//query
    if($_POST["adulto_responsable"]==="0"){
	    $query="INSERT INTO `casual`(`cedula`,`nombre`,`fecha nacimiento`,`ocupacion`,`genero`,`adulto responsable`)
 	    VALUES ('$_POST[cedula]','$_POST[nombre]','$_POST[fecha_nacimiento]','$_POST[ocupacion]','$_POST[genero]',NULL)";
    }else{
		$query="INSERT INTO `casual`(`cedula`,`nombre`,`fecha nacimiento`,`ocupacion`,`genero`,`adulto responsable`)
		VALUES ('$_POST[cedula]','$_POST[nombre]','$_POST[fecha_nacimiento]','$_POST[ocupacion]','$_POST[genero]','$_POST[adulto_responsable]')";
    }
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
 	if($result){
        header ("Location: clientes.php");
    }else{
		echo "Ha ocurrido un error al registrar un cliente";
	}

?>
