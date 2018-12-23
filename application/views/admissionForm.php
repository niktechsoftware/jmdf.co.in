<?php $this->load->view("header");?>
    
    <section>
        <div class="section_inner" >
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="border:2px solid red;">

                            <div id='leftmenu'>
                                <ul>
                                    <li class='active'><h2 class="find-course__title"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Form Instruction</h2></li>
									<p><strong>1</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;फॉर्म भरने से यह निर्यण अवश्य कर ले कि इस फॉर्म का चालान कौन से ब्रांच में आपको जमा करना सरल रहेगा | उसके बाद ही आप उस ब्रांच को चुने | क्योंकि फॉर्म उसी ब्रांच पे स्वीकृत किया जायेगा |
									</p>
<p><strong>2</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;फॉर्म फी 7०० रुपये फॉर्म के साथ जमा करे 
									</p>
									<p style="color:blue">संपर्क करे :-7295869574,9918333831</p>
                                   
                                </ul>
                            </div>
                            <div>
                            </div>
                        </div>
                         <form method="post" action="<?php echo base_url()?>index.php/registration/saveRegistration" enctype="multipart/form-data">
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ineerbox" style="border:2px solid Green;">

                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="float:right;">
                                <div align="right" style="padding-top:15px;">
                                    <span class="crunch"><i class="fa fa-home" aria-hidden="true"></i></a></span>
                                    <span class="crunch"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="crunch"><a href="#">Admission</a></span>
                                   
                                    <span class="crunch"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="crunch"><a href="admission-form.html">Apply Now</a></span>
                                </div>
                            </div>
                            <h3 class="headline"><span>Apply for Admission</span></h3> <hr>
                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Post Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                 <label style="color: blue; size:14px; margin-bottom: -15px;">Name Of the Post</label>
                                    <select class="wpcf7-form-control wpcf7-text Textbox-css rblcampus rbmand" name="post" required="required">
                                        <option selected="selected" value="0">--Select Post--</option>
                                        <option value="fieldofficer">Field Officer</option>
                                       <option value="ComputerOperator">Computer Operator</option>
                                        <option value="peon">Peon</option>
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                <label style="color: blue; size:14px; margin-bottom: -15px;">Branch</label>
                                    <select class="wpcf7-form-control wpcf7-text Textbox-css rblinstitute rbmand" name="branchid" required="required">
                                        <option selected="selected" value="0">--Select Branch--</option>
										 <option value="ghazipur">Ghazipur</option>
                                        <option value="bhabhua">Bhabhua</option>
                                        <option value="ballia">Ballia</option>
                                         <option value="mirzapur">Mirzapur</option>
                                          <option value="buxar">Buxar</option>
                                            <option value="rohtas">Rostas</option>
                                    </select>
                                </div>

                               
                            </div>

                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Personal Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfname txtmand" name="name" placeholder="Name of Applicant *" required="required">
                                </div>

                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtlname txtmand" name="f_name" placeholder="Fathers's Name *" required="required">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" name="m_name" placeholder="Mothers's Name" required="required">
                                </div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" name="l_name" placeholder="Husband's Name">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                 <label style="color: blue; size:14px; margin-bottom: -15px;">Date Of Birth</label>
                                    <input type="date" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" name="date_of_birth" placeholder="Bate Of Birth" required="required">
                                </div>
                                 <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                  <label style="color: blue; size:14px; margin-bottom: -15px;">Age (In Year)</label>
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtmname txtmand" name="age" placeholder="Age (Year)" required="required">
                                </div>  
                            </div>
   							<div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" name="religion" placeholder="Religion">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                               
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" name="nationality" placeholder="Nationality" required="required">
                                </div>
                                
                            </div>
                          
                             <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" name="education" placeholder="Education">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" name="nominee_name" placeholder="Nominee Name" >
                                </div>
                                
                            </div>
                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Contact Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" name="address" placeholder="Residential / Correspondence Address *">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" name="city" placeholder="City">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" name="state" placeholder="State">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" name="pincode" placeholder="Pin Code">
                                </div>
                                
                            </div>
                          
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" name="mobile_no_1" placeholder="Mobile No1." required="required">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" name="mobile_no_2" placeholder="Mobile No.">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrphnno txtmand" name="e_mail_id" placeholder="Email Id *">
                                </div>
                                <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtfthrofficeno txtmand" placeholder="Teliphone No">
                                </div>
                                
                            </div>

                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Educational Details</h4>
                            <div class="row">
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual1 txtmand" name ="metric" placeholder="Metric" value="Metric">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear1 txtmand" name ="m_passyear" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni1 txtmand" name ="m_nameofuniver" placeholder="Board / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct1 txtmand" name ="m_division" placeholder="Division">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand"  name ="m_marks" placeholder="Marks">
                                </div>
                                 <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand" name ="m_rollNumber" placeholder="Roll Numbare">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual2 txtmand" name ="intermediate" placeholder="Intermediate"  value="Intermediate">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear2 txtmand" name ="i_nameofuniver" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni2 txtmand" name ="i_passyear" placeholder="Board / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct2 txtmand" name ="i_division" placeholder="Division">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper2 txtmand" name ="i_marks" placeholder="Marks">
                                </div>
                                 <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand" name ="i_rollNumber" placeholder="Roll Numbare">
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual3 txtmand" name ="graduation" placeholder="Graduation" value="Graduation">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear3 txtmand" name ="g_passyear" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni3 txtmand" name ="g_nameofuniver" placeholder="Board / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct3 txtmand" name ="g_division" placeholder="Division">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper3 txtmand" name ="g_marks" placeholder="Marks">
                                </div>
                                 <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand" name ="g_rollNumber"placeholder="Roll Numbare">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual3 txtmand" name ="post_graduation" placeholder="Post Graduation" value="Post Graduation">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear3 txtmand" name ="p_passyear" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni3 txtmand" name ="p_nameofuniver" placeholder="Board / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct3 txtmand"  name ="p_division" placeholder="Division">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper3 txtmand" name ="p_marks" placeholder="Marks">
                                </div>
                                 <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand" name ="p_rollNumber"placeholder="Roll Numbare">
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqual3 txtmand" name ="diploma_other" placeholder="Diploma_other" value="Diploma other">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtqyear3 txtmand" name ="d_passyear" placeholder="Year">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtuni3 txtmand" name ="d_nameofuniver" placeholder="Board / Institution	">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtsbjct3 txtmand"  name ="d_division" placeholder="Division">
                                </div>
                                <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper3 txtmand" name ="d_marks" placeholder="Marks">
                                </div>
                                 <div class="col-xs-12 col-sm-1  col-md-2 col-lg-2">
                                    <input type="text" class="wpcf7-form-control wpcf7-text Textbox-css txtper1 txtmand" name ="d_rollNumber"placeholder="Roll Numbare">
                                </div>
                            </div>
                             <h4 class="sub-head" style='margin: 0 0 10px 0;'>Upload Details</h4>
                            <table  border="2">
                            <tr>
                            <td>
                                 <label style="color: blue; size:10px; ">Photo</label>
                                    <input type="file" name="emp_photo" class="" placeholder="Photo *" style="width: 90%" required="required"> 
                               </td>
                             <td> 
                                 <label style="color: blue; size:10px;">Signature</label>
                                    <input type="file" name="emp_signature" class="" placeholder="Singnature" style="width: 90%" required="required">
                                </td>
                              <td>
                                 <label style="color: blue; size:10px; ">Id Proof</label>
                                    <input type="file" class="" name="address_proof_image" placeholder="Singnature"  style="width: 90%" >
                                </td>
                            </tr>
                            </table>
                            
                          
                             <hr>
                            <h4 class="sub-head" style='margin: 0 0 10px 0;'>Declaration</h4>
                            <p class="format">
                                <input id="chkbxdec" type="checkbox" required="required"/>
                                I declare that all the information furnished above by the undersigned is true to the best of my knowledge and nothing has been concealed therein.
                            </p>
                            <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6">
                                <button class="btncourses btn-primary btn-effect btnsubmit" style='margin: 6px 0; padding: 3px 15px;'>Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- end row -->
                <!-- end section_mod-a__inner -->
            </div>
            <!-- end container -->
        </div>
    </section>
    <!-- Close Wrapper Content -->
   <?php $this->load->view("footer");?>