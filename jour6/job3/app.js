window.addEventListener("resize", function(){

    const section = document.querySelectorAll(".section");

    let matchTabmax = window.matchMedia("(min-width: 768px)");
    let matchTabmin = window.matchMedia("(max-width: 1599px)");
    let matchPhon = window.matchMedia("(max-width: 767px)");
    let matchDefault = window.matchMedia("(min-width: 1600px)");


    if (matchTabmin.matches && matchTabmax.matches) {
        section.forEach(element => {
            // element.style.display = "flex";
            document.body.style.flexDirection = "row";
            document.body.style.flexWrap = "wrap";
            

            element.style.backgroundColor = "red";

        });

    }
    if(matchPhon.matches){

        section.forEach(element => {

            // element.style.display = "felx";
            document.body.style.flexDirection = "column";

            element.style.backgroundColor = "yellow";

        })
    }
    if (matchDefault.matches) {
        section.forEach(element => {
            // element.style.display = "flex";
            element.style.backgroundColor = "grey";


        })

      }

    });
