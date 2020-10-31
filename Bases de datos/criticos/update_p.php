<?php
 
// Create connection
require('../configuraciones/conexion.php');
$string= "fecha nacimiento";
//query
$query="UPDATE critico SET cedula='$_POST[cedula]',`fecha nacimiento`='$_POST[fecha_nacimiento]', pais='$_POST[pais]', genero='$_POST[exampleRadios]' WHERE cedula='$_POST[cedula]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: criticos.php");
    
     
 }else{
     echo "Ha ocurrido un error al editar a un critico";
 }
 
mysqli_close($conn);



?>