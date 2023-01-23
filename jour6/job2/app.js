window.addEventListener("resize", function(){
let matchCss2min = window.matchMedia("(min-width: 1681px)");
let matchCss2max = window.matchMedia("(max-width: 1920px)");
let matchCss3min = window.matchMedia("(min-width: 1281px)");
let matchCss3max = window.matchMedia("(max-width: 1680px)");
let matchCss4 = window.matchMedia("(max-width: 1281px)");

if (matchCss2min.matches && matchCss2max.matches) {
    document.body.style.backgroundColor = "#ffca4b";
    console.log("1680 1900");
}
else if (matchCss3min.matches && matchCss3max.matches){
    document.body.style.backgroundColor = "#275fa0";
    console.log("1200 1600");

}
else if(matchCss4.matches){
    document.body.style.backgroundColor = "#ffffff";
    console.log("1200");

}
else {
    document.body.style.backgroundColor = "#88c1d0";
    console.log("else");

  }

});
