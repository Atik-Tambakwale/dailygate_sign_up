<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_signup extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('V_signup');
	}

	public function send_email_user_data()
	{
		$response=[];
		$user_email=$this->input->post("user_email");
		//$this->load->library('email');

		// $config = array(
		// 'protocol'    => 'smtp',
		// 'smtp_host'    => 'smtp.gmail.com',
		// 'smtp_port'    => '465',
		// 'smtp_user'    => 'contact@dailygate.in',
		// 'smtp_pass'    => 'DailyGate$123#',
		// // 'smtp_port'   => '587',
		// 'smtp_crypto' => 'ssl',
		// 'charset' => 'iso-8859-1',
		// 'wordwrap' => TRUE
		// );
		//
		// $this->email->initialize($config);
		//
		// $this->email->set_mailtype("html");
		// $this->email->set_newline("\r\n");
		//
		//
		// $this->email->from('contact@dailygate.in');
		// $this->email->to('atiktambakwale@gmail.com');
		// $this->email->subject('Lead from DailyGate Official Website');
		// $mail_message = ''.$user_email.' is interested in using DailyGate. Please reach out.';
		// $mail_message .= '<br>Thankyou.';
		// $mail_message .= '<br>DailyGate Automation.';
		//
		// $this->email->message($mail_message);
		//
		// if ($this->email->send()) {
		// 	$response=["status"=>200,"msg"=>"send successfully..."];
		//
		// } else {
		// 	$response=["msg"=>"unable to send email ...."];
		// }
		$to = "atiktambakwale@gmail.com";
	   $subject = "Lead from DailyGate Official Website";

	   $message = "<b>This is HTML message.</b>";
	   $message .= "<h1>This is headline.</h1>";

	   $header = "From:contact@dailygate.in \r\n";


	   $retval = mail ($to,$subject,$message,$header);

	   if( $retval == true ) {
		   $response=["msg"=>"Message sent successfully..."];
	   }else {
		  $response=["msg"=>"Message could not be sent..."];
	   }
		echo json_encode($response);
	}

}
