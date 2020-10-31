<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE casual SET nombre='$_POST[nombre]',fecha nacimiento='$_POST[fecha_nacimiento]',ocupacion='$_POST[ocupacion]', genero='$_POST[genero], adulto responsable='$_POST[adulto_responsable]'' WHERE cedula='$_POST[cedula]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: clientes.php");
    
     
 }else{
     echo "Ha ocurrido un error al editar al cliente";
 }
 
mysqli_close($conn);



?>