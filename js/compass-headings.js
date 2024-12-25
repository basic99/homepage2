$(document).ready(function() {

    var degrees = 0;
    var degrees_counterclockwise = 90;

    console.log("ready");
    $("#degrees").html(`equivalent degrees: 0`);
   const selectElem = document.getElementById("headings");

    // When a new <option> is selected
    selectElem.addEventListener("change", () => {
        const index = selectElem.selectedIndex;
        // Add that data to the <p>
        let x = `selectedIndex: ${index}`;
        console.log(x);
        degrees = index * 11.25;
        degrees_counterclockwise =  (450 - parseInt(degrees)) % 360;
        $("#degrees_compass").html(`equivalent compass degrees: ${degrees}`);
        $("#degrees_trig").html(`equivalent trigonometry degrees: ${degrees_counterclockwise}`);
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