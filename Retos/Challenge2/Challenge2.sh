#! /usr/bin/bash

<< 'Comment'
 * Reto #2
 * LA SUCESIÓN DE FIBONACCI
 * Fecha publicación enunciado: 10/01/22
 * Fecha publicación resolución: 17/01/22
 * Dificultad: DIFÍCIL
 *
 * Enunciado: Escribe un programa que imprima los 50 primeros números de la sucesión de Fibonacci empezando en 0.
 * La serie Fibonacci se compone por una sucesión de números en la que el siguiente siempre es la suma de los dos anteriores.
 * 0, 1, 1, 2, 3, 5, 8, 13...
Comment

read -p "¿Cuál debería ser el límite de la serie de Fibonacci?: " n

function fibonacci() {
a=0
b=1
for (( i = 0; i < n; i++ )); do
    echo -n "$a "
    fib=$(($a+$b))
    b=$a
    a=$fib
done
}
fibonacci

