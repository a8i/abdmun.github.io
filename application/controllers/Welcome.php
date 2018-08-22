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
			$exist = $this->cek_eksist($_POST);
			if($exist == false){
				$this->save($_POST);
			}
			$data = array('view'=>1,'name'=>ucfirst($_POST['name']));
			$content = $this->send_undangan($data);
			$email = array(
				'subject'=>'Undangan Abdul & Ika menikah',
				'message'=>$content,
				'to'=>$_POST['email']);
			$this->emailutil->sendEmail($email);
			echo json_encode(array('response'=>'success','email'=>$_POST['email']));
		}
	}

	private function cek_eksist($p){
		$q = "SELECT * FROM undangan WHERE email like '%".$p['email']."%' OR phone like '%".$p['phone']."%'";
		$query = $this->db->query($q);
		if($query->num_rows() > 0)
			return true;
		else {
			return false;
		}
	}

	private function save($p){
		$this->db->insert('undangan',$p);
		if($this->db->affected_rows() > 0)
			return true;
		else {
			return false;
		}
	}

	public function view_undangan(){		
		$data['view'] = 0;
		$data['name'] = "";
		$this->load->view('undangan', $data);
	}

	private function send_undangan($data){
		$undangan = $this->load->view('undangan', $data, true);
		return $undangan;
	}
}
