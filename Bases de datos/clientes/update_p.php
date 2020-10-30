<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE persona SET nombre='$_POST[nombre]',edad='$_POST[edad]',peso='$_POST[peso]' WHERE cedula='$_POST[cedula]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: pasajeros.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el pasajero";
 }
 
mysqli_close($conn);



?>