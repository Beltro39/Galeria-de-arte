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
    <title>Consultas</title>
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
        <li class="nav ">
            <a class="nav-link " href="../clientes/clientes.php">Clientes</a>
        </li>
        <li class="nav ">
            <a class="nav-link " href="../criticos/criticos.php">Criticos</a>
        </li>
        <li class="nav">
            <a class="nav-link" href="../tiquetes/tiquetes.php">Tiquetes</a>
        </li>
        <li class="nav">
            <a class="nav-link" href="../busquedas/busquedas.php">Busquedas</a>
        </li>
        <li class="nav-item nav-pills">
            <a class="nav-link active" href="consultas.php">Consultas</a>
        </li>
        
        
    </ul>
    <div class="container">
        <div class="row my-2">
            <div class="col-6">
                <p>Seleccione una opcion.</p>
                <form action="consultar.php" target="_blank"  method="POST">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleOpcion" id="exampleOpcion1"
                                value="opcion1" checked>
                            <label class="form-check-label" for="exampleOpcion1">
                            Hombres que tienen entre 2 y 4 sillas   
                            </label>
                            
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleOpcion" id="exampleOpcion2"
                                value="opcion2">
                            <label class="form-check-label" for="exampleOpcion2">
                            Sillas que su dueña tiene 3 sillas por lo menos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleOpcion" id="exampleOpcion3"
                                value="opcion3">
                            <label class="form-check-label" for="exampleOpcion3">
                            Pasajero con más sillas 
                            </label>
                        </div>
                    </div>
                    <div class="input-group ">
                        <button class="btn  btn-primary"  title="Buscar" type="submit">
                            <i class="fas fa-search-plus mx-0 my-0"> </i></button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>




</body>

</html>