<?php
 
// Create connection
require('../configuraciones/conexion.php');
//$codigo = $_POST["codigorecibo"];
//$codigo= 'CC25';
//query
$query="SELECT codigo, nombre, precio
        from `obra` as o NATURAL JOIN (SELECT obra as codigo, precio
                                       from `detalle venta`
                                       WHERE recibo=$codigo) as T";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));



 
mysqli_close($conn);



?>
