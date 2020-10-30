<?php
  $mysqli = new mysqli('localhost', 'Krawco', 'lolo852456', 'nave2');
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
            <a class="nav-link " href="../clientes/clientes.php">Clientes</a>
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
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Registrar tíquete
                    </div>
                    <div class="card-body">
                      
                        <form action="insert_f.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo silla">Codigo</label>
                                <input type="text" name="codigo" id="codigoa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha visita galeria</label>
                                <input type="date" name="fecha_compra" id="fecha_compra" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Para:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                        value="casual" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Casual
                                    </label>
                                </div>
                                <div class="form-check" >
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                        value="critico">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Crítico
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Lista pasajeros</label>
                                <select class="form-control" id="dueno" name="dueno" >
                                  <option value="0">Sin dueño: </option>
                                  <?php  
                                  $query = $mysqli -> query ("SELECT * FROM pasajero");
                                   while ($valores = mysqli_fetch_array($query)) {
                                     echo '<option value="'.$valores[cedula].'">'.$valores[cedula].'</option>';
                                   }
                                  ?>
                                  
                                
                                </select>
                           </div>
                            
                            
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="insertar">
                                <a href="sillas.php" class="btn btn-success">Reiniciar</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>