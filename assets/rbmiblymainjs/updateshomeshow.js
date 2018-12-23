$(function () {
    $.ajax({
        type: "POST",
        url: "../Default.aspx/showupdateshome",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
        success: function (response) {
            $('.updates').html(response.d);
        },

        error: function (response) {
        }
    });
});




$(function () {
    $.ajax({
        type: "POST",
        url: "../Default.aspx/showpressreleases",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
        success: function (response) {
            $('.pressreleases').html(response.d);
        },

        error: function (response) {
        }
    });
});