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
        <li class="nav nav-pills">
            <a class="nav-link active" href="../clientes/clientes.php">Clientes casuales</a>
        </li>
        <li class="nav nav-item">
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
            <div class="col-5 px-0">
                <div class="card" style="background: #f0f2f5">
                    <div class="card-header">
                        Editar cliente casual
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="update_p.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control" value=<?=$_GET["cedula"];?>>
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value=<?=$_GET["nombre"];?>>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" name="fecha nacimiento" id="fecha nacimiento" class="form-control" value=<?=$_GET["fecha_nacimiento"];?>>
                            </div>
                            <div class="form-group">
                                <label for="">Ocupación</label>
                                <input type="text" name="ocupacion" id="ocupacion" class="form-control" value=<?=$_GET["ocupacion"];?>>
                            </div>
                            <div class="form-group">
                                <label for="">Género</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="generoM"
                                        value="M" >
                                    <label class="form-check-label" for="generoM">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="genero" id="generoF"
                                        value="F">
                                    <label class="form-check-label" for="generoF">
                                        Femenino
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Adulto responsable</label>
                                <select class="form-control" id="adulto responsable" name="adulto responsable" >
                                  <option value=<?=$_GET["adulto_responsable"];?>> <?php echo $_GET["adulto_responsable"];  ?></option>
                                  <?php  
                                  $query = $mysqli -> query ("SELECT * FROM casual");
                                   while ($valores = mysqli_fetch_array($query)) {
                                     echo '<option value="'.$valores[cedula].'">'.$valores[cedula].'</option>';
                                   }
                                  ?>
                                </select>
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
                        Registrar cliente casual
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="insert_p.php" class="form-group" method="post">
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
                                <input type="date" name="fecha nacimiento" id="fecha nacimiento" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ocupación</label>
                                <input type="text" name="ocupacion" id="ocupacion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Género</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="generoM"
                                        value="Masculino" checked>
                                    <label class="form-check-label" for="generoM">
                                        Masculino
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="genero" id="generoF"
                                        value="Femenino">
                                    <label class="form-check-label" for="generoF">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Adulto responsable</label>
                                <select class="form-control" id="adulto responsable" name="adulto responsable" >
                                  <option value="0">No aplica: </option>
                                  <?php  
                                  $query = $mysqli -> query ("SELECT * FROM casual");
                                   while ($valores = mysqli_fetch_array($query)) {
                                     echo '<option value="'.$valores[cedula].'">'.$valores[cedula].'</option>';
                                   }
                                  ?>
                                  
                                
                                </select>
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
                            <th scope="col" class="text-center">Cédula</th>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Fecha nacimiento</th>
                            <th scope="col" class="text-center">Ocupación</th>
                            <th scope="col" class="text-center">Género</th>
                            <th scope="col" class="text-center">Adulto responsable</th>
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
                            <td><?=$fila['fecha nacimiento'];?></td>
                            <td><?=$fila['ocupacion'];?></td>
                            <td><?=$fila['genero'];?></td>
                            <td><?=$fila['adulto responsable'];?></td>
                            <td>

                                <form action="delete_p.php" method="POST">
                                    <input type="text" value=<?=$fila['cedula'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['cedula'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="clientes.php" method="GET">
                                    
                                    <input type="text" name="cedula" value='<?=$fila['cedula'];?>' hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="fecha nacimiento" value='<?=$fila['fecha nacimiento'];?>' hidden>
                                    <input type="text" name="ocupacion" value='<?=$fila['ocupacion'];?> 'hidden>
                                    <input type="text" name="genero" value='<?=$fila['genero'];?>' hidden>
                                    <input type="text" name="adulto responsable" value='<?=$fila['adulto responsable'];?>' hidden>

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