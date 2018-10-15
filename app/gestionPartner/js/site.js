$.renderView = function(view) {

    $.ajax({
        method: "GET",
        url: "../controller/AJAX.RenderPartialView.php",
        data:{
            view: view
        },
        success: function(html) {
            $("#main-content").html(html);
        }
    });

};


$(function() {




});