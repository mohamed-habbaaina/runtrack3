async function formAffich(){
    
    // let key = event.currentTarget.value;    // recupérée la clés

    await fetch('./pokemon.json')
    //  La promis
    .then(async function(repons){
        
        let _data = await repons.json();

        // Récupération de la data
        const data = Object.values(_data);
        
        // Vérifier que l'utilisateur a bien rempli l'ID ou le nom
        if(nom.value || id.value){
            
            data.forEach(e=>{

                //  comparer entre les inputs et la data
                if(e.name.french === nom.value || e.id == id.value){

                    nomPoki.innerText = 'Le Nom: ' + e.name.french;
                    typePoki1.innerText = 'Le Type: ' + e.type[0];
                    if (e.type[1]){ typePoki2.innerText = 'est: '+ e.type[1];}
        
                   } else {
                    // nomPoki.innerText = "L'Id ou le Nom ne correspond à aucun Pokémon !";
                   }

            })
            }
                
    })
}   
        //  cibler les éléments.
    const id = document.body.querySelector('#id');
    const nom = document.body.querySelector('#nom');
    const button = document.body.querySelector('button');

    const nomPoki = document.body.querySelector("#nomPoki");
    const typePoki1 = document.body.querySelector("#typePoki1");
    const typePoki2 = document.body.querySelector("#typePoki2");

        //  Le addEventListener
    button.addEventListener('click', formAffich);