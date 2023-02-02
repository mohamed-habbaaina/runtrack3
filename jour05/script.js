

//  récupérer la data pour l'inscription des users
const form = document.querySelector('#form-register');

// ********* Validation Email *********
let email = document.querySelector('#email');
    email.addEventListener('change', function(){

    // Création de la Regexp pour valider l'email
    let emailRegExp = new RegExp(
        '^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,}$', 'g'
    );

    //  tester l'adresse email
    let testEmail = emailRegExp.test(email.value); // return true ou false.
    //  recupérer la balise small avec 'nextElementSibling'
    let small = email.nextElementSibling;

    // L'Affichage de la validation de l'email
    if(testEmail){
        small.innerHTML = 'Adresse Email Valide';
        small.style.color = 'green';
        return true; // pour l'utiliser dans la function de submit form
    } else{
        small.innerHTML = 'Adresse Email Pas Valide (Carectère Valide: A-Z 0-9 _.-)';
        small.style.color = 'red';
        return false;
    }
})

// ********* Validation Password *********
let password = document.querySelector('#password');
    password.addEventListener('change', function(){

    let msg;
    let valid = false;

    console.log(password.value);


    // verifier que Password contien minimum 4 caracteres;
    if(password.value.length < 4){
        msg = 'Password trop cours Minimum 4 caracteres !';
    }

    //  Au moins une maj
    else if (!/[A-Z]/.test(password.value)){
        msg = 'Le Password dois contenir au moins une Majuscule !';
    }

    //  Au moins une min
    else if (!/[a-z]/.test(password.value)){
        msg = 'Le Password dois contenir au moins une Miniscule !';
    }

    //  Au moins un chiffre
    else if (!/[0-9]/.test(password.value)){
        msg = 'Le Password dois contenir au moins un Chiffre !';
    }

    else{
        msg = 'Le Password est Valide';
        valid = true;
    }
    
    // L'Affichage de la validation de Password.
    let smallPass = password.nextElementSibling;

    if(valid){
        smallPass.innerHTML = 'Password Valide';
        smallPass.style.color = 'green';
        return true;
    } else{
        smallPass.innerHTML = msg;
        smallPass.style.color = 'red';
        return false;
    }    
})


form.addEventListener('submit', async function(e){
    e.preventDefault(); // empécher le traitement par defaut
    
    const payload = new FormData(this); // création d'un objet Form 
   
    // // récupération des input
    // let nom = payload.get('nom');
    // let prenom = payload.get('prenom');
    // let email = payload.get('email');
    // let password = payload.get('password');
    // let repass = payload.get('repass');
    
    // // console.log(nom+'\n'+prenom+'\n'+email+'\n'+password+'\n'+repass);
    // payload.email.addEventListener('change', function(){
    //     console.log('ok');
    // })





        // récupérer les inputs avec la méthode Fetch
        await fetch("inscription.php", {
            method: 'post',
            body: payload
        })   
        
        .then((response) =>{
            
            //  Affichage de message si user est crée.
            if(response.status == 201){
                alert(response.statusText);
            }
            return response.text();
        })
        // .then((payload)=>{
        //     console.log(payload.get('nom'));
        // })
    })