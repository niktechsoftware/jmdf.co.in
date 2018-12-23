$(document).ready(function () {
    $(".btnsubmit").click(function () {
        var txtcmpny = $(".txtcmpny").val();
        var txtcntctprsn = $(".txtcntctprsn").val();
        var txtwebsite = $(".txtwebsite").val();
        var txtadd = $(".txtadd").val();
        var txtcity = $(".txtcity").val();
        var txtstate = $(".txtstate").val();
        var txtcntry = $(".txtcntry").val();
        var txtpin = $(".txtpin").val();
        var txtphn = $(".txtphn").val();
        var txtfax = $(".txtfax").val();
        var txtemail = $(".txtemail").val();
        var txtcmpnydetails = $(".txtcmpnydetails").val();

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

            if (!validateEmail(txtemail)) {
                i = 1;
            } 
        if (i == 0) {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "main.aspx/insertrecruiter",
                data: "{'txtcmpny':'" + txtcmpny + "','txtcntctprsn':'" + txtcntctprsn + "','txtwebsite':'" + txtwebsite + "','txtadd':'" + txtadd + "','txtcity':'" + txtcity + "','txtstate':'" + txtstate + "','txtcntry':'" + txtcntry + "','txtpin':'" + txtpin + "','txtphn':'" + txtphn + "','txtfax':'" + txtfax + "','txtemail':'" + txtemail + "','txtcmpnydetails':'" + txtcmpnydetails + "'}",
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
            $(".txtemail").css({ "border": "1px solid red" });
            $(".txtemail").focus();
        } else {
            $(".txtemail").css({ "border": "" });
        }
        return emailReg.test($email);
    }

    function mobilevalid($mobileval) {
        var filter = /^[0-9][0-9]{9}$/;
        if (!filter.test($mobileval)) {
            $(".txtphn").css({ "border": "1px solid red" });
            $(".txtphn").focus();
        } else {
            $(".txtphn").css({ "border": "" });
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