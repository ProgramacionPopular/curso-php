<?php
    $casas = file_get_contents("admin/casas.txt");
    $casas = explode("\r\n", $casas);
    $casas = array_filter($casas);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Titulo de la ventana</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <style>
            body { padding-top: 80px; }
            .muy-separado { margin-top: 100px; }
        </style>
    </head>

    <body>
        <div role="main" class="container">

            <h1 class="text-center">Inmobiliaria Virtual</h1>

            <p class="lead text-center">
                  Tenemos publicadas <strong><?php echo count($casas); ?></strong> casitas preciosas
            </p>

            <div class="row">
            <?php 
              foreach ($casas as $linea_casa) {
                  $casa = explode(";", $linea_casa);
                  $titulo = $casa[0];
                  $contenido = $casa[1];
                  $foto = $casa[2];

                  if (!$foto)
                  {
                    $foto = "fotos/no_disponible.png";
                  }

                  echo '<div class="col-3">';
                  include('partes/casa_listado.php');
                  echo '</div>';
              }
            ?>
          </div>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
