<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

<title><?php echo "JMD"; ?></title>

	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/style.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/prin_result.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>
	
	<style type="text/css">

	@media print
	{
			body * { visibility: hidden; }
			#printcontent * { visibility: visible; }
			#printcontent { position: absolute; top: 10px; left: 30px; }
	    }
    .nob{
    	border: none;
    }
	</style>
	
   
</head>

<body>
	<div id="printcontent" align="center">
	
	<div id="page-wrap" style="width:820px; border: 1px solid black; outline: 1px solid black; solid #333;">
<?php
	
	$this->db->where("registration_num",$registration);
	$pInfo = $this->db->get("registration")->row();
?>		

		<table style="width:100%;">
		<tr>
		<td>
			<tr>
				
				<td style="border:none; line-height: 30px;">
					<img alt="JMD" class="has-retina" src="<?php echo base_url();?>assets/images/recieptlogo.png"> <br>
					<p style="text-align:center; letter-spacing : 1px; font-size:40px; " >
						<font size="6">Acknowledgement - Slip</font><br>
						<font size="4">Recieved the UET -2017 application form S.NO. <?php echo $pInfo->s_no;?></font><br>
						<font size="4">Application For The Post:- <?php echo $pInfo->post;?></font></p>
			       
				</td>
			</tr>
			
			<td> <table> 
          
                     <tr>
                    	<td style="border:none; line-height: 15px;">
                        	
				  		<h3>Date  : <strong><?php echo date("d-m-Y"); ?></strong>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
				  		
                        </td>
                        <td><strong>Time:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php date_default_timezone_set('Asia/Kolkata');
echo date('H:i'); ?></strong> </td>
                    </tr>
                    <tr>
                    <td colspan="2" align="RIGHT"><h3>Received by: C- 1 </h3></td>
                    </tr>
                   
                  
                 
            </table></td>
			
				
			
		<tr>
		<td>	
<h2 align="right">Signature of Receiving Clerk </h2>
        <hr/>
		
		
		<div id="customer">
        	<div style="display:inline-block; float:left; margin-left:5px;">
           
			</div>
			
			
			<div style="display:inline-block; float:right; margin-right:5px;">
          
           
         <p >  The Application form submitted by hand is being received st the counter without any Immediate scrutiny. 
           Validity of the application form shall be based on its objective Scrutiny to be conducted at a later date.</p>
			<table id="items" align="center"  style="width:100%; margin-top:0px; alignment-adjust:central;">
					
					<tbody>
						<tr>
						<td> Acknowledgment Number :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->registration_num;?></td> <td>Date of Birth:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->date_of_birth;?></td>
					
						</tr>
						<tr>
						<td> Name on Card :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->name;?></td> <td> State :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->state;?></td>
					
						</tr>
						<tr>
						<td> Father name :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->f_name;?></td><td> E-mail :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->e_mail_id;?></td>
					
						</tr>

						<tr>
						<td> Mother Name :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->m_name;?></td><td> Tel/ Mobile No. :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->	mobile_no_1.",".$pInfo->mobile_no_2;?></td>
					
						</tr>
						
<?php $this->db->distinct();
$this->db->select("exam_name");
$this->db->select("roll_num");
$this->db->where("registration_num",$pInfo->registration_num);
		$rt = $this->db->get("exam_detail");
		if($rt->num_rows() > 0){
			foreach($rt->result() as $roq):
			if($roq->exam_name =="Metrichs" ){
		?>
		<tr>
		<td> High School Roll No:-  :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($roq->exam_name =="Metrichs") {echo $roq->roll_num;}?></td><?php } if($roq->exam_name =="Intermediate"){?><td> Intermediate Roll No :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($roq->exam_name =="Intermediate") {echo $roq->roll_num;}?></td>
					
						</tr><?php }
						if($roq->exam_name =="Graduation"){?>
						<tr>
		<td> Graduate Roll No:-  :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($roq->exam_name =="Graduation") {echo $roq->roll_num;}?></td><?php } if($roq->exam_name =="Post Graduation"){?><td> Post Graduation Roll No :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($roq->exam_name =="Post Graduation") {echo $roq->roll_num;}?></td>
					
						</tr>
		<?php } endforeach;}?>
					</tbody>
                        <tr><td><h3>Fee (Online of fixes as application):- 700/- Rupees.</h2> </td><td><h2>Branch:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pInfo->branch_id;?> </h3></td><tr>
			</table>

	</div>
	
	</div>
	</td>
	</tr>
        <tbody>
<tr>
<td><strong>1:-</strong>फॉर्म भरने के बाद अपना चालान प्रति के साथ 3 दिन के भीतर ही अपने नजदीकी ब्रांच में जमा करे |</td></tr>
<tr>
<td><strong>2:-</strong>चालान के साथ पूरी डाक्यूमेंट्स और Rs 700/ शुल्क जमा करे , अन्यथा 3 दिन बाद आपका फॉर्म स्वीकृत नहीं किया जायेगा |</td></tr>
<tr>
<td><strong>3:-</strong>फॉर्म जमा करने के उपरान्त एक पावती रशीद अवश्य प्राप्त करले जिस पर DM का मुहर और हस्ताक्षर अवश्य होना चाहिए |</td></tr>
</tbody>

		</table>


</div>



</div>
	
	<div class="invoice-buttons">
    	<button class="btn btn-default margin-right" type="button" onclick="window.print();" >
        	<i class="fa fa-print padding-right-sm"></i> Print Reciept
        </button>
    </div>
</body>

</html>