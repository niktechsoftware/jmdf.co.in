/// <reference path="jquery-2.1.4.min.js" />
$(function () {



    var year = "-1";
    var month = "-1";


    showgrid(year, month);


    $("#ddlyear").change(function () {
        year = $("#ddlyear :selected").val();
        // alert(year);
        $(".fp_scrollWrapper").hide();
        showgrid(year, month);
    });

    $("#ddlmonth").change(function () {
        month = $("#ddlmonth :selected").val();
        $(".fp_scrollWrapper").hide();
        // alert(year);
        showgrid(year, month);
    });

    //   showgrid(year, month,verifyid);
    function showgrid(year, month, clgid) {
        $.ajax({
            type: "POST",
            url: "../main-noida.aspx/allpressshow",
            data: "{'year':'" + year + "','month':'" + month + "'}",
            contentType: "application/json; charset=utf-8",
            dataType: "json", beforeSend: function () { $("#loader-wrapper").show(); },
            success: function (response) {
                $("#loader-wrapper").hide();
                $('.latestpressall').html(response.d);
            },

            error: function (response) {
            }
        });
    }











    $(".campaign").delegate(".imgshw", "click", function () {
        var s = $(this).attr("imp");
        $(".img").attr("src", s);
    });
});