<?php
  $mysqli = new mysqli('localhost', 'Krawco', 'lolo852456', 'galeria');
?>


<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <title>Tiquetes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
</head>

<body>
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav nav-item">
            <a class="nav-link " href="../index.html">inicio</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../clientes/clientes.php">Clientes casuales</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../criticos/criticos.php">Críticos</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link active" href="tiquetes.php">Tiquetes</a>
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
            <div class="col-5 px-2">
                <div class="card" style="background: #f0f2f5">
                    <div class="card-header">
                        Editar tíquete
                    </div>
                    <div class="card-body">
                      
                        <form action="insert_f.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha visita galeria</label>
                                <input type="date" name="fecha_visita" id="fecha_visita" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Para:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="persona" id="casual"
                                        value="Casual" checked>
                                    <label class="form-check-label" for="casual">
                                        Casual
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="persona" id="critico"
                                        value="Crítico">
                                    <label class="form-check-label" for="critico">
                                        Crítico
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Lista personas: </label>
                                <select class="form-control" id="cedula" name="cedula" >
                                  <option value="0"> </option>
                                  <?php  
                                  $query = $mysqli -> query ("SELECT * FROM casual");
                                   while ($valores = mysqli_fetch_array($query)) {
                                     echo '<option value="'.$valores[cedula].'">'.$valores[cedula].'</option>';
                                   }
                                  ?>
                                  
                                
                                </select>
                           </div>
                            
                            
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="insertar">
                                <a href="tiquetes.php" class="btn btn-success">Reiniciar</a>
                            </div>

                        </form>

                    </div>
                </div>
            <?php
           }
        else{
             ?>
            <div class="col-5 px-2">
                <div class="card" style="background: #f0f2f5">
                    <div class="card-header">
                        Registrar tíquete
                    </div>
                    <div class="card-body">
                      
                        <form action="insert_f.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input type="text" name="codigo" id="codigoa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha visita galeria</label>
                                <input type="date" name="fecha_visita" id="fecha_visita" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Para:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="persona" id="casual"
                                        value="Casual" checked>
                                    <label class="form-check-label" for="casual">
                                        Casual
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="persona" id="critico"
                                        value="Critico">
                                    <label class="form-check-label" for="critico">
                                        Crítico
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="form_casual">
                                  <label for="">Lista personas</label>
                                  <select class="form-control" id="cedula_casual" name="cedula_1" >
                                  <option value="0">No aplica: </option>
                                  <?php  
                                        $query = $mysqli -> query ("SELECT * FROM casual");
                                        while ($valores = mysqli_fetch_array($query)) {
                                         echo '<option value="'.$valores[cedula].'">'.$valores[cedula].'</option>';
                                        }                              
                                  ?>
                                  </select>
                                </div>
                                <div id="form_critico" style="display: none">
                                  <label for="">Lista personas</label>
                                  <select class="form-control" id="cedula_critico" name="cedula_2" >
                                  <option value="0">No aplica: </option>
                                  <?php  
                                        $query = $mysqli -> query ("SELECT * FROM critico");
                                        while ($valores = mysqli_fetch_array($query)) {
                                         echo '<option value="'.$valores[cedula].'">'.$valores[cedula].'</option>';
                                        }                              
                                  ?>
                                   </select>
                                </div>
                                
                            </div>
        
                            
        
                            
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="insertar">
                                <a href="tiquetes.php" class="btn btn-success">Reiniciar</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
            <div class="col-6 px-5">

                <table class="table border-rounded table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Código</th>
                            <th scope="col" class="text-center">Fecha_visita galeria</th>
                            <th scope="col" class="text-center">Cédula asociada</th>
                            <th scope="col" class="text-center">Tipo visitante</th>
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
                            <td><?=$fila['fecha visita galeria'];?></td>
                            <td><?=$fila['cedula'];?></td>
                            <td><?=$fila['tipo persona'];?></td>
                            <td>

                                <form action="delete_p.php" method="POST">
                                    <input type="text" value=<?=$fila['codigo'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['codigo'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="clientes.php" method="GET">
                                    
                                    <input type="text" name="codigo" value='<?=$fila['codigo'];?>' hidden>
                                    <input type="text" name="fecha visita galeria" value='<?=$fila['fecha visita galeria'];?>' hidden>
                                    <input type="text" name="cedula" value='<?=$fila['cedula'];?> 'hidden>
                                    <input type="text" name="tipo persona" value='<?=$fila['tipo persona'];?>' hidden>
                                  

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

    <script src="script.js"></script>
</body>

</html>