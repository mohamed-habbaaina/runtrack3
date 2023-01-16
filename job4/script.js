function bisextile(annee){

    if(annee % 4 == 0 && annee % 100 != 0){
        return true;
    }   return false;

}

console.log(bisextile(2023));
