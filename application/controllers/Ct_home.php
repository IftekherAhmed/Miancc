<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ct_home extends CI_Controller {

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
	 
	
	// 1) Construct
	function __construct(){		
		parent::__construct();	
	}
	 
	public function index(){
		$this->load->view('home/home');
	}
	 
	public function about_us_page(){
		$this->load->view('home/about_us');
	}
	 
	public function service_page(){
		$this->load->view('home/service');
	}
	 
	public function clients_page(){
		$this->load->view('home/clients');
	}
	 
	public function project_page(){
		$this->load->view('home/project');
	}
	 
	public function gallery_page(){
		$this->load->view('home/gallery');
	}
	 
	public function contact_page(){
		$this->load->view('home/contact');
	}	
	 
	public function send_mail(){
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('user_no', 'Number', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[6]');
		
		if ($this->form_validation->run() == FALSE){	
			$this->session->set_flashdata('error','Please fill correctly.');	
			$this->load->view('home/contact');
		}else{	
			$data = array();
			$data = $this->input->post();
			
			$to =  "info@miancc.com";  // receiver email pass here
			$subject = "";
				
			$from      = "mail.sender@miancc.com"; // Pass here your mail id
			$from_name = "Miancc"; // Pass here your name

			$emailContent = "User email: ".$data['user_email'];
			$emailContent .= "<br />";
			$emailContent .= "User no: ".$data['user_no'];
			$emailContent .= "<br />";
			$emailContent .= "Message: ".$data['message'];
			
			$config['protocol']    = 'sendmail';
			$config['smtp_host']    = 'sg2plcpnl0026.prod.sin2.secureserver.net';
			$config['smtp_port']    = '465';
			$config['smtp_timeout'] = '60';

			$config['smtp_user']    = "mail.sender@miancc.com";    //Important
			$config['smtp_pass']    = "Riyadh123";  //Important

			$config['charset']    = 'utf-8';
			$config['newline']    = "\r\n";
			$config['mailtype'] = 'html'; // or html
			$config['validation'] = TRUE; // bool whether to validate email or not 

			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->from($from, $from_name);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($emailContent);
			
			if($this->email->send()) {
			        $this->session->set_flashdata('success','Successfully sent message.');	
				//$this->load->view('home/contact');
				redirect('ct_home/contact_page');
			  } else{
			     show_error($this->email->print_debugger());
			  }
	
			
		}
	}
	 
	public function blog_page(){
		$this->load->view('home/blog');
	}	
	
}
