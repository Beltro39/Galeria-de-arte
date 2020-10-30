<?php
 // Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM casual where cedula='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: clientes.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el pasajero";
 }
 
mysqli_close($conn);



?>