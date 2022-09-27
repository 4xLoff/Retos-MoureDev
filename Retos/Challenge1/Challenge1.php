<?php
/*
 * Reto #0
 * EL FAMOSO "FIZZ BUZZ"
 * Fecha publicación enunciado: 27/12/21
 * Fecha publicación resolución: 03/01/22
 * Dificultad: FÁCIL
 * Enunciado: Escribe un programa que muestre por consola (con un print) los números de 1 a 100 (ambos incluidos y con un salto de línea entre cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */

$palabra1 = readline("ingrse la primera palabra: ");
$palabra2 = readline("ingrse la segunda palabra: ");
$coincidencias = 0;

if (strlen($palabra1) == strlen($palabra2)) {
    $numpal = strlen($palabra1);

    for ($i=0; $i < $numpal; $i++) {
        $letra = $palabra1[$i];
        for ($j=0; $j < $numpal; $j++) {
            if ($letra == $palabra2[$j]) {
                $coincidencias++;
            }
        }
    }

    if ($coincidencias == $numpal) {
        echo "es un anagrama";
    }else {
        echo "no es un anagrama";
    }

}else {
    echo "no es un angrama";
}





?> 