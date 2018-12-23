$(document).ready(function () {
    var year = "-1";
    var month = "-1";
    var verifyid = GetParameterValues('id');
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
        showgrid(year, month, verifyid);
    }

    $("#ddlyear").change(function () {
        year = $("#ddlyear :selected").val();
        // alert(year);
        $(".fp_scrollWrapper").hide();
        showgrid(year, month, verifyid);
    });

    $("#ddlmonth").change(function () {
        month = $("#ddlmonth :selected").val();
        $(".fp_scrollWrapper").hide();
        // alert(year);
        showgrid(year, month, verifyid);
    });

    //   showgrid(year, month,verifyid);
    function showgrid(year, month, clgid) {
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "../admin/Default.aspx/gallery",
            data: "{'year':'" + year + "','month':'" + month + "','collegeid':'" + clgid + "'}",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },

            async: true,
            success: function (data) {
                $('#gall').html(data.d);
                clgname();
                // setTimeout(sss, 500);
            },
            error: function (Result) {
            }
        });
    }

    function clgname() {
        var cl = $("#gall").find(".cc").eq(0).attr("clgnmm");
        $(".clgname").text(cl);
    }

});