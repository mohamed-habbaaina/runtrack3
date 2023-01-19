async function expression(){
    const p = document.querySelector('p');
    
    await fetch("./expression.txt") //  wait pour que la promesse soit prete
    .then(async function(response) {    //  async pour utiliser await il faut que la fonction soit 'asyncron'
        let html = await response.text();
        p.innerHTML = html; //  innerHTML interprete les balises html, 
    })

    .catch(function(err) {
        console.log('ERREUR : ' + err);
    });
    
}
let button = document.getElementById("button");
button.addEventListener('click', expression);

