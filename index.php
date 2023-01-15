<?php

/**
 * Se deberá de realizar las modificaciones necesarias para dividir la página en secciones:
 * Todas las páginas estarán divididas en tres ficheros:
 * Header.php  contendrá la cabecera de la página.
 * TablaMultiplicar.php  contendrá el contenido de la página.
 * Footer.php  contendrá el footer de la página
 *
 * 1• Tabla de multiplicar  tabla creada de manera dinámica.
 *
 * 2• Días  Crea una función que calcule y retorne cuántos días hay entre dos cadenas de
 * texto que representen fechas. Una cadena de texto que representa una fecha tiene el
 * formato "dd/MM/yyyy". La función recibirá dos String y retornará un Int.
 *
 * 3• Factorial  de manera dinámica, haz el factorial de los números [1, 10]
 */

use \Controllers\BaseController as BC;

require_once 'app/Controllers/BaseController.php';

include 'app/Common.php';

$route = $_GET['route'] ?? 'index';

controller(BaseController::class)->$route();