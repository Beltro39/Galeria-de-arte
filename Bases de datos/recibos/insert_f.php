<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
    if($_POST["persona"]=== "Casual"){
		$query="INSERT INTO recibo(`codigo`, `fecha`,`cedula casual`, `cedula critico`) 
		VALUES('$_POST[codigo]','$_POST[fecha]','$_POST[cedula_1]',NULL)
		";
	}else{
		$query="INSERT INTO recibo(`codigo`, `fecha`,`cedula casual`, `cedula critico`) 
	    VALUES('$_POST[codigo]','$_POST[fecha]',NULL, '$_POST[cedula_2]')";
	}	
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: recibos.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear el recibo";
	 }



?>
