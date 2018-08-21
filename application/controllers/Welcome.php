<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
    parent::__construct();
    $this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	function save_visitor(){
		if($_POST['name'] && $_POST['phone'] && $_POST['email']){
			$email = array(
				'subject'=>'Pemberitahuan',
				'message'=>'Terimakasih '.ucfirst($_POST['name']).' telah mengisi data undangan',
				'to'=>$_POST['email']);
			$this->emailutil->sendEmail($email);
			echo json_encode(array('response'=>'success'));
		}
	}
}
