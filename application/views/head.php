
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/Res_Images/favicon-32x32.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Notifications,Quick Links,Activity Chart, Wheat procurement,Paddy procurement,Eligibility list of National Food Security Act,Mobile Registration,Ration Card Managemen,Important Websites,Online Grievances" />
    <meta name="description" content="Civil Supplies Department and rationing in 1946 by merger of the Department of Food and Civil Supplies Department was established, and the charge was made to the secretary of the state government" />
    <link href="<?php echo base_url();?>assets/App_Themes/Default/animate.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/App_Themes/Default/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/App_Themes/Default/Sliderstyle.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/App_Themes/Default/ContentSlider.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/App_Themes/Default/ImageRotater.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css" />
    <script src="<?php echo base_url();?>assets/JavaScript/jquery.min.js" type="text/javascript" lang="javascript"></script>
    <script src="<?php echo base_url();?>assets/JavaScript/bootstrap.min.js" type="text/javascript" lang="javascript"></script>
    <script src="<?php echo base_url();?>assets/JavaScript/ImageRotater.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/fusioncharts/fusioncharts.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            new slideShow();
        });
    </script>
    <script type="text/javascript">
        $(function () {
            var width = $(window).width();
            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "FoodPortal.aspx/SaveData",
                data: "{'width':'" + width + "'}",
                dataType: "json",
                success: function (data) {
                },
                error: function (result) {
                }
            });
        });
    </script>
<link href="<?php echo base_url();?>assets/App_Themes/Red/mainstyle.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/App_Themes/Red/menu.css" type="text/css" rel="stylesheet" />
</head>