<?php
defined('BASEPATH') or exit('No direct script access allowed');

define('this_controller', 'Login');
define('this_view', 'auth/basic/login/');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Basic/Login/');
define('this_table', 'admins');


class Login extends CI_Controller
{

	public function __construct($params = array())
	{
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
		refer(); // To avoid registration
		$this->load->view('auth/basic/login/register');
	}

	function do_login()
	{
		if (is_post_request()) {
			$username = $this->input->post('username') ?? '';
			$password =  $this->input->post('password') ?? '';
			// Validations
			if (is_blank($username)) {
				$this->session->set_flashdata('fail', 'Username cannot be blank.');
				refer();
			}
			if (is_blank($password)) {
				$this->session->set_flashdata('fail', 'Password cannot be blank.');
				refer();
			}
		}

		$result = $this->Query->select('*', this_table, ['username' => $username], 'row');
		if ($result) {
			if (password_verify($password, $result->password)) {
				//login successful
				session_regenerate_id();
				$this->session->set_userdata('usertype', 'admin');
				$this->session->set_userdata('last_login', time());
				$this->session->set_userdata('userid', $result->id);
				$this->session->set_userdata('username', $result->username);
				refer('Auth/Home_Admin');
			} else {
				// login failed
				$this->session->set_flashdata('fail', 'Failed to login');
				refer();
			}
		} else {
			$this->session->set_flashdata('fail', 'Failed to login');
			refer();
		}
	}

	function do_logout()
	{
		session_destroy();
		refer('Auth/Basic/Login/');
	}

	function save_user()
	{
		if (is_post_request()) {
			$username = $this->input->post('username') ?? '';
			$password =  $this->input->post('password') ?? '';
			// Validations Username
			if (is_blank($username)) {
				$this->session->set_flashdata('fail', 'Username cannot be blank.');
				refer();
			} elseif (!has_length($username, array('min' => 4, 'max' => 255))) {
				$this->session->set_flashdata('fail', 'Username must be between 4 and 255 characters.');
				refer();
			}
			// Validations Name
			// Check if username already exists
			$username_check = $this->Query->select('', this_table, ['username' => $username]);
			if (!empty($username_check)) {
				$this->session->set_flashdata('fail', 'Username already exists.');
				refer();
			}


			// Validations PASSWORD
			if (is_blank($password)) {
				$this->session->set_flashdata('fail', 'Password cannot be blank.');
				refer();
			} elseif (!has_length($password, array('min' => 8))) {
				$this->session->set_flashdata('fail', 'Password must contain 8 or more characters.');
				refer();
			} elseif (!preg_match('/[A-Z]/', $password)) {
				$this->session->set_flashdata('fail', 'Password must contain at least 1 uppercase letter.');
				refer();
			} elseif (!preg_match('/[a-z]/', $password)) {
				$this->session->set_flashdata('fail', 'Password must contain at least 1 lowercase letter.');
				refer();
			} elseif (!preg_match('/[0-9]/', $password)) {
				$this->session->set_flashdata('fail', 'Password must contain at least 1 number.');
				refer();
			} elseif (!preg_match('/[^A-Za-z0-9\s]/', $password)) {
				$this->session->set_flashdata('fail', 'Password must contain at least 1 symbol.');
				refer();
			}
		}


		$data['username'] = $username;
		$data['password'] = password_hash($password, PASSWORD_BCRYPT);
		$result = $this->Query->insert(this_table, $data);
		if ($result) {
			$this->session->set_flashdata('success', 'User Created Successfully, <br> Please Login to Proceed.', 'S');
			refer('Auth/Basic/Login/');
		} else {
			$this->session->set_flashdata('fail', 'Error.., please try again!', 'E');
			refer('Auth/Basic/Login/register');
		}
	}

	function admin_registration()
	{
		
		$array =
			[
				'name' 				=> $this->input->post('name'),
				'username' 			=> $this->input->post('username'),
				'email' 			=> $this->input->post('email'),
				'password' 			=> $this->input->post('password'),
				'confirm_password'	=> $this->input->post('confirm_password'),
				'my_checkbox'		=> $this->input->post('my_checkbox')
			];
		
		$array['query_username'] = $this->Query->select('', this_table, ['username' => $array['username']]);
		  
		$errors = form_validation($array);
		
		if(empty($errors))
		{
			$data =
			[
				'name' 				=> $this->input->post('name'),
				'username' 			=> $this->input->post('username'),
				'email' 			=> $this->input->post('email')
			];
			$password = $this->input->post('password');
			$data['password'] = password_hash($password, PASSWORD_BCRYPT);
			$result = $this->Query->insert(this_table, $data);
			if ($result) {
				echo json_encode(['code' => 200, 'msg' => 'User Created Successfully, <br> Please Login to Proceed.']);
				exit;
			} else {
				echo json_encode(['code' => 404, 'msg' => 'Error.., please try again!']);
			}
		}else{
			echo json_encode( ['code' => 404, 'msg' => $errors] );
		}
	}
}
