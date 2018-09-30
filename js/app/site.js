$.renderView = function() {

    $.ajax({
        url: "AJAX.RenderPartialView.php",
        success: function(html) {
            $("#content").html(html);
        }
    });

};


$(function() {

    $(".renderView").click(function() {
        $.renderView();
    });


});