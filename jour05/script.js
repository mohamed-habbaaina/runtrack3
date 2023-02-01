
const form = document.querySelector('#form-register');

    form.addEventListener('submit', async function(e){
        e.preventDefault();

        const payload = new FormData(form);
        // console.log([...payload])


        fetch("inscription.php", {method: 'post', body: payload})
        
        .then(rpns => rpns.text())
        .then(data => console.log(data))
    })