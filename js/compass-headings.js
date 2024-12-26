
function compass2trig(degrees) {

    if (degrees <= 90) {
        return 90 - degrees;
    } else {
        let val = degrees - 90;
        return 360 - val;
    }

}

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
        degrees_trig = compass2trig(degrees_compass);

        $("#degrees_compass").html(`equivalent compass degrees: ${degrees_compass}`);
        $("#degrees_trig").html(`equivalent trigonometry degrees: ${degrees_trig}`);
    });

    $("#calculate").click(function() {
        console.log("clicked");
        let radians = (degrees_trig / 180) * Math.PI;
        console.log(radians);
        let distance = $("#distance").val();
        let start_x = $("#start_x").val();
        let start_y = $("#start_y").val();
        // console.log(start_y);
        // console.log(distance)
        let end_x = Math.cos(radians) * parseFloat(distance) + parseFloat(start_x);
        $("#end_x").val(end_x.toFixed(3));
        let end_y = Math.sin(radians) * parseFloat(distance) + parseFloat(start_y);
        $("#end_y").val(end_y.toFixed(3));

    });

    $("#reset").click(function() {
        window.location.reload();
    });



});