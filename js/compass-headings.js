function compass2trig(degrees) {

    if (degrees <= 90) {
        return 90 - degrees;
    } else {
        let val = degrees - 90;
        return 360 - val;
    }

}

var points_list_fn = function(points_list) {
    let text = '';
    points_list.forEach((el) => {
        text += `${el[0]}  ${el[1]}\n`
    });
    return text;
}

$(document).ready(function() {

    var degrees_compass = 0;
    var degrees_trig = 90;
    var points_list = [];

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

        if (points_list.length == 0) {
            points_list.push([start_x, start_y]);
        }
        points_list.push([end_x.toFixed(3), end_y.toFixed(3)]);
        console.log(points_list);



        let points_list_text = points_list_fn(points_list);

        $("#points_table").val(points_list_text);
        $("#calculate").attr('disabled', 'disabled');



    });

    $("#reset").click(function() {
        window.location.reload();
        $("#calculate").removeAttr('disabled');
    });
    $("#add_point").click(function() {
        console.log("add point");
        let start_x = $("#end_x").val();
        $("#end_x").val('0');
        $("#start_x").val(start_x);

        let start_y = $("#end_y").val();
        $("#end_y").val('0');
        $("#start_y").val(start_y);
        $("#calculate").removeAttr('disabled');

    });



});