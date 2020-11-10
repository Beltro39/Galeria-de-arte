<?php
 // Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM critico where cedula='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
$query="delete FROM recibo where `cedula critico`='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: critico.php");
    
     
 }else{
     echo "Ha ocurrido un error al eliminar al critico";
 }
 
mysqli_close($conn);



?>