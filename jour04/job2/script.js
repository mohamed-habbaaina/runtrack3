// async function jsonValueKey(event){
    
//     let key = event.currentTarget.value;    // recupérée la clés

//     await fetch('./text.json')
//     .then(async function(repons){
        
//         let data = await repons.json(); 
            
//         let affich = data[key];  // recupérer la data
//             let p = document.querySelector('p');
//                 p.textContent = affich;  //  l'affichage
                
//     })
// }
// const paramInput = document.body.querySelector('input');
// paramInput.addEventListener('input', jsonValueKey);




let jsonValueKey = (jsonString, key) => {
    let json = JSON.parse(jsonString);  //  changer le type de string a json

    let result = (json[key] !== undefined) ? json[key] : "";    //  condition pour eviter l'affichage d'erreur 

    return result;
};


let inputHandler = (event) => {
    
    let jsonString = '{"name": "La Plateforme_", "address": "8 rue d\'hozier", "city": "Marseille", "nb_staff": "11", "creation":"2019" }';
    let key = event.currentTarget.value;    // recupérer les inputs et les stocké dans une variable
    
    let value = jsonValueKey(jsonString, key);  // return la valeur dans le tableau
                                                // if "undefined" retur value ""
    let p = document.querySelector('p');
    p.textContent = value;
    
    // console.log(`value is ${value}`);

};


const paramInput = document.body.querySelector('input');
paramInput.addEventListener('input', inputHandler);


