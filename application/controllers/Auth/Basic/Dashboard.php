<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Dashboard');
define('this_view', 'auth/basic/dashboard/dashboard');
define('this_asset', web_url . 'asset/admin/');
define('this_link', 'Auth/Basic/Dashboard/');
define('this_table', 'role_ab_user');


class Dashboard extends Admin_Controller {

	public function index()
	{
		$data='';
		$this->template(this_view,$data);
	}
}











?>