$(function () {
    $.ajax({
        type: "POST",
        url: "../main-noida.aspx/shownewshome",
        data: "{}",
        contentType: "application/json; charset=utf-8",
        dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
        success: function (response) {
            $('.news').html(response.d);
        },

        error: function (response) {
        }
    });
});