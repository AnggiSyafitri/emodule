<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function index(){
    	if($this->session->userdata('account')){ redirect('admin'); }
        $this->load->view('template/login');
    }

	public function actlogin() {
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');

		$whereguru 		= array('username' => $username, 'password' => $password);
		$whereadmin 	= array('username' => $username);

		$account = $this->auth($username, $password);
		if ($account) {
			redirect('admin');
			return;
		}

		redirect('login');
	}

	function auth($username, $password)
    {
        $query = $this->db->get_where('app_admin', array(
            "username" => $username,
            "AES_DECRYPT(`password`,`username`) = " => $password,
        ));

        if ($query->num_rows()) {
            $account = $query->row();
            $this->session->set_userdata('account',$account);
            return true;
        }
        return false;
    }
}