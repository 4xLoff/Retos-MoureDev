<?php
/*
* Reto #1
 * ¿ES UN ANAGRAMA?
 * Fecha publicación enunciado: 03/01/22
 * Fecha publicación resolución: 10/01/22
 * Dificultad: MEDIA
 *
 * Enunciado: Escribe una función que reciba dos palabras (String) y retorne verdadero o falso (Boolean) según sean o no anagramas.
 * Un Anagrama consiste en formar una palabra reordenando TODAS las letras de otra palabra inicial.
 * NO hace falta comprobar que ambas palabras existan.
 * Dos palabras exactamente iguales no son anagrama.
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