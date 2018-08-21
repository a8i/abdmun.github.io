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

	function save_comment($post){
		$comment['site_id'] = 6;
		$comment['name'] = $post['nama-input'];
		$comment['email'] = $post['email-input'];
		$comment['phone'] = $post['phone-input'];
		$comment['text'] = $post['text-input'];
		$comment['article_id'] = $post['id-input'];
		$comment['created_datetime'] = date("Y-m-d H:i:s");

		$this->db->insert('cms_comment',$comment);
		if($this->db->affected_rows() > 0){
				echo json_encode(array('success'=>true,'msg'=>'Terimakasih telah memberikan komentar'));
				$e = $this->db->get_where('cms_setting',array('name_set'=>'EMAIL'))->row()->value_set;
				$email = array('subject'=>'Pemberitahuan','message'=>ucfirst($comment['name']).' ('.$comment['email'].') '.' telah memberikan komentar','to'=>'markom.explore@gmail.com');
				$this->emailutil->sendEmail($email);
		}else{
				echo json_encode(array('success'=>false,'msg'=>'Terjadi kesalahan!'));
		}
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
