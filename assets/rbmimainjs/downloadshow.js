
$(function () {
    showrecord();
    function showrecord() {
        $.ajax({
            type: "POST",
            url: "main.aspx/downloadshow",
            data: "{}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.downloads').html(response.d);
            },

            error: function (response) {
            }
        });
    }
});