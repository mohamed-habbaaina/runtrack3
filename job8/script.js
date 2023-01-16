// Créez une fonction “sommenombrespremiers” qui prend en paramètres deux variables.
// Si ces deux variables sont des nombres premiers, alors la fonction retourne leur
// somme. Sinon, la fonction retourne false.


function sommenombrespremiers(nmb1, nmb2){
    let ver_nmb1 = true;
    let ver_nmb2 = true;

    for (i = 2; i < nmb1; i++){
        if(nmb1 % i == 0){
            ver_nmb1 = false;
        }
    }
    
    for (j = 2; j < nmb2; j++){
        // console.log('\n' + j + ' : ' + nmb2 + ' / ' + nmb2 % j);
        // premier2 = nmb2 % j; 
        if(nmb2 % j === 0){
            ver_nmb2 = false;
        }
    }
    
    if(ver_nmb1 === true && ver_nmb2 === true){
        return (nmb1+nmb2);}
    else {return"C'est pas des nombre premier";}
    
  
}

console.log(sommenombrespremiers(13,17));