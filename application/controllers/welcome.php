<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function startup_business_idea()
	{
		$this->load->view('startup_business_idea');
	}
	public function jobapply()
	{
	    $this->load->view('jobapply');
	}
	public function businessloan()
	{
		$this->load->view('bsnloan');
	}
	public function businessapp()
	{
		$this->load->view('businessapp');

	}
	public function termofuse()
	{
		$this->load->view('termofuse');

	}


	public function jmdboard()
	{
		$this->load->view('jmdboard');
	}
	public function overview()
	{
		$this->load->view('overview');
	}
	public function enquiryform()
	{
	    $this->load->view('enquiry');
	}
    public function contact_us()
    {
        
          $this->load->view('contact_us');
    }
    public function photo_gallery()
    {
        
         $this->load->view('photo_gallery');
    }

	public function small_industry()
	{
		$this->load->view('small_industry');
	}

	public function business_format()
	{
		$this->load->view('business_format');
	}

	public function history()
	{
		$this->load->view('history');
	}

    public function vission_mission()
	{
		$this->load->view('vision_mission');
	}

	public function meaning_subsidy()
	{
		$this->load->view('meaning_subsidy');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */