
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
    </div>
    
    <!-- End Example Code -->
  </body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <!-- Agregamos el estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, Cyan, brown);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="text-center mb-5"> ESTE ES SU RECIBO DE COMPRAS!!!</h1>
                        <h3 class="text-center mb-5">*VUELVA PRONTO*</h3>
                        <h4 class="text-center mb-5">*GRACIAS POR RECURRIR AL SALON DE EVENTOS (BAYERN)*</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                            </thead>
                            <tbody>
                            <?php


                    session_start();


    $productos = array(
    array('nombre' => 'EQUIPO DE SONIDO', 'precio' => 1000),
    array('nombre' => 'PRECIOX DIA(RENTA)', 'precio' =>2000),
    array('nombre' => 'SILLAS', 'precio' => 30),
    array('nombre' => 'AIRE ACONDICIONADO', 'precio' => 250),
    array('nombre' => 'MANTELERIA', 'precio' => 300),
    array('nombre' => 'MOBILIARIA', 'precio' => 500)
);

$cantidad_productos = $_SESSION['cantidad_productos'];
$total_productos = $_SESSION['total_productos'];
?>
<!-- AgregO el código HTML para mostrar los totales de productos y el total a pagar -->
<p>ARTICULOS PARA EL SALON SELECCIONADOS>>>: <?php echo array_sum($cantidad_productos); ?></p>
<p>PAGO TOTAL>>>: <?php echo $total_productos; ?></p> 
                            </tbody>
                            <tfoot>
                                <tr>
                                    
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>