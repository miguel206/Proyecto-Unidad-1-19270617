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

<?php

session_start();

echo "<h1 style='text-align:center'>SELECCIONE LOS SERVICIOS A AÑADIR AL SALON DE EVENTOS Y LA CANTIDAD</h1>";


$productos = array(
    array('nombre' => 'EQUIPO DE SONIDO RENTA', 'precio' => 1000, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvDe_PLVDFZ-6n3hR9d6X1543BYwqvbLcH_w&usqp=CAU.com/150'),
    array('nombre' => 'PRECIO X DIA(RENTA)', 'precio' => 2000, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpDx2bNWoR6zPPJWiH-_sw8wMKKQ4R7Ak-fw&usqp=CAU.com/150'),
    array('nombre' => 'SILLAS', 'precio' => 30, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNOLHFfZqhovbwu9VG8eQ_4lN-TxQHgbUEyA&usqp=CAU.com/150'),
    array('nombre' => 'AIRE ACONDICIONADO', 'precio' => 250, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFv9_FgMmzD7jTo3-W6MzGu0_dC4Sh8Myiqw&usqp=CAU.com/150'),
    array('nombre' => 'MANTELERIA', 'precio' => 300, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOfMV_8VlTrTS0kYC2ac4biIgIkMTmr58orw&usqp=CAU.com/150'),
    array('nombre' => 'MOBILIARIO', 'precio' => 500, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpLB-44M95RytQ9EoA9L3qJLHvMFXuSz-rg&usqp=CAU.com/150')
);


if(isset($_POST['submit'])) {
    $cantidad_productos = $_POST['cantidad'];
    $_SESSION['cantidad_productos'] = $cantidad_productos;

    $total_productos = 0;
    foreach($productos as $key => $producto) {
        $total_productos += $producto['precio'] * $cantidad_productos[$key];
    }
    $_SESSION['total_productos'] = $total_productos;
    header('Location: carrito.php');
}
?>



<div style="width: 50%; margin: 0 auto; padding: 20px; background-color: blue; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); text-align: center;">
    <form method="POST" action="">
        <?php foreach($productos as $key => $producto) { ?>
            <div style="margin: 10px 0;">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" style="width: 100px; height: 100px; object-fit: cover;">
                <label style="font-size: 18px;"><?php echo $producto['nombre']; ?> - Precio: $<?php echo $producto['precio']; ?></label>
                <input type="number" name="cantidad[]" min="0" value="0" style="font-size: 16px; margin-left: 10px;">
            </div>
        <?php } ?>
        
        <input type="submit" name="submit" value="*REALIZAR COMPRA*" style="font-size: 18px; padding: 10px 20px; margin-top: 20px; background-color: cyan; color: black; border: none; border-radius: 5px; cursor: pointer;">
    </form>
</div>