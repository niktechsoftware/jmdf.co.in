$(document).ready(function () {

    $(".rblcampus").change(function () {
      var d=  $(".rblcampus :selected").val();
        bindcolleges(d);
    });

    $(".rblinstitute").change(function () {
        var d1 = $(".rblinstitute :selected").val();
        bindcourses(d1);
    });

    function bindcolleges(cmpsid) {
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "main.aspx/bidclgaddmission",
            data: "{'rblcampus':'" + cmpsid + "'}",
            dataType: "json",
            async: true,
            success: function (data) {
                $(".rblinstitute").html(data.d);
            },
            error: function (data) {
                alert("Something Went Wrong");
            }
        });
    }

    function bindcourses(clgid) {
        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "main.aspx/bidcourse",
            data: "{'college':'" + clgid + "'}",
            dataType: "json",
            async: true,
            success: function (data) {
                $(".rblcourse").html(data.d);
            },
            error: function (data) {
                alert("Something Went Wrong");
            }
        });
    }

    $(".btnsubmit").click(function () {
        var rblcampus = $(".rblcampus :selected").text();
        var rblinstitute = $(".rblinstitute :selected").text();
        var rblcourse = $(".rblcourse :selected").text();
        var txtfname = $(".txtfname").val();
        var txtlname = $(".txtlname").val();
        var txtmname = $(".txtmname").val();
        var txtdob = $(".txtdob").val();
        var txtgender = $(".txtgender").val();
        var txtmarstatus = $(".txtmarstatus").val();
        var txtcstcat = $(".txtcstcat").val();
        var txtfthrname = $(".txtfthrname").val();
        var txtfthroccu = $(".txtfthroccu").val();
        var txtmtrname = $(".txtmtrname").val();
        var txtmthroccu = $(".txtmthroccu").val();
        var txtadd = $(".txtadd").val();
        var txtfcity = $(".txtfcity").val();
        var txtfstate = $(".txtfstate").val();
        var txtfcntry = $(".txtfcntry").val();
        var txtfthrphnno = $(".txtfthrphnno").val();
        var txtfthrofficeno = $(".txtfthrofficeno").val();
        var txtfthrmobno = $(".txtfthrmobno").val();
        var txttelno = $(".txttelno").val();
        var txtstuemail = $(".txtstuemail").val();
        var txtqual1 = $(".txtqual1").val();
        var txtqyear1 = $(".txtqyear1").val();
        var txtuni1 = $(".txtuni1").val();
        var txtsbjct1 = $(".txtsbjct1").val();
        var txtper1 = $(".txtper1").val();
        var txtqual2 = $(".txtqual2").val();
        var txtqyear2 = $(".txtqyear2").val();
        var txtuni2 = $(".txtuni2").val();
        var txtsbjct2 = $(".txtsbjct2").val();
        var txtper2 = $(".txtper2").val();
        var txtqual3 = $(".txtqual3").val();
        var txtqyear3 = $(".txtqyear3").val();
        var txtuni3 = $(".txtuni3").val();
        var txtsbjct3 = $(".txtsbjct3").val();
        var txtper3 = $(".txtper3").val();

        var i = 0;
        $('.txtmand').each(function () {
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

        $('.rbmand').each(function () {
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

        if (txtfthrmobno != "") {
            if (!validateEmail(txtstuemail)) {
                i = 1;
            } else if (!mobilevalid(txtfthrmobno)) {
                i = 1;
            }
        }
        if ($('#chkbxdec').is(":checked")) {
            if (i == 0) {
                $.ajax({
                    type: "POST",
                    contentType: "application/json; charset=utf-8",
                    url: "main.aspx/applyaddmission",
                    data: "{'rblcampus':'" + rblcampus + "','rblinstitute':'" + rblinstitute + "','rblcourse':'" + rblcourse + "','txtfname':'" + txtfname + "','txtlname':'" + txtlname + "','txtmname':'" + txtmname + "','txtdob':'" + txtdob + "','txtgender':'" + txtgender + "','txtmarstatus':'" + txtmarstatus + "','txtcstcat':'" + txtcstcat + "','txtfthrname':'" + txtfthrname + "','txtfthroccu':'" + txtfthroccu + "','txtmtrname':'" + txtmtrname + "','txtmthroccu':'" + txtmthroccu + "','txtadd':'" + txtadd + "','txtfcity':'" + txtfcity + "','txtfstate':'" + txtfstate + "','txtfcntry':'" + txtfcntry + "','txtfthrphnno':'" + txtfthrphnno + "','txtfthrofficeno':'" + txtfthrofficeno + "','txtfthrmobno':'" + txtfthrmobno + "','txttelno':'" + txttelno + "','txtstuemail':'" + txtstuemail + "','txtqual1':'" + txtqual1 + "','txtqyear1':'" + txtqyear1 + "','txtuni1':'" + txtuni1 + "','txtsbjct1':'" + txtsbjct1 + "','txtper1':'" + txtper1 + "','txtqual2':'" + txtqual2 + "','txtqyear2':'" + txtqyear2 + "','txtuni2':'" + txtuni2 + "','txtsbjct2':'" + txtsbjct2 + "','txtper2':'" + txtper2 + "','txtqual3':'" + txtqual3 + "','txtqyear3':'" + txtqyear3 + "','txtuni3':'" + txtuni3 + "','txtsbjct3':'" + txtsbjct3 + "','txtper3':'" + txtper3 + "'}",
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
        } else {
            alert("Please Accept Declaration");
        }
    });

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($email)) {
            $(".txtstuemail").css({ "border": "1px solid red" });
            $(".txtstuemail").focus();
        } else {
            $(".txtstuemail").css({ "border": "" });
        }
        return emailReg.test($email);
    }

    function mobilevalid($mobileval) {
        var filter = /^[0-9][0-9]{9}$/;
        if (!filter.test($mobileval)) {
            $(".txtfthrmobno").css({ "border": "1px solid red" });
            $(".txtfthrmobno").focus();
        } else {
            $(".txtfthrmobno").css({ "border": "" });
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
});