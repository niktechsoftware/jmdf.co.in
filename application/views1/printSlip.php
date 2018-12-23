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
			#printcontent { position: absolute; top: 40px; left: 30px; }
	    }
    .nob{
    	border: none;
    }
	</style>
	
   
</head>

<body>
	<div id="printcontent" align="center">
	
	<div id="page-wrap" style="width:800px; border: 1px solid black; outline: 1px solid black; solid #333;">
<?php
	
	$this->db->where("registration_num",$registration);
	$pInfo = $this->db->get("registration")->row();
?>		

		<table style="width: 100%">
			<tr>
				
				<td style="border: none;">
					<h1 style=margin-left:80px; ><b>Computer - Operator </b></h1>
			        <h3  style=margin-left:135px;>
						Acknowledgement - Slip
			        </h3>
			       
			        <h3  style="font-variant:small-caps; margin-left:105px;">
						Recieved the UET -2017 application form NO. 123095
			        </h3>
				</td>
			</tr>
			<tr>
	<td>
        <hr/>
		
		
		<div id="customer">
        	<div style="display:inline-block; float:left; margin-left:5px;">
            <table> 
          
                     <tr>
                    	<td style="border:none; line-height: 15px;">
                        	
				  		<h3>Date  : <strong><?php echo date("d-m-Y"); ?></strong>	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roll Number :......</h3>
				  		
                        </td>
                    </tr>
                    
                    <tr>
                    	<td style="border:none;  line-height: 15px;">
                    		<h3>Received By : </strong></h3>
                        </td>
                    </tr>
                  
                 
            </table>
			</div>
			
			
			<div style="display:inline-block; float:right; margin-right:5px;">
            <table>
                <tr>
                    	<td style="border:none; line-height: 20px;">
                    		<img src="<?php echo base_url();?>assets/img/empImages/<?php echo $pInfo->emp_photo; ?>"  alt="" width="50" />
                        </td>
                       
                </tr>
                   
            </table>
           
           The Application form submitted by hand is being received st the counter without any Immediate scrutiny. 
           Validity of the application form shall be based on its objective Scrutiny to be conducted at a later date.
			<table id="items" align="center"  style="width:100%; margin-top:0px; alignment-adjust:central;">
					
					<tbody>
						<tr>
						<td> Acknowledgment Number :-</td> <td><?php echo $pInfo->registration_num;?></td> <td>Date of Birth:-  </td><td><?php echo $pInfo->date_of_birth;?></td>
					
						</tr>
						<tr>
						<td> Name on Card :- </td> <td><?php echo $pInfo->name;?></td> <td> State :- </td><td><?php echo $pInfo->state;?></td>
					
						</tr>
						<tr>
						<td> Father name :- </td> <td><?php echo $pInfo->f_name;?></td><td> E-mail :- </td><td><?php echo $pInfo->e_mail_id;?></td>
					
						</tr>
						<tr>
						<td> Mother Name :- </td> <td><?php echo $pInfo->m_name;?></td><td> Tel/ Mobile No. :- </td><td><?php echo $pInfo->	mobile_no_1.",".$pInfo->mobile_no_2;?></td>
					
						</tr>
						<tr>
						<td> Address Proof :- </td> <td><?php echo $pInfo->address_proof;?></td><td> High School Roll No.:- :- </td><td>Matric <?php ?></td>
					
						</tr>
						<tr>
						<td> <?php echo $pInfo->address_proof;?> No. :- </td> <td><?php echo $pInfo->address_proof_number;?></td><td> Intermediate Roll No. :- </td><td>Intre <?php ?></td>
					
						</tr>
						<tr>
						<td> Proof of ID Domicile :- </td> <td><?php echo $pInfo->id_proof;?></td><td> Post Graduate Roll No. :- </td><td> <?php ?></td>
					
						</tr>
						<tr>
						<td> Graduate Roll No. :- </td> <td><?php ?></td> <td> Other Pass :- </td><td> <?php ?></td>
					
						</tr>
					</tbody>
			</table>
	</div>
	
	</div>
	</td>
	</tr>
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