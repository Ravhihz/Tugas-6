<?php

class Email extends CI_Controller {
	function __contsruct() {
		parent::__contsruct();
		$this->load->helper('form');
	}
	public function index(){
		$this->load->helper('form');
		$this->load->view('email_form');
	}
	public function send_mail(){
		$from_email = "your@example.com";
		$to_email = $this->input->post('email');
		
		//load email library
		$this->load->library('email');
		
		$this->email->form($from_email, 'Your Name');
		$this->email->to($to_email);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		//send mail
		if($this->email->send())
			$data ="Email sent successfully";
		else
			$data ="Error in sending Email";
			
		$this->load->view('email_form',$data);
	}
}
?>