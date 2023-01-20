async function formAffich(event){
    
    let key = event.currentTarget.value;    // recupérée la clés

    await fetch('./pokemon.json')
    .then(async function(repons){
        
        let data = await repons.json();

        console.log(data);
            
        // let affich = data[key];  // recupérer la data
        //     let p = document.querySelector('p');
        //         p.textContent = affich;  //  l'affichage
                
    })
}
const id = document.body.querySelector('#id');
const nom = document.body.querySelector('#nom');
const type = document.body.querySelector('#type');
const button = document.body.querySelector('button');

button.addEventListener('click', formAffich);