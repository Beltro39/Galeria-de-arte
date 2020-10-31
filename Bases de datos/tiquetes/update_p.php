<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
if($_POST["persona"]=== "Casual"){
    $query="UPDATE tiquete SET fecha visita galeria='$_POST[fecha_visita_galeria]',cedula='$_POST[cedula_1]',tipo persona='$_POST[persona]', WHERE codigo'$_POST[codigo]'";
    $result = mysqli_query($conn, $query) or 
}else{
    $query="UPDATE tiquete SET fecha visita galeria='$_POST[fecha_visita_galeria]',cedula='$_POST[cedula_2]',tipo persona='$_POST[persona]', WHERE codigo'$_POST[codigo]'";
    $result = mysqli_query($conn, $query) or 
}

die(mysqli_error($conn));
 
if($result){
    header ("Location: criticos.php");
    
     
 }else{
     echo "Ha ocurrido un error al editar a un critico";
 }
 
mysqli_close($conn);



?>