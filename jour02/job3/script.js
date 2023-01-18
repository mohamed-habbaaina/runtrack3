
window.onload = () => { //  pour attendre que la page soit préte avant de l'utiliser
  console.log('page est prete');

  let nombreClics = 0;  // compteur de nombre de clique.
  function addone() {
    nombreClics++;
    document.querySelector("#compteur").textContent  = nombreClics; // replacer le contenu de id "compteur" par nombreClics
  }
  
  document.querySelector('button').addEventListener("click", addone); // selectionné le button est definir click comme un evenement
  
};
