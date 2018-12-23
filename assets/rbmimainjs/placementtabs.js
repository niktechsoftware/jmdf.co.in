$(document).ready(function () {
    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: "main.aspx/placementnewstab",
        data: "{}",
        dataType: "json",
        async: true,
        success: function (data) {
            $(".placementnews").html(data.d);
        },
        error: function (data) {
            alert("Something Went Wrong...");
        }
    });

    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: "main.aspx/placementeventtab",
        data: "{}",
        dataType: "json",
        async: true,
        success: function (data) {
            $(".placementevents").html(data.d);
        },
        error: function (data) {
            alert("Something Went Wrong...");
        }
    });
});