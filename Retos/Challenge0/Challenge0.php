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