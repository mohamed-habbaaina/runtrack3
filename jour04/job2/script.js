async function jsonValueKey(event){
    
    let key = event.currentTarget.value;    // recupérée la clés

    await fetch('./text.json')
    .then(async function(repons){
        
        let data = await repons.json();
            
        let affich = data[key];
            let p = document.querySelector('p');
                p.textContent = affich;
                
    })
}
const paramInput = document.body.querySelector('input');
paramInput.addEventListener('input', jsonValueKey);

