const prompt = require("prompt-sync")({ sigint: true});
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



function anagrama(palabra1, palabra2){
    //Solicita las palabras a comprobar
    var palabra1 = prompt ("escribe la primera palabra");
    var palabra2 = prompt ("escribe la segunda palabra");
    var son_anagramas = true;
    var numpal;

    if(palabra1.length != palabra2.length){
        son_anagramas = false
    }else{
        numpal=0;
        let lispalabra1 = Array.from(palabra1);
        lispalabra1.sort();
        let lispalabra2 = Array.from(palabra1);
        lispalabra2.sort();

        while (son_anagramas && (numpal < lispalabra1.length)){
            if (lispalabra1[numpal] !=lispalabra2[numpal]){
                son_anagramas = false
            }
            numpal++;
        } 

    }
    return son_anagramas;
}

/*
    // Cambiar a minúsculas ambas cadenas
    palabra1 = palabra1.toLowerCase();
    palabra2 = palabra2.toLowerCase();
    
    // Convertir ambas cadenas en un arreglo
    palabra1 = palabra1.split("");
    palabra2 = palabra2.split("");
    
    // Ordenar ese arreglo
    palabra1 = palabra1.sort();
    palabra2 = palabra2.sort();
    
    // Una vez ordenados, los convertimos a cadena nuevamente
    palabra1 = palabra1.join("");
    palabra2 = palabra2.join("");
    
    // Finalmente comparamos
    
    if(palabra1 === palabra2){
        console.log(`${palabra1} y ${palabra2} son anagramas`);
    }else{
        console.log(`${palabra1} y ${palabra2} no son anagramas`);
    }
  }

*/


