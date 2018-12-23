<?php
class registration extends CI_Controller{
	
	function saveRegistration(){
		$id = $this->db->query("SELECT s_no From registration order by s_no DESC Limit 1");
		if($id->num_rows()<1){
			$registration_num = 20001;
		}else{
			$id = $id->row();
			$reg =$id->s_no + 20001;
			$registration_num ="JMD".$reg;
		}
		
		$data['registration_num'] = $registration_num;
		$data['branch_id'] = $this->input->post("branchid");
		$data['post'] = $this->input->post("post");
		$data['name'] = $this->input->post("name");
		$data['f_name'] = $this->input->post("f_name");
		$data['m_name'] = $this->input->post("m_name");
		$data['l_name'] = $this->input->post("l_name");
		$data['date_of_birth'] = $this->input->post("date_of_birth");
		$data['age'] = $this->input->post("age");
		$data['religion'] = $this->input->post("religion");
		$data['nationality'] = $this->input->post("nationality");
		$data['nominee_name'] = $this->input->post("nominee_name");
		$data['education'] = $this->input->post("education");
		$data['address'] = $this->input->post("address");
		$data['city'] = $this->input->post("city");
		$data['state'] = $this->input->post("state");
		$data['pincode'] = $this->input->post("pincode");
		$data['mobile_no_1'] = $this->input->post("mobile_no_1");
		$data['mobile_no_2'] = $this->input->post("mobile_no_2");
		$data['telephone_no'] = "0512000000";
		$data['e_mail_id'] = $this->input->post("e_mail_id");
		$data['id_proof'] = $this->input->post("id_proof");
		$data['id_proof_number'] = $this->input->post("id_proof_number");
		
		$data['address_proof'] = $this->input->post("address_proof");
		$data['address_proof_number'] = $this->input->post("address_proof_number");
		
             	if(strlen($this->input->post("m_rollNumber"))>1){
		$matric = array(
				'registration_num'=>	$registration_num,
				'exam_name'=>			$this->input->post("metric"),
				'board'=>			$this->input->post("m_nameofuniver"),
				'passing_year'=>		$this->input->post("m_passyear"),
				'division'=>			$this->input->post("m_division"),
				'marks_per'=>			$this->input->post("m_marks"),
				'roll_num'=>			$this->input->post("m_rollNumber")
				
		);
                
		$this->db->insert("exam_detail",$matric);
              }
               if(strlen($this->input->post("i_rollNumber"))>1){
		$intermediate = array(
				'registration_num'=>	$registration_num,
				'exam_name'=>			$this->input->post("intermediate"),
				'board'=>				$this->input->post("i_nameofuniver"),
				'passing_year'=>		$this->input->post("i_passyear"),
				'division'=>			$this->input->post("i_division"),
				'marks_per'=>			$this->input->post("i_marks"),
				'roll_num'=>			$this->input->post("i_rollNumber")
		
		);
              
		$this->db->insert("exam_detail",$intermediate);
              }
               if(strlen($this->input->post("g_rollNumber"))>1){
		$graduation = array(
				'registration_num'=>	$registration_num,
				'exam_name'=>			$this->input->post("graduation"),
				'board'=>				$this->input->post("g_nameofuniver"),
				'passing_year'=>		$this->input->post("g_passyear"),
				'division'=>			$this->input->post("g_division"),
				'marks_per'=>			$this->input->post("g_marks"),
				'roll_num'=>			$this->input->post("g_rollNumber")
		
		);
               
		$this->db->insert("exam_detail",$graduation);
            }
            if(strlen($this->input->post("p_rollNumber"))>1){
		$post_graduation = array(
				'registration_num'=>	$registration_num,
				'exam_name'=>			$this->input->post("post_graduation"),
				'board'=>				$this->input->post("p_nameofuniver"),
				'passing_year'=>		$this->input->post("p_passyear"),
				'division'=>			$this->input->post("p_division"),
				'marks_per'=>			$this->input->post("p_marks"),
				'roll_num'=>			$this->input->post("p_rollNumber")
		
		);
               
		$this->db->insert("exam_detail",$post_graduation);
		}
		if(strlen($this->input->post("d_rollNumber"))>1){
		$diploma_other = array(
				'registration_num'=>	$registration_num,
				'exam_name'=>			$this->input->post("diploma_other"),
				'board'=>				$this->input->post("d_nameofuniver"),
				'passing_year'=>		$this->input->post("d_passyear"),
				'division'=>			$this->input->post("d_division"),
				'marks_per'=>			$this->input->post("d_marks"),
				'roll_num'=>			$this->input->post("d_rollNumber")
		
		);
                 
		$this->db->insert("exam_detail",$diploma_other);
		}
		
		$data['status']="pending";
		$data['dateof_regis'] =date("Y-m-d");
		$photo_name = time().trim($_FILES['emp_photo']['name']);
		
		$pname = str_replace(" ","",$photo_name);
		
		$emp_signature = time().trim($_FILES['emp_signature']['name']);
		$sname = str_replace(" ","",$emp_signature);
		$id_proof_image = time().trim($_FILES['id_proof_image']['name']);
		$aname = str_replace(" ","",$id_proof_image);
		$address_proof_image = time().trim($_FILES['address_proof_image']['name']);
		$adname = str_replace(" ","",$address_proof_image);
		$data['emp_photo'] = $pname;
		$data['emp_signature'] = $sname;
		$data['id_proof_image'] = $aname;
		$data['address_proof_image'] = $adname;
		$this->load->model("regitrationModel");
		
		if($query = $this->regitrationModel->saveRestration($data)){
		$number = $this->input->post("mobile_no_1");
			$msg = "Dear ".$this->input->post("name").", Your Form Registration is sucessfully Submitted.Your Registration No is ".$registration_num.". Please Pay Your Fee in choosen Branch Regard:-JMD Finance Ltd.";
			sms($number,$msg);
			$this->load->library('upload');
			// Set configuration array for uploaded photo.
			$image_path = realpath(APPPATH . '../assets/img/empImages');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $pname;
			if (!empty($pname)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('emp_photo');
			}
			
			$image_path = realpath(APPPATH . '../assets/img/empImages');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $sname;
			
			if (!empty($sname)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('emp_signature');
			}
			$image_path = realpath(APPPATH . '../assets/img/empImages');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $aname;
			
			if (!empty($aname)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('id_proof_image');
			}
			$image_path = realpath(APPPATH . '../assets/img/empImages');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $adname;
			
			if (!empty($adname)) {
				$this->upload->initialize($config);
				$this->upload->do_upload('address_proof_image');
			}
					
					redirect(base_url()."index.php/registration/registrationSlip/$registration_num");
		}
	}
	
	
	
	function registrationSlip(){
		$data['registration'] = $this->uri->segment(3);
		$this->load->view("registrationSlip",$data);
	}
	
	function printSlip(){
		$data['registration'] = $this->uri->segment(3);
		$this->load->view("printSlip",$data);
	}
}