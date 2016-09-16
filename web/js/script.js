/**
 * Created by HOME on 14.09.2016.
 */
$(document).ready(
    function() {
        $("#title").waypoint(function (direction) {
            
            if (direction == "down") {

                jQuery("#title").addClass("active");

            } else if (direction === "up") {
                $("#title").removeClass("deactive");
            } ;
        }, {offset: 100});
    });