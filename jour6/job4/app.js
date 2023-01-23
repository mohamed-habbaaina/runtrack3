window.addEventListener("resize", function(){

    const berger_menu = document.querySelector(".berger");
    const navBar = document.querySelector(".nav-bar")

    if(window.matchMedia("(max-width: 767px)").matches){
        berger_menu.style.display = "block";
        navBar.style.position = "absolute";
        navBar.style.right = "0px";
        navBar.style.display = "flex";
        navBar.style.flexDirection = "column";
        navBar.style.alignItems = "center";

    } else {
        berger_menu.style.display = "none";
        navBar.style.display = "flex";
        navBar.style.justifyContent = "space-around";
        navBar.style.alignIitems = "center";

    }

    });
