<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$m['name'] = $_POST['name'];
		$m['mail_id'] = $_POST['email'];
		$m['subject'] = $_POST['subject'];
		$m['message'] = $_POST['message'];
		$m['receiver'] = 'shibz.islam@gmail.com';
		// $fetch_mail = $this->register_model->getMail($id);

		// 			foreach($fetch_mail as $mail) {
		// 				$m = $mail->email;
		// 			}

		//print_r($m);
		//die();
         $this->mail($m);
    
	}

	function mail($m) {
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sabab.ndc@gmail.com',
			'smtp_pass' => 'Marine786',
			'mailtype' => 'html',
  			'charset' => 'iso-8859-1',
  			'wordwrap' => TRUE
			);

		$mess = "Name: ".$m['name']."<br>"."Email: ".$m['mail_id']."<br>"."Message: ".$m['message'];

		$this->load->library('email', $config);

		$this->email->set_newline("\r\n");

		$this->email->from('sabab.ndc@gmail.com', 'Sabab');
		$this->email->to($m['receiver']);
		$this->email->subject($m['subject']);
		$this->email->message($mess);



		if($this->email->send()) {
			//echo 'Mail sent!';
			$this->load->view('mail_confirmation');
		}		
		else {
			show_error($this->email->print_debugger());
		}
	}
}
