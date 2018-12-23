
$(function () {
    showrecord();

    var verifyid = GetParameterValues('update');
    function GetParameterValues(param) {
        var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < url.length; i++) {
            var urlparam = url[i].split('=');
            if (urlparam[0] == param) {
                return urlparam[1];
            }
        }
    }

    if (verifyid != null) {
        ufi(verifyid);
    }

    function showrecord() {
        $.ajax({
            type: "POST",
            url: "main.aspx/awardsmainshowupdates",
            data: "{}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.divupdates').html(response.d);
                if (verifyid == null || verifyid == "") {
                    var tid = $(".divupdates").find("a").eq(0).attr("id");
                    ufi(tid);
                }
            },

            error: function (response) {
            }
        });
    }
    $('.divupdates').delegate('a', 'click', function () {
        var id = $(this).attr('id');
        // alert(wid+'++++'+gid);
        $.ajax({
            type: "POST",
            url: "main.aspx/showimageupdates",
            data: "{'id':'" + id + "'}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.showimageupdates').html(response.d);
                $('.flythat').show();
                // alert(response.d);
            },
            error: function (response) {
            }
        });


    });
    function ufi(idd) {
        $.ajax({
            type: "POST",
            url: "main.aspx/showimageupdates",
            data: "{'id':'" + idd + "'}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.showimageupdates').html(response.d);
                $('.flythat').show();
                // alert(response.d);
            },
            error: function (response) {
            }
        });
    }
});