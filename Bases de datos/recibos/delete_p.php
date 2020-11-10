<?php
 // Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM `detalle venta` where obra='$_POST[d]' and recibo='$_POST[p]' ";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: tabla2.php?variable1='$_POST[p]'");
    
     
 }else{
     echo "Ha ocurrido un error al eliminar un recibo";
 }
 
mysqli_close($conn);



?>