$(document).ready(function() {

    var degrees_compass = 0;
    var degrees_trig = 90;

    console.log("ready");
    $("#degrees").html(`equivalent degrees: 0`);
   const selectElem = document.getElementById("headings");

    // When a new <option> is selected
    selectElem.addEventListener("change", () => {
        const index = selectElem.selectedIndex;
        // Add that data to the <p>
        let x = `selectedIndex: ${index}`;
        console.log(x);
        degrees_compass = index * 11.25;
        degrees_trig =  (450 - parseInt(degrees_compass)) % 360;
        $("#degrees_compass").html(`equivalent compass degrees: ${degrees_compass}`);
        $("#degrees_trig").html(`equivalent trigonometry degrees: ${degrees_trig}`);
    });

    $("button").click(function() {
        console.log("clicked");
        let degrees_counterclockwise =  (450 - parseInt(degrees)) % 360;
        let radians = (degrees_counterclockwise / 180) * Math.PI;
        console.log(radians);
        let distance = $("#distance").val();
        console.log(distance)
    })
})