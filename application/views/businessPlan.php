<?php $this->load->view("header");?>
<section>
        <div class="section_inner">
            <div class="container" >

                <div class="row" >
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="border:2px solid red;">

                            <div id='leftmenu'>
                                <ul>
                                    <li class='active'><h2 class="find-course__title"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;JMD Business Plan</h2></li>
                                       <hr>
                                    <li><a href="<?php echo base_url();?>index.php/welcome/businessPlan/"><span>Loan Plan</span></a></li>
                                    <li><a href="<?php echo base_url();?>index.php/welcome/amount"><span>Amount</span></a></li>
                                    <li><a href="<?php echo base_url();?>index.php/welcome/commission/"><span>Commission</span></a></li>
                                    <li><a href="<?php echo base_url();?>index.php/welcome/empcommission/"><span>Employee Commission</span></a></li>
                                  
                                </ul>
                            </div>
                            <div>

                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ineerbox" style="border:2px solid Green;">

                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="float:right;">
                                <div align="right" style="padding-top:15px;">
                                    <span class="crunch"><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i></a></span>
                                    <span class="crunch"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="crunch"><a href="#">JMD</a></span>
                                    <span class="crunch"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="crunch"><a href="about-us.html">Bussion Plan</a></span>
                                </div>
                            </div>
                            
                            <h3 class="headline"><span>JMD Finance Ltd Business Charts </span></h3>
                            <hr>
                           <img src="<?php echo base_url();?>assets/images/loanplan.jpg">
                         
                         
                        </div>
                    </div>

                </div>
                <!-- end row -->
                <!-- end section_mod-a__inner -->
            </div>
            <!-- end container -->
        </div>
    </section>

<?php $this->load->view("footer");?>