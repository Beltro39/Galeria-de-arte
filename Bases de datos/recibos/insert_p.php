<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query

$query="INSERT INTO `detalle venta`(`recibo`,`obra`,`precio`) 
VALUES('$_POST[codigorecibo2]','$_POST[codigoobra]','$_POST[precio]')
";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: tabla2.php?variable1='$_POST[codigorecibo2]'");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear el recibo";
	 }



?>
