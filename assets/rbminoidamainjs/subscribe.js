$(document).ready(function () {
    $('.btnsbscrb').click(function () {
        removest();
        var i = 0;
        var email = $('.emailsub').val();
        $('input[type="text"].mand1').each(function () {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({ "border": "1px solid red" });
                i = 1;
            }
            else {
                $(this).css({ "border": "" });
            }
        });

        if (!validateEmail($('.emailsub').val())) {
            i = 1;
        }

        if (i == 0) {
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "../Default.aspx/subscribe",
                data: "{'email':'" + email + "'}",
                dataType: "json",
                async: true,
                success: function (data) {
                    alert("Request Submitted");
                },
                error: function (data) {
                    alert("Something Went Wrong...");
                }
            });
        }
    });
    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($email)) {
            $('.emailsub').css({ "border": "1px solid red" });
        } else {
            $('.emailsub').css({ "border": "" });
        }
        return emailReg.test($email);
    }
    function removest() {
        $('input').each(function () {
            var s = $(this).val();
            s = s.replace("'", "`");
            $(this).val(s);
        });
    }
});