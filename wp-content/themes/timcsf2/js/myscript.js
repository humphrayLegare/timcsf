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
            var animations = ["fadeIn", "fadeInDown", "fadeInLeft", "fadeInRight"];
            var intRan = Math.floor(Math.random() * Math.floor(3));
            var theAnimation = animations[intRan];
            $(".h_projects_area__screen").append("<a href='" + dir + i + ".jpg'\ndata-toggle=\"lightbox\" data-width=\"800\"><img class=\"myImg animated " + theAnimation + "\" src='" + dir + i + ".jpg'\nalt=\"" + targetName + " projet " + i + "\"/></a>\n\n\n\n");
        }
    }
    function removePictures() {
        $(".h_projects_area__screen a").remove();
    }
});
