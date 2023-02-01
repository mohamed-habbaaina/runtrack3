// let register = document.querySelector('#btn-register');
// let formContainer = document.querySelector('#form-register')

// register.addEventListener("click", async function(){
    
//     await fetch("inscription.php")
    
//     .then((rpns) =>{
//         if(rpns.ok){

//             return rpns.text();
//         }
//     })

//     .then((html) =>{
//         formContainer.innerHTML = html;
//         console.log(formContainer);
//     })
// })
const form = document.querySelector('#form-register');

    form.addEventListener('submit', async function(e){
        e.preventDefault();

        const payload = new FormData(form);
        // console.log([...payload])


        fetch("inscription.php", {method: 'post', body: payload})
        
        .then(rpns => rpns.text())
        .then(data => console.log(data))
    })