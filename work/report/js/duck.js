"use strict";

(function () {
    var element = document.getElementById("duck");
    var hidden = false;

//Hides duck/penguin for 3 seconds
    setInterval(function () {
        document.getElementById("duck").style.visibility = hidden ? "visible" : "hidden";
        hidden = !hidden;
    }, 3000);
    


    element.addEventListener("click", function () {
        element.innerHTML = element.innerHTML + "<p>" + element.offsetLeft + "</p>";
        console.log("Duck clicked");

    });

    element.addEventListener("mouseover", function () {
        element.style.left = element.offsetLeft + 20 + "px";
        console.log(element.style.left);
        console.log(element.offsetLeft);
        console.log("Mouse over");

    });



    console.log(element);
    console.log("Duck ready");

})();