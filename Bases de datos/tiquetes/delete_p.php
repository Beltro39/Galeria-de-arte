<?php
 // Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM tiquete where codigo='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: tiquetes.php");
    
     
 }else{
     echo "Ha ocurrido un error al eliminar un tiquete";
 }
 
mysqli_close($conn);



?>