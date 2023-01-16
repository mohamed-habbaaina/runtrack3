// Créez une fonction fizzbuzz qui ne prend pas de paramètre. Dans cette fonction,
// affichez dans la console web les nombres de 1 à 151. Remplacez certains nombres par
// un mot selon les conditions suivantes :
// ● Si le nombre est un multiple de 3, affichez “Fizz”.
// ● Si le nombre est un multiple de 5, affichez “Buzz”.
// ● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”


function fizzbuzz(){
    // var i;
    for (i = 0; i < 152; i++){
        modulo3 = i % 3;
        modulo5 = i % 5;
        if (modulo3 == 0 && modulo5 == 0){
        console.log('le nombre ' + i + ' est un multiple de 3 & 5 : ' + '"FizzBuzz"');
            }
        else if (modulo3 == 0){
            console.log('le nombre ' + i + ' est un multiple de 3 : ' + '"Fizz"');
            }
        else if (modulo5 == 0){
            console.log('le nombre ' + i + ' est un multiple de 5 : ' + '"Buzz"');
            }
    }
}
console.log(fizzbuzz());