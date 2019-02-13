
<?php $this->load->view('head');?>
<body id="top" Style="font-size:125%;">
<form name="form1" method="post" action="./FoodPortal.aspx" id="form1">
<div>
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>

        
    <?php $this->load->view('header');?>
    <?php $this->load->view('navbar');?>
        <div class="clearfix">
        </div>
        <div class="redline">
        </div>
        <div class="clearfix">
        </div>
        <div id="main" class="container-fluid top_padding">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="csslider1 autoplay ">
                        <input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="" />
                        <ul>
                            
                             <li class="cs_skeleton" style="">
                                <img src="<?php echo base_url();?>assets/Res_Images/slide-0.jpg" alt="" style="width: 100%;" />
                            </li>
                            <li class="num0 img slide">
                                <img src="<?php echo base_url();?>assets/Res_Images/slide-1.jpg" alt="" />
                            </li>
                            <li class="num1 img slide">
                                <img src="<?php echo base_url();?>assets/Res_Images/slide-2.jpg" alt="" />
                            </li>
                            <li class="num2 img slide">
                                <img src="<?php echo base_url();?>assets/Res_Images/slide-3.jpg" alt="" />
                            </li>
                            <li class="num3 img slide">
                                <img src="<?php echo base_url();?>assets/Res_Images/slide-0.jpg" alt="" />
                            </li>
                            <li class="num4 img slide">
                                <img src="<?php echo base_url();?>assets/Res_Images/slide-2.jpg" alt="" />
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="hidden-xs col-sm-2 col-md-2">
                    <ul id="slideshow">
                        <li>
                            <img src="<?php echo base_url();?>assets/Res_Images/KARMENDRA_SACHDEVA.png" class="minister_image img-circle" alt="" style="padding-top: 0px !important;" />
                            <p class="desc">
                                KARMENDRA SACHDEVA
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>assets/Res_Images/KARMENDRA_SACHDEVA.png" class="minister_image1 img-circle" alt="" />
                            <p class="desc">
                                KARMENDRA SACHDEVA
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>assets/Res_Images/KARMENDRA_SACHDEVA.png" class="minister_image1 img-circle" alt="" style="padding-top: 0px !important;"/>
                            <p class="desc">
                                KARMENDRA SACHDEVA
                            </p>
                        </li>
                        
                        
                    </ul>
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="yellowlineNote">
                    </div>
                    <div class="gray_box fo_sz4 fo_gray" style="text-align: center">
                        <strong>
                            Notifications
                        </strong>
                        
                    </div>
                    <div class="tab-pane" style="padding-left: 5px; padding-right: 5px;">
                        <marquee class="marquee" direction="up" scrollamount="2" onmouseover="this.stop()"
                            onmouseout="this.start()">
                               <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0px;">
                                <div class="col-sm-1 col-md-1 col-xs-1" style="padding:0px;">
                                    <img alt="" src="<?php echo base_url();?>assets/Res_Images/arr.gif" style="height: 8px; width:8px;" />
                                </div>
                                <div class="col-sm-11 col-md-11 col-xs-11 text-justify" style="padding:0px;">
                                    <a href="#"> free computer tranining will be implemented by JMD trust from 2 April 2019 
                                       </a>                                    
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0px;">
                                <div class="col-sm-1 col-md-1 col-xs-1" style="padding:0px;">
                                    <img alt="" src="<?php echo base_url();?>assets/Res_Images/arr.gif" style="height: 8px; width:8px;" />
                                </div>
                                <div class="col-sm-11 col-md-11 col-xs-11 text-justify" style="padding:0px;">
                                    <a href="#"> Rural industry will be started from 10March 2019 by JMD Trust. 
                                       </a>                                    
                                </div>
                            </div>
                        <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0px;">
                                <div class="col-sm-1 col-md-1 col-xs-1" style="padding:0px;">
                                    <img alt="" src="<?php echo base_url();?>assets/Res_Images/arr.gif" style="height: 8px; width:8px;" />
                                </div>
                                <div class="col-sm-11 col-md-11 col-xs-11 text-justify" style="padding:0px;">
                                    <a href="<?php echo base_url();?>#">Regording encouraging rural women through JMD Trust. the meeting was hold on 15 March 2019.
                                    </a>                                    
                                </div>
                            </div>

                        <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0px;">
                                <div class="col-sm-1 col-md-1 col-xs-1" style="padding:0px;">
                                    <img alt="" src="<?php echo base_url();?>assets/Res_Images/arr.gif" style="height: 8px; width:8px;" />
                                </div>
                                <div class="col-sm-11 col-md-11 col-xs-11 text-justify" style="padding:0px;">
                                    <a href="#"> Planning for the upliftment and owareness of the Rural women's group on 10 February 2019, the JMD Turst's allies continue their efforts. </a>                                    
                                </div>
                            </div>
                                                
                        <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0px;">
                                <div class="col-sm-1 col-md-1 col-xs-1" style="padding:0px;">
                                    <img alt="" src="<?php echo base_url();?>assets/Res_Images/arr.gif" style="height: 8px; width:8px;" />
                                </div>
                                <div class="col-sm-11 col-md-11 col-xs-11 text-justify" style="padding:0px;">
                                    <a href="<?php echo base_url();?>#" > A good golden apportunity for rural poor-families.</a>                                    
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0px;">
                                <div class="col-sm-1 col-md-1 col-xs-1" style="padding:0px;">
                                    <img alt="" src="<?php echo base_url();?>assets/Res_Images/arr.gif" style="height: 8px; width:8px;" />
                                </div>
                                <div class="col-sm-11 col-md-11 col-xs-11 text-justify" style="padding:0px;">
                                    <a href="<?php echo base_url();?>#">The person who wants to cooperate with JMD Trust, Please mail your details to JMd trust. </a>                                    
                                </div>
                            </div>               
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="modern-ticker mt-round">
                        <div class="mt-body">
                            <div class="mt-news">
                                <marquee scrollamount="2" direction="left" onmouseover="this.stop()" onmouseout="this.start()">                          
                                        <b style="color: black">First came the faith then came,say loan with me</b>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 panelsrow1">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-color nobdr bounceInLeft animated animated" data-wow-delay="0.4s">
                            <div class="yellowline">
                            </div>
                            <div class="yellowlineNew">
                            </div>
                            <div class="panel-heading" style="text-align: center">
                               Quick Link
                            </div>
                            <div class="panel-body text-center pnlhght">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-5 col-sm-5 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link linkhght"><br />

                                                 <a style="font-size: 14px; font-weight: bold;" href="<?php echo base_url();?>index.php/welcome/small_industry" target="_blank"><span style="font-size: 18px;"> Small Industry </span></a>
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12 implink1" style="padding: 1px;">
                                            <div class="panel-link1 linkhght"><br />
                                                <a href="#" ><span style="font-size: 18px;">Business Loan Application Process</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-7 col-sm-7 col-xs-12 implink1" style="padding: 1px;">
                                            <div class="panel-link2 linkhght">
                                                <br />
                                                <a href="#" >
                                                    <span style="font-size: 18px;">Domestic Business</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link3 linkhght"><br />
                                                
                                                <a href="#"><span style="font-size: 18px;">Downloads</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-5 col-sm-5 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link4 linkhght"><br />
                                                <a href="#">
                                                    <span style="font-size: 18px;">Loan Plan</span></a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-7 col-sm-7 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link5 linkhght"><br />
                                                <a href="<?php echo base_url();?>index.php/welcome/meaning_subsidy" target="_blank"
                                                    class="text-link"><span style="font-size: 18px;">Meaning Of Subsidy</span></a>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-5 col-sm-5 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link1 linkhght"><br />
                                                <a href="#">
                                                    <span style="font-size: 18px;">Business Achiever</span></a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-7 col-sm-7 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link2 linkhght"><br>
                                                <a href="#">
                                                    <span style="font-size: 18px;">Latest News</span></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-color nobdr fadeInUpBig animated animated" data-wow-delay="0.4s">
                            <div class="yellowline">
                            </div>
                            <div class="yellowlineNew">
                            </div>
                            <div class="panel-heading" style="text-align: center">
                                Process
                                
                            </div>
                            <div class="panel-body pnlhght">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <span id="Timer1" style="visibility:hidden;display:none;"></span>
                                        <div id="UpdatePanel1">
	                                     <img src="<?php echo base_url();?>assets/Res_Images/process.jpeg" alt="" style="width: 100%;" />
                                              
                                         </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-color nobdr bounceInRight animated animated" data-wow-delay="0.4s">
                            <div class="yellowline">
                            </div>
                            <div class="yellowlineNew">
                            </div>
                            <div class="panel-heading" style="text-align: center">Important Link (JMD)
                            </div>
                            <div class="panel-body pnlhght">
                                <div class="hidden-xs row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link linkhght1" style="border-top-right-radius: 20px; text-align: center;">
                                                <a href="<?php echo base_url();?>index.php/welcome/jobapply" class="text-link" style="line-height: 50px;"
                                                    >
                                                    <span style="font-size: 18px;">Apply For a Job</span></a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12 " style="padding: 1px;">
                                            <div class="panel-link1 linkhght1" style="text-align: center;">
                                                <a href="<?php echo base_url();?>index.php/welcome/startup_business_idea" class="text-link" target="_blank" style="line-height: 50px;"
                                                    ><span style="font-size: 18px;">Startup Business Ideas</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12 implink" style="padding: 1px;">
                                            <div class="panel-link2 linkhght1" style="text-align: center;">
                                                <a href="#" class="text-link" style="line-height: 50px;"
                                                    ><span style="font-size: 18px;">Marketing Online Business</span></a>
                                             
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12 implink1" style="padding: 1px;">
                                            <div class="panel-link3 linkhght1" style="border-bottom-left-radius: 20px; text-align: center;"><br>
                                                <a href="<?php echo base_url();?>index.php/welcome/business_format" target="_blank" class="text-link" style="line-height: 25px;"
                                                    ><span style="font-size: 18px;">Business Format</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" style="margin-bottom: 15px;">
                    <div class="modern-ticker mt-round">
                        <div class="mt-body">
                            <div class="mt-news">
                                <marquee scrollamount="2" direction="left" onmouseover="this.stop()" onmouseout="this.start()">                          
                                        </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

<script type="text/javascript">
//<![CDATA[
Sys.Application.add_init(function() {
    $create(Sys.UI._Timer, {"enabled":true,"interval":30000,"uniqueID":"Timer1"}, null, null, $get("Timer1"));
});
//]]>
</script>
</form>
<?php $this->load->view('footer');?>
</body>
</html>
