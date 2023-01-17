
window.onload = () => { //  pour attendre que la page soit préte avant de l'utiliser
  console.log('page est prete');

  let nombreClics = 0;  // compteur de nombre de clique.
  function compteur() {
    nombreClics++;
    document.getElementById("compteur").textContent  = nombreClics; // replacer le contenu de id "compteur" par nombreClics
  }
  
  document.querySelector('button').addEventListener("click", compteur); // selectionné le button est definir click comme un evenement
  
};
