<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'E_portal');
define('this_view', 'web/e_portal');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'E_portal/');
define('this_table', 'e_portal');

class E_portal extends Web_Controller {

	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['value']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

}
