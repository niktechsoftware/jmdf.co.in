
$(function () {
    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: "main.aspx/popupstatus",
        data: "{}",
        dataType: "json",
        async: true,
        success: function (data) {
            if (data.d == "Y") {
                $('.show1').click();
            }
        },
        error: function (data) {
            alert("Something Went Wrong");
        }
    });
});