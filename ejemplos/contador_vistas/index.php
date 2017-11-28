<?php
    include('contador.php');
    $veces_vista = registrar_pagina_vista();
?>

<html>
    <head>
        <title>Contador de Vistas</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="contador-caja">
            <h3 class="contador-titulo">
                ¿Cuantas veces se ha visto esta página?
            <h3>

            <div class="contador-texto-conteo">
                <p>
                    Hola! esta página ha sido vista <?php echo $veces_vista ?> veces.
                </p>
            </div>
        </div>
    </body>
</html>