'''
 * Reto #2
 * LA SUCESIÓN DE FIBONACCI
 * Fecha publicación enunciado: 10/01/22
 * Fecha publicación resolución: 17/01/22
 * Dificultad: DIFÍCIL
 *
 * Enunciado: Escribe un programa que imprima los 50 primeros números de la sucesión de Fibonacci empezando en 0.
 * La serie Fibonacci se compone por una sucesión de números en la que el siguiente siempre es la suma de los dos anteriores.
 * 0, 1, 1, 2, 3, 5, 8, 13...
''' 

# Solicita numero:
n = int(input("¿Cuál debería ser el límite de la serie de Fibonacci?: "))

def fib(n):
    a = 0
    b = 1
    
    for k in range(n):
        c = b+a
        a = b
        b = c
        
    return b
for x in range(n):
    print(fib(x),end=" ")

