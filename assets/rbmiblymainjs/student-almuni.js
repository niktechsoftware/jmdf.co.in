/// <reference path="jquery-2.1.4.min.js" />
$(function () {
    $('.member_submit').click(function () {
        removest();
        var txtname = $('.txtname').val();
        var txtemail = $('.txtemail').val();
        var txtcontactno = $('.txtcontactno').val();
        var txtadd = $('.txtadd').val();
        var txtcmpnyname = $('.txtcmpnyname').val();
        var txtdesig = $('.txtdesig').val();
        var rblcampus = $('.rblcampus :selected').text();
        var rblinstitute = $('.rblinstitute :selected').text();
        var rblcrs = $('.rblcrs :selected').text();
        var i = 0;
        $('.mandatory').each(function () {
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

        $('.mand').each(function () {
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

        if (txtcontactno != "") {
            if (!validateEmail(txtemail)) {
                i = 1;
            } else if (!mobilevalid(txtcontactno)) {
                i = 1;
            }
        }
        if (i == 0) {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "main.aspx/insertalmunibystu",
                data: "{'txtname':'" + txtname + "','txtemail':'" + txtemail + "','txtcontactno':'" + txtcontactno + "','txtadd':'" + txtadd + "','txtcmpnyname':'" + txtcmpnyname + "','txtdesig':'" + txtdesig + "','rblcampus':'" + rblcampus + "','rblinstitute':'" + rblinstitute + "','rblcrs':'" + rblcrs + "'}",
                dataType: "json",
                async: true,
                success: function (data) {
                    //  $('.member_submit').prop("disabled", false);
                    alert("Registered Successfully.");
                    //   $('#exceldiv').html(data.d);
                    //   $("#addnew").click();
                    clear();
                    //   window.location.reload();
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
            $(".txtcontactno").css({ "border": "1px solid red" });
            $(".txtcontactno").focus();
        } else {
            $(".txtcontactno").css({ "border": "" });
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