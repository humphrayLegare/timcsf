$(document).ready(function() {



    changePictures("integration");

    let targetName = "integration";
    let self = this;

    $(".area").on("click", function($e) {
        targetName = $(this).data("name");
        changePictures(targetName);

    });


    //change the pictures
    function changePictures(targetName) {

        removePictures();
        let dir = `wp-content/uploads/${targetName}/prj`;
        console.log(dir);

        for (let i = 1; i <= 6; i++) {
            var animations = ["fadeIn", "fadeInDown", "fadeInLeft", "fadeInRight"];
            var intRan = Math.floor(Math.random() * Math.floor(3));
            var theAnimation = animations[intRan];


            $(".h_projects_area__screen").append(`<a href='${dir}${i}.jpg'
data-toggle="lightbox" data-width="800"><img class="myImg animated ${theAnimation}" src='${dir}${i}.jpg'
alt="${targetName} projet ${i}"/></a>



`);
        }




    }



    function removePictures() {
        $(".h_projects_area__screen a").remove();

    }
















});
