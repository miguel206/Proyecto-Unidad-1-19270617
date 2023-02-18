
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
<html>
<head>
  <title>Ventana DeL Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: burlywood;
    }
    h1 {
      text-align: center;
      color: blue;
    }
    h2 {
      margin-top: 50px;
      text-align: center;
      color: yellow;
    }
    #chartContainer {
      margin: 50px auto;
      background-color: blue;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      border-radius: 5px;
    }











  </style>
</head>
<body>
  <h1>Welcom to la ventana  del Administrador</h1>
  <h2>*VENTAS DURANTE EL ULTIMO AÑO 2022*</h2>
  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
  <!-- Scripts para mostrar la gráfica -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "*VENTAS EFECTUADAS*",
          fontColor: "background-color: brown;",
          fontFamily: "Arial, sans-serif",
          fontSize: 10
        },
        data: [{
          type: "column",
          dataPoints: [
            { label: "*ENERO-FEBRERO-MARZO*", y: 90 },
            { label: "*ABRIL-JUNIO*", y: 60 },
            { label: "*JULIO-AGOSTO*", y: 75 },
            { label: "*SEPTIEMBRE-OCTUBRE*", y: 80 },
            { label: "*NOVIEMBRE-DICIEMBRE*", y: 50}
           
           
            
          ],
          color: "black;"
        }]
      });
      chart.render();
    }
  </script>
</body>
</html>



