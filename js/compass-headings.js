$(document).ready(function() {

    var degrees = 0;

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
        $("#degrees").html(`equivalent degrees: ${degrees}`);
    });

    $("button").click(function() {
        console.log("clicked");
        let radians =  (450 - parseInt(degrees)) % 360;
        console.log(radians);
    })
})