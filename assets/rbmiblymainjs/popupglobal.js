$(document).ready(function () {
    $(".btnpopupsbmt").click(function () {
        var txtpopupemail = $(".txtpopupemail").val();
        var txtpopupname = $(".txtpopupname").val();
        var txtpopupmobno = $(".txtpopupmobno").val();
        var rbpopupcampus = $(".rbpopupcampus :selected").text();
        var rbpopupcourse = $(".rbpopupcourse :selected").text();
        var i = 0;
        $('.txtpopupmand').each(function () {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({ "border": "1px solid red" });
                i = 1;
                $(this).focus();
            }
            else {
                $(this).css({ "border": "" });
            }
        });

        $('.rbpopupmand').each(function () {
            if ($.trim($(this).val()) == '0') {
                isValid = false;
                $(this).css({ "border": "1px solid red" });
                i = 1;
                $(this).focus();
            }
            else {
                $(this).css({ "border": "" });
            }
        });

        if (txtpopupmobno != "") {
            if (!validateEmail(txtpopupemail)) {
                i = 1;
            } else if (!mobilevalid(txtpopupmobno)) {
                i = 1;
            }
        }

        if (i == 0) {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "../main.aspx/enquirypopup",
                data: "{'txtpopupemail':'" + txtpopupemail + "','txtpopupname':'" + txtpopupname + "','txtpopupmobno':'" + txtpopupmobno + "','rbpopupcampus':'" + rbpopupcampus + "','rbpopupcourse':'" + rbpopupcourse + "'}",
                dataType: "json",
                async: true,
                success: function (data) {
                    alert("Registered Successfully.");
                    clear();
                },
                error: function (data) {
                    alert("Something Went Wrong");
                }
            });
        }
    });

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($email)) {
            $(".txtpopupemail").css({ "border": "1px solid red" });
            $(".txtpopupemail").focus();
        } else {
            $(".txtpopupemail").css({ "border": "" });
        }
        return emailReg.test($email);
    }

    function mobilevalid($mobileval) {
        var filter = /^[0-9][0-9]{9}$/;
        if (!filter.test($mobileval)) {
            $(".txtpopupmobno").css({ "border": "1px solid red" });
            $(".txtpopupmobno").focus();
        } else {
            $(".txtpopupmobno").css({ "border": "" });
        }
        return filter.test($mobileval);
    }
    function clear() {
        $('input').val("");
    }

    function removest() {
        $('input').each(function () {
            var s = $(this).val();
            s = s.replace("'", "`");
            $(this).val(s);
        });
    }


    $(".rbpopupcampus").change(function () {
        var d = $(".rbpopupcampus :selected").val();
        bindcourses(d);
    });

    $(".rbpopupcourse").html("");

    function bindcourses(clgid) {
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "../main.aspx/bidcoursepopup",
            data: "{'college':'" + clgid + "'}",
            dataType: "json",
            async: true,
            success: function (data) {
                $(".rbpopupcourse").html(data.d);
            },
            error: function (data) {
                alert("Something Went Wrong");
            }
        });
    }



    //---------------Course Finder----------------------//


    var url = window.location.href;
    var array = url.split("../index.html");
    var clgname = array[3];
    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: "../main.aspx/bindprogram",
        data: "{'clgname':'" + clgname + "'}",
        dataType: "json",
        async: true,
        success: function (data) {
            $(".ddlprogram").html(data.d);
        },
        error: function (data) {
            //      alert("Something Went Wrong");
        }
    });

    $(".ddlprogram").change(function () {
        var prgrmid = $(this).val();
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "../main.aspx/bindcrs",
            data: "{'prgrmid':'" + prgrmid + "'}",
            dataType: "json",
            async: true,
            success: function (data) {
                $(".ddlcourse").html(data.d);
            },
            error: function (data) {
                //      alert("Something Went Wrong");
            }
        });

    });

    $(".btn-effect").click(function () {
        var clgid = $(".ddlprogram :selected").val();
        var crsid = $(".ddlcourse :selected").val();
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "../main.aspx/findcourse",
            data: "{'ddlstate':'" + clgid + "','ddlcourse':'" + crsid + "'}",
            dataType: "json",
            async: true,
            success: function (data) {
                window.location.href = data.d;
            },
            error: function (data) {
                //      alert("Something Went Wrong");
            }
        });
    });





    //------------------------------------------------//
});