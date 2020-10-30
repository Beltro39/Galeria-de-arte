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
    <title>Críticos</title>
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
            <a class="nav-link active" href="../clientes/clientes.php">Clientes</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link active" href="../criticos/criticos.php">Críticos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../tiquetes/tiquetes.php">Tiquetes</a>
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
                if(isset($_GET["cedula"])){
             ?>
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Registrar crítico
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="update_p.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">País</label>
                                <input type="text" name="pais" id="pais" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Género</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="M" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                        value="F">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Femenino
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                                <a href="criticos.php" class="btn btn-danger">descartar</a>
                                
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <?php
           }
        else{
             ?>
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Registrar crítico
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">País</label>
                                <input type="text" name="pais" id="pais" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Género</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="M" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                        value="F">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Femenino
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar">
                                <a href="criticos.php" class="btn btn-success">Reiniciar</a>
                            </div>
                            

                        </form>

                    </div>
                </div>
            </div>

            <?php
        }
        ?>
            <div class="col-6 px-2">

                <table class="table border-rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Altura</th>
                            <th scope="col">Genero</th>

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
                            <td><?=$fila['cedula'];?></td>
                            <td><?=$fila['nombre'];?></td>
                            <td><?=$fila['edad'];?></td>
                            <td><?=$fila['peso'];?></td>
                            <td><?=$fila['altura'];?></td>
                            <td><?=$fila['genero'];?></td>
                            <td>

                                <form action="delete_p.php" method="POST">
                                    <input type="text" value=<?=$fila['cedula'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['cedula'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="pasajeros.php" method="GET">
                                    
                                    <input type="text" name="cedula" value='<?=$fila['cedula'];?>' hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="edad" value='<?=$fila['edad'];?>' hidden>
                                    <input type="text" name="peso" value='<?=$fila['peso'];?> 'hidden>
                                    <input type="text" name="altura" value='<?=$fila['altura'];?>' hidden>
                                    <input type="text" name="genero" value='<?=$fila['genero'];?>' hidden>

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