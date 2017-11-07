# Función date

La función date sirve para generar una fecha (para mostrarla hay que hacer un echo).

## Parámetros

```php
date($formato)
```

$formato es una cadena de texto especificando el formato de fecha que se va generar,
por ejemplo:

```php
// genera la fecha completa en formato ISO '2017-11-06 11:00:00' 
date('Y-m-d H:i:s') 


// Para generar la fecha con formato en español dia/mes/año
date('d/m/Y')


// Para generar solo horas y minutos 
date('H:i')


// Para generar solo horas y minutos y segundos
date('H:i:s')

```

