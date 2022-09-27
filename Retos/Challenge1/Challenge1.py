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

    lista1 = (list(primeraPalabra))
    lista2 = (list(segundaPalabra))

    lista1.sort()
    lista2.sort()
    
    pPalabra = "".join(lista1)
    sPalabra = "".join(lista2)

    if pPalabra == sPalabra:
        print (f"[+] Las palabras {primeraPalabra} y {segundaPalabra} son un anagrama \n")
    else:
        print (f"[-] Las palabras {primeraPalabra} y {segundaPalabra} no son un anagrama \n")

anagrama(primeraPalabra,segundaPalabra)


