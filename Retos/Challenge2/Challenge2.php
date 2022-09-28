<?php
/*
 * Reto #2
 * LA SUCESIÓN DE FIBONACCI
 * Fecha publicación enunciado: 10/01/22
 * Fecha publicación resolución: 17/01/22
 * Dificultad: DIFÍCIL
 *
 * Enunciado: Escribe un programa que imprima los 50 primeros números de la sucesión de Fibonacci empezando en 0.
 * La serie Fibonacci se compone por una sucesión de números en la que el siguiente siempre es la suma de los dos anteriores.
 * 0, 1, 1, 2, 3, 5, 8, 13...
 */
function fib($n){
    if ($n == 0) {
        return 0;    
    } else if ($n == 1){
        return 1;    
    } else
        return (fib($n-1) + fib($n-2));
}
$n = readline("¿Cuál debería ser el límite de la serie de Fibonacci?: ");
for ($i = 0; $i < $n; $i++){  
    echo fib($i),' ';
}
?> 




