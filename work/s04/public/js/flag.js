(function () {
    'use strict';

    var flagTarget = document.getElementById('flag');
    var flagLink = document.getElementById('draw-elfenbenskusten');
    var flagLink1 = document.getElementById('draw-france');
    var flagLink2 = document.getElementById('draw-italy');

    

    //ELFENBENSKUSTEN
    function drawFlagElfenbenskusten()  {
        var flagElfenbenskusten = '<div class="flag elfenbenskusten"><div class="part1"></div>' +
        '<div class="part2"></div></div>';

        console.log("Drawing flag");
        flagTarget.innerHTML = flagElfenbenskusten;
    }


    flagLink.addEventListener("click", function () {
        console.log("Event for clicking link elfenbenskusten.");
        drawFlagElfenbenskusten();
    });

    // FRANCE
    function drawFlagFrance()  {
        var flagFrance = '<div class="flag france"><div class="part1"></div>' +
        '<div class="part2"></div></div>';

        console.log("Drawing flag");
        flagTarget.innerHTML = flagFrance;
    }

    flagLink1.addEventListener("click", function () {
        console.log("Event for clicking link france.");
        drawFlagFrance();
    });

    //ITALY
    function drawFlagItaly()  {
        var flagItaly = '<div class="flag italy"><div class="part1"></div>' +
        '<div class="part2"></div></div>';

        console.log("Drawing flag");
        flagTarget.innerHTML = flagItaly;
    }

    flagLink2.addEventListener("click", function () {
        console.log("Event for clicking link italy.");
        drawFlagItaly();
    });




    console.log('Sandbox MEGA is ready!');
})();
