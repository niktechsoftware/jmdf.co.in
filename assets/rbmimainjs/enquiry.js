$(document).ready(function () {
    $(".btnsubmit").click(function () {
        var rbclg = $(".rbclg :selected").text();
        var fullname = $(".txtfname").val();
        var txtmobno = $(".txtmobno").val();
        var txtemail = $(".txtemail").val();
        var txtqry = $(".txtqry").val();
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

        $('textarea').each(function () {
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

        if (txtmobno != "") {
            if (!validateEmail(txtemail)) {
                i = 1;
            } else if (!mobilevalid(txtmobno)) {
                i = 1;
            }
        }

        if (i == 0) {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "main.aspx/enquiry",
                data: "{'rbclg':'" + rbclg + "','txtmobno':'" + txtmobno + "','txtemail':'" + txtemail + "','txtqry':'" + txtqry + "','fullname':'" + fullname + "'}",
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
            $(".txtmobno").css({ "border": "1px solid red" });
            $(".txtmobno").focus();
        } else {
            $(".txtmobno").css({ "border": "" });
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