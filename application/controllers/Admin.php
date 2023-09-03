<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
        $this->db->query('SET time_zone="+7:00"');
        if(!$this->session->userdata('account')){
        	redirect('login');
        }
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
	private function show_page($page = "utama", $data1 = array())
	{
		$data = array(
			"content" => $page
		);
		$data['account'] = $this->session->userdata('account');

		$data = array_merge_recursive($data,$data1);
		$data["data"]=$data;
		$this->load->view("template/_html",$data);
	}

	public function page($page = "utama"){
		$data['title'] = 'Dashboard';
		$file =  realpath(APPPATH."models/".ucwords($page)."_model.php");
		if (is_file($file)) {
			$this->load->model(ucwords($page)."_model",$page);
			$data = $this->{$page}->initData();
		}else{
			$page = "e404";
		}

		$this->show_page($page, $data);
	}

	public function api($method ="get", $page = "utama"){
		$file =  realpath(APPPATH."models/".ucwords($page)."_model.php");
		if (is_file($file)) {
			$this->load->model(ucwords($page)."_model",$page);
			$data = $this->{$page}->{$method}($this->input->post());
			echo json_encode($data);
		}else{
			echo json_encode(array("success"=>false));
		}

	}
	

	/*====================================
	=            Static Route            =
	====================================*/
	
	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->show_page("utama", $data);

	}

}
