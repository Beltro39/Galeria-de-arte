<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE obra SET nombre='$_POST[nombre]',autor='$_POST[autor]',`fecha publicacion`='$_POST[fecha_publicacion]', tipo='$_POST[tipo]' WHERE codigo='$_POST[codigo]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: obras.php");
    
     
 }else{
     echo "Ha ocurrido un error al editar la obra";
 }
 
mysqli_close($conn);



?>