$(document).ready(function () {
    $('.btnsubmit').click(function () {
        removest();
        var i = 0;
        var email = $('.txtemail').val();
        $('input[type="text"].required').each(function () {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({ "border": "1px solid red" });
                i = 1;
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
            }
            else {
                $(this).css({ "border": "" });
            }
        });


            if (!validateEmail($('.txtemail').val())) {
                i = 1;
            } 
       

        if (i == 0) {
            var name = $('.txtname').val();
            var msg = $(".txtmsg").val();
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "main.aspx/short_enq1",
                data: "{'name':'" + name + "','email':'" + email + "','msg':'" + msg + "'}",
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
            $('.txtemail').css({ "border": "1px solid red" });
        } else {
            $('.txtemail').css({ "border": "" });
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