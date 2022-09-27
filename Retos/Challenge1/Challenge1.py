'''
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
 '''
 
# Solicita las palabras a comprobar
primeraPalabra = input("Ingresa primera palabra: ").lower()
segundaPalabra = input("Ingresa segunda palabra: ").lower()

def anagrama (primeraPalabra,segundaPalabra):
    #Convertir ambas cadenas en un arreglo
    lista1 = (list(primeraPalabra))
    lista2 = (list(segundaPalabra))
    
    #Ordenar ese arreglo
    lista1.sort()
    lista2.sort()
    
    #Una vez ordenados, los convertimos a cadena nuevamente
    pPalabra = "".join(lista1)
    sPalabra = "".join(lista2)

    #Finalmente comparamos
    if pPalabra == sPalabra:
        print (f"[+] Las palabras {primeraPalabra} y {segundaPalabra} son un anagrama \n")
    else:
        print (f"[-] Las palabras {primeraPalabra} y {segundaPalabra} no son un anagrama \n")

anagrama(primeraPalabra,segundaPalabra)


