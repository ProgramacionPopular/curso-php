<?php

function obtener_numero_veces_pagina_vista()
{
    if (file_exists('visitas.txt'))
    {
        $veces_vista = intval(file_get_contents('visitas.txt'));
        return $veces_vista;
    }
    else
    {
        return 0;
    }
}

function registrar_pagina_vista()
{
    $veces_vista = obtener_numero_veces_pagina_vista();
    $veces_vista = $veces_vista + 1;
    file_put_contents('visitas.txt', $veces_vista);
    return $veces_vista;
}

/* fin de archivo */