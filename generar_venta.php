<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=davice-width, initial-scale=1">
        
        <title>Generar Venta</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Venta</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="ingresar_producto.php">PRODUCTOS</a></li>
                        <li><a href="generar_venta.php">NUEVA VENTA</a></li>
                        <li><a href="#">Crear BD</a></li>
                        
                    </ul>
                    
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h1>Ingresar Producto</h1></div>
                        <div class="panel-body text-center">
                            <form action="#" method="post" role="form">
                                <label for="CodigoP">Codigo del producto</label>
                                <input type="text" name="CodigoP" class="form-control">
                                <br>
                                <label for="NombreP">Nombre del producto</label>
                                <input type="text" name="NombreP" class="form-control">
                                <br>
                                <label for="CostoP">Costo del producto</label>
                                <input type="text" name="CostoP" class="form-control">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
            
        </div>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>