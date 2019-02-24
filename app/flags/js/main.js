$.renderView = function(view) {
    $.ajax({
        method: "GET",
        url: "../controller/viewsService.php",
        data:{
            view: view
        },
        success: function(html) {
            $("#main-content").html(html);
        }
    });

};

$(function() {

    if(location.hash) {
        $.renderView(location.hash.replace("#", ""));
    }

    $(".renderView").click(function() {
        $.renderView($(this).attr("data-view"));
    });

    $(document).on("click", "#menu-toggle", function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if ($("#hideshowmenu").hasClass("glyphicon-arrow-left")){
            $("#hideshowmenu").removeClass("glyphicon-arrow-left").addClass("glyphicon-arrow-right");
        } else {
            $("#hideshowmenu").removeClass("glyphicon-arrow-right").addClass("glyphicon-arrow-left");
        }
     });


});