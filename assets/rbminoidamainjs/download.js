﻿
$(function () {
    showrecord();
    function showrecord() {
        $.ajax({
            type: "POST",
            url: "../Default.aspx/downloadmainshow",
            data: "{}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.divdownload').html(response.d);
            },

            error: function (response) {
            }
        });
    }
});