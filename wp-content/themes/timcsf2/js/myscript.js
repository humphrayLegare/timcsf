$(document).ready(function () {
    changePictures("integration");
    var targetName = "integration";
    var self = this;
    $(".area").on("click", function ($e) {
        targetName = $(this).data("name");
        changePictures(targetName);
    });
    //change the pictures
    function changePictures(targetName) {
        removePictures();
        var dir = "wp-content/uploads/" + targetName + "/prj";
        console.log(dir);
        for (var i = 1; i <= 6; i++) {
            var animations = ["fadeInLeft", "fadeInRight"];
            var theAnimation = "";
            if ((i % 2) == 0) {
                theAnimation = animations[1];
            }
            else {
                theAnimation = animations[0];
            }
            $(".h_projects_area__screen").append("\n<a href='" + dir + i + ".jpg' data-toggle=\"lightbox\" data-width=\"800\"><img class=\"myImg\" src='" + dir + i + ".jpg' alt=\"" + targetName + "\"/></a>\n\n\n\n").addClass("animated " + theAnimation);
        }
    }
    function removePictures() {
        $(".h_projects_area__screen a").remove();
    }
});
