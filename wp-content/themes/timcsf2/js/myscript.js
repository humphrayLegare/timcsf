$(document).ready(function () {
    var targetName = "integration";
    var self = this;
    $(".area").on("click", function ($e) {
        targetName = $(this).data("name");
        changePictures(targetName);
    });
    //change the pictures
    function changePictures(targetName) {
        var dir = "wp-content/uploads/" + targetName + "/prj";
        console.log(dir);
        for (var i = 1; i <= 6; i++) {
            $(".h_projects_area__screen").append("\n<a href='" + dir + i + ".jpg' data-toggle=\"lightbox\" data-width=\"800\"><img class=\"myImg\" src='" + dir + i + ".jpg' alt=\"" + targetName + "\"/></a>\n\n\n\n");
        }
    }
    // let dir = "wp-content/uploads/02/";
    // let fileextension = ".jpg";
    // $.ajax({
    //     //This will retrieve the contents of the folder if the folder is configured as 'browsable'
    //     url: dir,
    //     success: function(data) {
    //         //List all .jpg file names in the page
    //         $(data).find("a:contains(" + fileextension + ")").each(function() {
    //             // var filename = this.href.replace(window.location.host, "").replace("http://", "");
    //             $(".h_projects_area__screen").append("<img src='" + dir + filename + "'>");
    //         });
    //     }
    // });
});
