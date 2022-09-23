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

function fizz_buzz(){
  for ($x = 1; $x <= 100; $x++) {
    if ($x % 3 == 0 && $x % 5 == 0) {
      echo "$x es fizzbuzz <br>";
    } else if ($x % 3 == 0) {
      echo "$x es fizz <br>";
    } else if ($x % 5 == 0) {
      echo "$x es buzz <br>";
    } else {
      echo "$x <br>" ;
    }

  }
}
fizz_buzz();
?> 