$(document).ready(function () {
    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: "main.aspx/journalsnews",
        data: "{}",
        dataType: "json",
        async: true,
        success: function (data) {
            $(".journals").html(data.d);
        },
        error: function (data) {
            alert("Something Went Wrong...");
        }
    });
});