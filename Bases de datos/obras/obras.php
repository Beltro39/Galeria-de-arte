<?php
  $mysqli = new mysqli('localhost', 'Krawco', 'lolo852456', 'galeria');
?>
<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
<!DOCTYPE html>
<html lang="en">
<!--cabezera del html -->

<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>Clientes casuales</title>
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
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav nav-item">
            <a class="nav-link " href="../index.html">inicio</a>
        </li>
        <li class="nav nav-item">
            <a class="nav-link active" href="../clientes/clientes.php">Clientes casuales</a>
        </li>
        <li class="nav nav-item">
            <a class="nav-link active" href="../criticos/criticos.php">Críticos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../recibos/recibos.php">Recibos</a>
        </li>
        <li class="nav-pills">
            <a class="nav-link" href="../obras/obras.php">Obras de arte</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../busquedas/busquedas.php">Busquedas</a>
        </li>
        <li class="nav">
            <a class="nav-link" href="../consultas/consultas.php">Consultas</a>
        </li>
    </ul>
    <div class="container mt-3">
        <div class="row">
            <?php
                if(isset($_GET["codigo"])){
             ?>
            <div class="col-5 px-0">
                <div class="card" style="background: #f0f2f5">
                    <div class="card-header">
                        Editar obra de arte
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="update_p.php" class="form-group" method="post">
                        <div class="form-group">
                                <label for="coodigo">Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Autor</label>
                                <input type="text" name="autor" id="autor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de publicación</label>
                                <input type="date" name="fecha publicacion" id="fecha publicacion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tipo de obra</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipoP"
                                        value="Pintura" checked>
                                    <label class="form-check-label" for="tipoP">
                                        Pintura
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="tipo" id="tipoE"
                                        value="Escultura">
                                    <label class="form-check-label" for="tipoE">
                                        Escultura
                                    </label>
                                </div>
                            </div>
                          
                            

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                                <a href="clientes.php" class="btn btn-danger">descartar</a>
                                
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <?php
           }
        else{
             ?>
            <div class="col-5 px-0">
                <div class="card" style="background: #f0f2f5">
                    <div class="card-header" style="font-sizet: 1.5rem">
                        Registrar obra de arte
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="insert_p.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="coodigo">Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Autor</label>
                                <input type="text" name="autor" id="autor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de publicación</label>
                                <input type="date" name="fecha publicacion" id="fecha publicacion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tipo de obra</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo" id="tipoP"
                                        value="Pintura" checked>
                                    <label class="form-check-label" for="tipoP">
                                        Pintura
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="tipo" id="tipoE"
                                        value="Escultura">
                                    <label class="form-check-label" for="tipoE">
                                        Escultura
                                    </label>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guarduar">
                                <a href="clientes.php" class="btn btn-success">Reiniciar</a>
                            </div>
                            

                        </form>

                    </div>
                </div>
            </div>

            <?php
        }
        ?>
            <div class="col-5 px-5">

                <table class="table border-rounded table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Código</th>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Autor</th>
                            <th scope="col" class="text-center">Fecha publicacion</th>
                            <th scope="col" class="text-center">Tipo</th>
                            <th></th>
                        </tr>
                    </thead>
                  
                    <tbody>
                          
                        <?php 
                        require('select_p.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['codigo'];?></td>
                            <td><?=$fila['nombre'];?></td>
                            <td><?=$fila['autor'];?></td>
                            <td><?=$fila['fecha publicacion'];?></td>
                            <td><?=$fila['tipo'];?></td>
                            <td>

                                <form action="delete_p.php" method="POST">
                                    <input type="text" value=<?=$fila['codigo'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['codigo'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="obras.php" method="GET">
                                    
                                    <input type="text" name="codigo" value='<?=$fila['codigo'];?>' hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="autor" value='<?=$fila['autor'];?> 'hidden>
                                    <input type="text" name="fecha publicacion" value='<?=$fila['fecha publicacion'];?>' hidden>
                                    <input type="text" name="tipo" value='<?=$fila['tipo'];?>' hidden>

                                    <button class="btn btn-primary" title="editar" type="submit"><i
                                            class="far fa-edit"></i></button>
                                </form>
                            </td>



                        </tr>
                        <?php                    

                                }
                            }
                            
                            ?>
                            
                    </tbody>
                        
                </table>

            </div>
        </div>


    </div>



</body>

</html>