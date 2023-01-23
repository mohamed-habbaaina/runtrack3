let matchCss2min = window.matchMedia("(min-width: 1681px)");
let matchCss2max = window.matchMedia("(max-width: 1920px)");
let matchCss3min = window.matchMedia("(min-width: 1281px)");
let matchCss3max = window.matchMedia("(max-width: 1680px)");
let matchCss4 = window.matchMedia("(max-width: 1281px)");



function resiz(){
if (matchCss2min.matches && matchCss2max.matches) {
    document.body.style.backgroundColor = "#ffca4b";
}
else if (matchCss3min.matches && matchCss3max.matches){
    document.body.style.backgroundColor = "#275fa0";

}
else if(matchCss4.matches){
    document.body.style.backgroundColor = "#ffffff";

}
else {
    document.body.style.backgroundColor = "#88c1d0";

  }
}
  window.addEventListener("resize", resiz); //  ajout de addEventListener pour charger automatiquement quand je redimensionne la page
