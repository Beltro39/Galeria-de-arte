<!DOCTYPE html>
<html lang="en">
<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>inicio</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
        para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
         para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

    
            <?php
                    require('../configuraciones/conexion.php');
                    if($_POST["exampleRadios2"]==="pasajero"){
                        $query="SELECT * FROM silla WHERE codigo='$_POST[identificacion]'";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        $número_filas = mysqli_num_rows($result);
                        if($número_filas===0){
                            echo "La silla no existe  ";
                        }else{
                        $query="SELECT * FROM pasajero WHERE cedula IN (SELECT dueno from silla where codigo='$_POST[identificacion]')";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        $número_filas = mysqli_num_rows($result);
                        if($número_filas===0){
                          echo "La silla no tiene dueño  ";
                        }else{
                        if($result){
                            ?> 
                            <div class="col-6 px-2">
                            <table class="table border-rounded">
                            <thead class="thead ">
                            <tr>
                              <th scope="col">Cedula</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Edad</th>
                              <th scope="col">Peso</th>
                              <th scope="col">Altura</th>
                              <th scope="col">Genero</th>
                            </tr>
                            </thead>
                            <tbody>

                             <?php
                            foreach($result as $fila){
                            ?>
                                <tr>
                                    <td><?=$fila['cedula'];?></td>
                                    <td><?=$fila['nombre'];?></td>
                                    <td><?=$fila['edad'];?></td>
                                    <td><?=$fila['peso'];?></td>
                                    <td><?=$fila['altura'];?></td>
                                    <td><?=$fila['genero'];?></td>
                                </tr>
                            <?php
                            }
                        }
                        else{
                            echo "Ha ocurrido un error al crear la persona";
                        }
                    }
                    }
                    }
                    else{
                        $query="SELECT * FROM silla WHERE dueno='$_POST[identificacion]' AND fecha_compra BETWEEN '$_POST[fecha_inicio]' AND '$_POST[fecha_final]' ";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        $número_filas = mysqli_num_rows($result);
                        if($número_filas===0){
                          echo "No existe ese dueño ";
                        }else{
                        if($result){
                            ?>
                            <div class="col-6 px-2">
                            <table class="table border-rounded">
                            <thead class="thead ">
                            <tr>
                              <th scope="col">Codigo</th>
                              <th scope="col">Dueño</th>
                              <th scope="col">Modelo</th>
                              <th scope="col">Fecha fabricacion</th>
                              <th scope="col">Fecha compra</th>
                             
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($result as $fila){
                            ?>

                                <tr>
                                    <td><?=$fila['codigo'];?></td>
                                    <td><?=$fila['dueno'];?></td>
                                    <td><?=$fila['modelo'];?></td>
                                    <td><?=$fila['fecha_fabricacion'];?></td>
                                    <td><?=$fila['fecha_compra'];?></td>
                                   
                                </tr>
                            <?php
                            }
                        }
                        else{
                            echo "Ha ocurrido un error al crear la persona";
                        }
                        }
                    }                    
                   
            ?>

           
</body>
</html>

