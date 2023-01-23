async function formAffich(event){
    
    let key = event.currentTarget.value;    // recupérée la clés

    await fetch('./pokemon.json')
    .then(async function(repons){
        
        let _data = await repons.json();

        const data = Object.values(_data);

        data.forEach(key =>
            console.log((Object.values(key)))
            
            )


             
             


        // for(const d in data){

        //     let data_name = Object.entries(data[d]);
        //     console.log(data_name[d]);
            


        //     // console.log(data[d][1]);    // data[d][0] id
        // }
            
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