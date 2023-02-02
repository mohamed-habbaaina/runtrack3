

//  récupérer la data pour l'inscription des users
const form = document.querySelector('#form-register');

    form.addEventListener('submit', async function(e){
        e.preventDefault(); // empécher le traitement par defaut

        const payload = new FormData(this); // création d'un objet Form 

        fetch("inscription.php", {method: 'post', body: payload})   // récupérer les inputs avec la méthode Fetch
        
        .then((response) =>{

            //  Affichage de message si user est crée.
            if(response.status == 201){
                alert(response.statusText);
            }
        })
    })