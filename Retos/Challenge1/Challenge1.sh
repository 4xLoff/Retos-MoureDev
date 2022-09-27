#! /usr/bin/bash

# set -o errexit  # the script ends if a command fails
# set -o pipefail # the script ends if a command fails in a pipe
# set -o nounset  # the script ends if it uses an undeclared variable
# set -o xtrace # if you want to debug

<< 'Comment'
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
Comment

# Solicita las palabras a comprobar
read -p "Primera palabra: " p1
read -p "Segunda palabra: " p2

#Inicializacion de variables
i=0
v1=${p1:$i:1}
c1+=("$v1")
v2=${p2:$i:1}
c2+=("$v2")

#Descomponer palabras
while [ "$v1" != "" ] || [ "$v2" != "" ] 
do 
    let i=$i+1
    v1=${p1:$i:1}
    v2=${p2:$i:1}

    c1+=("$v1")
    c2+=("$v2")
done

c1_sorted=($(for i in "${c1[@]}"; do echo $i; done | sort))
c2_sorted=($(for i in "${c2[@]}"; do echo $i; done | sort))

if [[ ${c1_sorted[@]} = ${c2_sorted[@]} ]];
    then
        echo "[+] Las palabras son un anagrama"
    else
        echo "[-] Las palabras no son un anagrama"
fi
 
