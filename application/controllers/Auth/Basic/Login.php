<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('this_controller', 'Login');
define('this_view', 'auth/basic/login/');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Basic/Login/');
define('this_table', 'role_ab_user');


class Login extends CI_Controller {

	public function __construct($params = array()) {
        parent::__construct();
        $this->load->library(array('session'));
		$this->load->model('Query');
    }

	public function index()
	{
		$this->load->view('auth/basic/login/login');
	}

	public function register()
	{
		$this->load->view('auth/basic/login/register');
	}

	function do_login(){
		$data['role_ab_user_username'] = $username = $this->input->post('username');
		$data['role_ab_user_password'] = $password =  $this->input->post('password');

		$result = $this->Query->select('*',this_table,['role_ab_user_username'=>$username],'row');
		if($result){
			$existing_password = decrypt($result->role_ab_user_password);
			if($password==$existing_password){
				//login successful
				$this->session->set_userdata('usertype','admin');
				$this->session->set_userdata('userid',$result->role_ab_user_id);
				$this->session->set_userdata('username',$result->role_ab_user_name);
				refer('Auth/Home_Admin');
			}else{
				// login failed
				$this->session->set_flashdata('msg','Username & Password Mismatch');
				refer();
			}
		}else{
			$this->session->set_flashdata('msg','User not found');
			refer();
		}
		
	}

	function do_logout(){
		session_destroy();
		refer('Auth/Basic/Login/');
	}

	function save_user(){
		$data['role_ab_user_username'] = $this->input->post('username');
		$data['role_ab_user_password'] = encrypt($this->input->post('password'));
		$result = $this->Query->insert(this_table,$data);
		if($result)
		{
			$this->session->set_flashdata('msg','User Created Successfully, <br> Please Login to Proceed.', 'S');
			refer('Auth/Basic/Login/');
		}
		else
		{
			$this->session->set_flashdata('msg','Error.., please try again!', 'E');
			refer('Auth/Basic/Login/register');
		}
		
	}

}
