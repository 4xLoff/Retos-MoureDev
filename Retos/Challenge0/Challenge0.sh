#! /usr/bin/bash

<< 'Comment'
 * Reto #0
 * EL FAMOSO "FIZZ BUZZ"
 * Fecha publicación enunciado: 27/12/21
 * Fecha publicación resolución: 03/01/22
 * Dificultad: FÁCIL
 * Enunciado: Escribe un programa que muestre por consola (con un print) los números de 1 a 100 (ambos incluidos y con un salto de línea entre cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
Comment

function fizz_buzz {

   for i in $(seq 1 100); do
        if [[ $(( i%3 )) == 0 && $(( i%5 )) == 0 ]]; then
            echo "$i es fizzbuzz"
        elif [[ $(( i%3 )) -eq 0 ]]; then
            echo "$i es fizz"
        elif [[ $(( i%5 )) == 0 ]]; then
            echo "$i es buzz"
        else
            echo "$i "
        fi
    done
  }
  
fizz_buzz
