<?php
  $mysqli = new mysqli('localhost', 'Krawco', 'lolo852456', 'galeria');
  $codigorecibo= $_GET["variable1"]
?>
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
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
         para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar obra de arte a la compra</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      <form action="insert_p.php" class="form-group" method="post">
      <div class="form-group">
                                <label for="">Inserte obra a comprar</label>
                                <select class="form-control" id="codigoobra" name="codigoobra" >
                                  <option value="0"> </option>
                                  <?php  
                                  $query = $mysqli -> query ("SELECT * FROM obra");
                                   while ($valores = mysqli_fetch_array($query)) {
                                     echo '<option value="'.$valores[codigo].'">'.$valores[codigo].'</option>';
                                   }
                                  ?>
                                  </select>
                       </div>
                       <div class="form-group">
                                <label for="codigo">Precio</label>
                                <input type="text" name="precio" id="precio" class="form-control">
                            </div>
                            <div class="form-group" style="display: none">
                                <input type="text" name="codigorecibo2" id="codigorecibo2" class="form-control" value=<?php echo $codigorecibo;  ?>>
                            </div>    
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Aceptar</button>
      </div>
        </form>
    </div>
  </div>
</div>
</head>

<body>

    
<table class="table border-rounded table-striped" id="TABLA">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">Código obra</th>
                            <th scope="col" class="text-center">Nombre de la obra</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        
                        <?php 
                        $codigo = $_GET["variable1"];
                        require('select2_p.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['codigo'];?></td>
                            <td><?=$fila['nombre'];?></td>
                            <td><?=$fila['precio'];?></td>
                            
                            <td>
       
                                <form action="delete_p.php" method="POST"> 
                                   <input type="text" value=<?=$_GET["variable1"];?> hidden>
                                    <input type="text" name="p" value=<?=$_GET["variable1"];?> hidden>
                                     <input type="text" value=<?=$fila['codigo'];?> hidden>
                                    <input type="text" name="d" value=<?=$fila['codigo'];?> hidden>
                                    <button class="btn btn-danger" title="eliminar" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td class="mx-0 pr-2">
                                <form action="recibos.php" method="GET">
                                    
                                    <input type="text" name="codigo" value='<?=$fila['codigo'];?>' hidden>
                                    <input type="text" name="nombre" value='<?=$fila['nombre'];?>' hidden>
                                    <input type="text" name="precio" value='<?=$fila['precio'];?> 'hidden>
                                
                                  

                                   
                                </form>
                            </td>



                        </tr>
                        <?php                    

                                }
                            }
                            
                            ?>
                            
                    </tbody>
                        
                </table>
                <button class="btn btn-success" data-toggle="modal" data-target="#modalNuevo">
				    Agregar obra de arte a la compra
                    <i class="fas fa-plus"></i>
                </button>
                <div>
                <div>
                    <label>TOTAL: </label>
                <?php 
                        $codigo = $_GET["variable1"];
                        require('sumatoria2.php');
                        if($result){
                            foreach ($result as $fila){
                                ?>
                              <label><?=$fila['sumatoria'];?></label>
                              <?php 
                            }
                        }
                        ?>

                </div>   
                    
                    
                </div>
                    
                    
                    
                   
                    

           
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>