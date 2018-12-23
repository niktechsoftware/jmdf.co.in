    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-xs-4">
                            <h4 class="title">Quick Link</h4>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url();?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/about/">About us</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Admission Form</a>
                                </li>
                                <li>
                                    <a href="#">Downloads</a>
                                </li>
                                <li>
                                    <a href="#">Press Releases</a>
                                </li>
                               

                            </ul>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="title1">&nbsp</h4>
                            <ul>
                                <li>
                                    <a href="#">Plan</a>
                                </li>
                                <li>
                                    <a href="#">Achiever</a>
                                </li>
                                <li>
                                    <a href="#">Photo Gallery</a>
                                </li>
                              
                                <li>
                                    <a href="#">Facilities</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-4">
                            <h4 class="title1">&nbsp</h4>
                            <ul>
                                <li>
                                    <a href="#">Apply for Admission</a>
                                </li>
                                <li>
                                    <a href="#">Latest News</a>
                                </li>
                                <li>
                                    <a href="#">Latest Events</a>
                                </li>
                               
                                <li>
                                    <a href="#">Contact Details</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/enquiryForm/">Enquiry</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h4 class="title">Contact Us</h4>
                    <p>
                        <strong style="color:#FFBD33">Ghazipur Campus</strong><br>
                       Dhituan Aakuspur<br />
                      Kusmi kalan Ghazipur,
                       233302<br>
                        <strong>Email:</strong> <a href="#"> jmdf.gzp@gmail.com</a><br>
                        <strong>Mobile:</strong> +91-7238063072 <br>
                    </p>

                    <p>
                        <strong style="color:#FFBD33">Bhabhua Campus</strong><br>
                       Akhlaspur Bind Nagar Near<br />
                        Bus Stand Bhabhua Vihar(Kaimeur)<br>
                        <strong>Email:</strong> <a href=#"> jmdf.gzp@gmail.com</a><br>
                        <strong>Mobile:</strong> +91-9455820110<br />
                        <strong>Whatsapp:</strong> +91-9616682120<br />
                    </p>

                </div>

                <div class="col-md-3 col-sm-6" style="    float: left;">
                    <h4 class="title">On Google Map</h4>
                   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB1p_45QXQ41YfvDwNtzYZUXRgPn7BCG38'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:250px;width:220px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.org/'>embedded google map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=e7a5ca18ece7ac8244b014b9d0042de9242f9e0e'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(25.5840419,83.57702019999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(25.5840419,83.57702019999999)});infowindow = new google.maps.InfoWindow({content:'<strong>JMD Finance</strong><br>Aakushpur dhituan Kusmi kalan Ghazipur<br>233302 ghazipur<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
            <div class="footer-bar fix-top-margin-1">
                <div class="copy">
                    Copyright  @ 2017 JMD All Rights Reserved
                </div>
               
                <div class="ifw">
                    <span style="color:#fff"> Powered By</span> <a href="#" target="_blank" style="color:#fff">Gfinch Technologies </a>
                </div>
            </div>
        </div>
    </footer>
<script src="<?php echo base_url();?>assets/gal/js/lightbox.js"></script>
    <script src='<?php echo base_url();?>assets/js/jquery.js' type='text/javascript'></script>

    <script src='<?php echo base_url();?>assets/js/vc_extend.js' type='text/javascript'></script>
    <!--  <script src="news_js/jquery.min.js" type="text/javascript"></script>-->
    <script src='<?php echo base_url();?>assets/js/bootstrap.min.js' type='text/javascript'></script>
    <script src='<?php echo base_url();?>assets/js/plugin.js' type='text/javascript'></script>
    <script src='<?php echo base_url();?>assets/js/main.js' type='text/javascript'></script>
    <script src="<?php echo base_url();?>assets/banner_js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.simplePopup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            $('.show1').click(function () {
                $('#pop1').simplePopup();
            });

            $('.show2').click(function () {
                $('#pop2').simplePopup();
            });



        });


    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/js/SmoothScroll.js'></script>
    <!-- <script src="<?php echo base_url();?>assets/news_js/modernizr.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/news_js/wodry.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/news_js/jquery.newsTicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/news_js/jquery.fancybox.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/news_js/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/newspanel.js" type="text/javascript"></script>-->
    <script src="<?php echo base_url();?>assets/banner_js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/banner_js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>assets/owl-carousel/owl.js"></script>
    <script src='<?php echo base_url();?>assets/service_js/jquery.isotope.min.js' type='text/javascript'></script>
    <script src='<?php echo base_url();?>assets/service_js/resize.js' type='text/javascript'></script>
    <script src='<?php echo base_url();?>assets/service_js/custom-portfolio.js' type='text/javascript'></script>
    <script src="<?php echo base_url();?>assets/js/social-share-kit.js"></script>
    <!-- product slid-->
    <!-- end of site. what a ride! -->
<div style="display:none;">Jmd Finace Company in ghazipur,bhabhua.</div>
</body>

</html>
