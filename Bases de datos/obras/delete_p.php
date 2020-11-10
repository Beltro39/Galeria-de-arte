<?php
 // Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM obra where codigo='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: obras.php");
    
     
 }else{
     echo "Ha ocurrido un error al eliminar la obra";
 }
 
mysqli_close($conn);



?>