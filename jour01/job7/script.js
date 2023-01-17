// Créez une fonction “jourtravaille” qui prend en paramètre une date au format Date. Si la
// date correspond à un jour férié de l’année 2023, la fonction affiche “Le $jour $mois
// $année est un jour férié”. Si elle correspond à un samedi ou un dimanche, alors le
// message affiché est “Non, $jour $mois $année est un week-end”, sinon afficher “Oui,
// $jour $mois $année est un jour travaillé”.

// $jour correspond au numéro du jour, $mois au mois et $année à l’année. Les jours fériés
// sont référencés sur
// https://demarchesadministratives.fr/actualites/calendrier-des-jours-feries-2019-2020-2
// 021


function jourtravaille(date){
    var jourFerie = [["1-1", "Jour de l'An"], ["10-4", "Lundi de Pâques"], ["1-5", "Fête du travail"], ["8-5", "Armistice 1945"], ["18-5", "Ascension"], ["29-5", "Lundi de Pentecôte"], ["14-7", "Fête nationale"], ["15-8", "Assomption"], ["1-11", "Toussaint"], ["11-11", "Armistice 1918"], ["25-12", "Noël"]];
    // date_verif = new date(date);
    
    let date1 = new Date (date);
    day = date1.getDate();
    month = date1.getMonth() + 1;

    dayFerier = day + '-' + month;

    // pour les weekend ex: Le 2023-01-15 est un weekend
    if((day - 1) == 0 || (day - 1) == 6){
        console.log('Le '+ date + " est un weekend");
    }
    // pour parcurir le tableau des jour firier ex 1-1 est un jour ferier , est Jour de l'an.
    for(i = 0; i < 11; i++){
        if (jourFerie[i][0] == dayFerier){
            console.log('\nLe: ' + date + " est un jour ferier, c'est : " +  jourFerie[i][1]);

        }
    }
    
}
date = "2023-07-14";
console.log(jourtravaille(date));