$.renderView = function(view) {

    $.ajax({
        method: "GET",
        url: "AJAX.RenderPartialView.php",
        data:{
            view: view
        },
        success: function(html) {
            $("#content").html(html);
        }
    });

};


$(function() {

    $(".renderView").click(function() {
        $.renderView($(this).attr("data-view"));
    });


});