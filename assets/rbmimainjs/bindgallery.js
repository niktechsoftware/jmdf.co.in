$(document).ready(function () {


    var id = "";


    var url = window.location.href.split('?');
    if (url.length > 0) {
        id = url[1];

        localStorage.setItem('id', id);
    }


    



    $.ajax({
        type: "POST",
        url: "main.aspx/galleryname",
        data: "{'id':'" + id + "'}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            $('#gallery_sec1').html(response.d);
        },
        failure: function (response) {

        },
        error: function (response) {

        }
    });



    $('#gallery_sec1').delegate('.view_more_button', 'click', function () {

        id = $(this).attr("id");

        localStorage.setItem('id', id);

        window.location.href = "photogallery-detaild41d.html?" + id + "";

    });
    $('.binddata1').delegate('.view_more_button', 'click', function () {

        id = $(this).attr("id");
        localStorage.setItem('id', id);

        window.parent.location.href = "photogallery-detaild41d.html?" + id + "";

    });



    $.ajax({
        type: "POST",
        url: "main.aspx/gallerydata",
        data: "{'id':'" + localStorage.getItem('id') + "'}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {

        
            $('.shadow_body').find('.middle_div').find('.main-container .column-wide').html(response.d);


        },
        failure: function (response) {

        },
        error: function (response) {

        }
    });






});















//$(document).ready(function () {


//    var id = "";
//    $.ajax({
//        type: "POST",
//        url: "main.aspx/galleryname",
//        data: "{}",
//        contentType: "application/json; charset=utf-8",
//        dataType: "json",
//        success: function (response) {
//            $('#gallery_sec1').html(response.d);
//        },
//        failure: function (response) {

//        },
//        error: function (response) {

//        }
//    });


//    var url = window.location.href.split('?');
//    if (url.length > 0) {
//        id = url[1];

//        localStorage.setItem('id', id);
//    }
//    $('#gallery_sec1').delegate('.view_more_button', 'click', function () {

//        id = $(this).attr("id");

//        localStorage.setItem('id', id);

//        window.location.href = "gallery-inner.html?" + id + "";

//    });
//    $('.binddata1').delegate('.view_more_button', 'click', function () {

//        id = $(this).attr("id");
//        localStorage.setItem('id', id);

//        window.parent.location.href = "gallery-inner.html?" + id + "";

//    });



//   





//});