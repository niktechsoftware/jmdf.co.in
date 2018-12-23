<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function admissionForm()
	{
		$this->load->view('admissionForm');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function enquiryForm()
	{
		$this->load->view('enquiryForm');
	}
	public function managementFaculity()
	{
		$this->load->view('managementFaculity');
	}
	public function mission()
	{
		$this->load->view('mission');
	}
	public function businessPlan()
	{
		$this->load->view('businessPlan');
	}
	public function amount()
	{
		$this->load->view('amount');
	}
	public function commission()
	{
		$this->load->view('commission');
	}
	public function empcommission()
	{
		$this->load->view('empcommission');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */