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

   for number in $(seq 1 100); do
        if [[ $((number%3 )) == 0 && $((number%5)) == 0 ]]; then
            echo "$number fizzbuzz"
        elif [[ $((number%3)) -eq 0 ]]; then
            echo "$number es fizz"
        elif [[ $((number%5)) == 0 ]]; then
            echo "$number buzz"
        else
            echo "$number"
        fi
    done
  }
  
fizz_buzz
