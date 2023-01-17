// Créez une fonction “tri” qui prend en paramètres un tableau de nombres nommé
// “numbers” et une variable “order” qui contient “asc” ou “desc”. A l’aide de la fonction
// sort() d’un algorithme développé par vos soins, cette fonction doit trier le tableau dans
// l’ordre ascendant ou décroissant, selon le paramètre passé, puis retourner le tableau.


function tri(table, ordre){
    // ordre ascendent
    if(ordre === 'asc'){
    numbers.sort(
        (a,b) => a - b
    );
    }
    // ordre décroissant
    if(ordre === 'desc'){
        numbers.sort(
            (a,b) => - a + b
        );
        }
    // for (i=0; i<6; i++){
    //     if (numbers[i] > numbers[i+1]){
    //         number1 = numbers[i];
    //         number2 = numbers[i+1];
    //         numbers[i] = number2;
    //         numbers[i+1] = number1;
    //     }
    // }
    return numbers;
}
let numbers = [2, 6, -7, 16, 28, 8, 13];
console.log(tri(numbers, 'asc'));