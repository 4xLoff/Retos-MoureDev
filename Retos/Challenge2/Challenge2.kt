import java.math.BigInteger

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

fun main() {

    var n0: Long = 0
    var n1: Long = 1

    (1..50).forEach { _ ->

        println(n0)

        val fib = n0 + n1
        n0 = n1
        n1 = fib
    }
}


