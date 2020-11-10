<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
if($_POST["persona"]=== "Casual"){
    $query="UPDATE recibo SET fecha='$_POST[fecha]',cedula casual='$_POST[cedula_1]',cedula critico=NULL, WHERE codigo'$_POST[codigo]'";
    $result = mysqli_query($conn, $query) or 
}else{
    $query="UPDATE recibo SET fecha='$_POST[fecha]',cedula casual=NULL,cedula critico='$_POST[cedula_1]', WHERE codigo'$_POST[codigo]'";
    $result = mysqli_query($conn, $query) or 
}

die(mysqli_error($conn));
 
if($result){
    header ("Location: recibos.php");
    
     
 }else{
     echo "Ha ocurrido un error al editar el recibo";
 }
 
mysqli_close($conn);



?>