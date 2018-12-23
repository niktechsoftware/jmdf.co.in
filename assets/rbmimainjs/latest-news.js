
$(function () {
    var verifyid = GetParameterValues('newsid');
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
        newsfromindex(verifyid);
    }

    showrecord();
    
    function showrecord() {
        $.ajax({
            type: "POST",
            url: "main.aspx/latestnews",
            data: "{}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.divlatestnews').html(response.d);
                if (verifyid==null || verifyid =="") {
                  var tid = $(".divlatestnews").find("a").eq(0).attr("id");
                 newsfromindex(tid);
                }
               
            },

            error: function (response) {
            }
        });
    }


    $('.divlatestnews').delegate('a', 'click', function () {
        var id = $(this).attr('id');
        // alert(wid+'++++'+gid);
        $.ajax({
            type: "POST",
            url: "main.aspx/showimagenews",
            data: "{'id':'" + id + "'}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.showimagenews').html(response.d);
            },
            error: function (response) {
            }
        });
    });


    function newsfromindex(idd) {
        $.ajax({
            type: "POST",
            url: "main.aspx/showimagenews",
            data: "{'id':'" + idd + "'}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.showimagenews').html(response.d);
                // alert(response.d);
            },
            error: function (response) {
            }
        });
    }
});