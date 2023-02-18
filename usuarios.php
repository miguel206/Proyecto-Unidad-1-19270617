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
            background: linear-gradient(to bottom right, #4b6cb7, #182848);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="text-center mb-5">Ticket de pago</h1>
                        <h3 class="text-center mb-5">Gracias por su compra</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                            </thead>
                            <tbody>
                            <?php


                    session_start();


    $productos = array(
    array('nombre' => 'CHEETOS', 'precio' => 12),
    array('nombre' => 'COCA-COLA', 'precio' =>23),
    array('nombre' => 'AZUCAR', 'precio' => 38)
);

$cantidad_productos = $_SESSION['cantidad_productos'];
$total_productos = $_SESSION['total_productos'];
?>
<!-- AgregO el código HTML para mostrar los totales de productos y el total a pagar -->
<p>Total de productos: <?php echo array_sum($cantidad_productos); ?></p>
<p>Total a pagar: <?php echo $total_productos; ?></p> 
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