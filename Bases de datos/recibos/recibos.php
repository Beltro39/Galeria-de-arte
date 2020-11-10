<?php
  $mysqli = new mysqli('localhost', 'Krawco', 'lolo852456', 'galeria');
?>


<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
    <title>Recibos</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        
</head>

<body id="bodyc">
    

 



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
            <a class="nav-link active" href="recibos.php">Recibos</a>
        </li>
        <li class="nav-item">
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
            <div class="col-5 px-2">
                <div class="card" style="background: #f0f2f5">
                    <div class="card-header">
                        Editar recibo
                    </div>
                    <div class="card-body">
                      
                        <form action="insert_f.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha compra</label>
                                <input type="date" name="fecha" id="fecha" class="form-control">
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
                        Registrar recibo
                    </div>
                    <div class="card-body">
                      
                        <form action="insert_f.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha compra</label>
                                <input type="date" name="fecha" id="fecha" class="form-control">
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
                                <a href="recibos.php" class="btn btn-danger">Reiniciar</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
            <div class="col-6 px-5">
            <form action="tabla.php" class="form-group" method="post">
            <button class="btn btn-success" data-toggle="modal" data-target="#modalNuevo">
				    Agregar obra de arte a la compra
                    <i class="fas fa-plus"></i>
                </button>
                <input type="text" name="codigorecibo" id="codigorecibo" class="form-control">
    </form>
            </div>
        </div>

        
        
    </div>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="script.js"></script>
	
       
<script>
      $(document).ready(function () {
          $("#codigo").keyup(function () {
              var value = $(this).val();
              $("#codigorecibo").val(value);
          });
      });


</script>

    
   
    
</body>

</html>