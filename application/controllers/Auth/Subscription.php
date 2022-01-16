<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Subscription');
define('this_view', 'auth/subscription/subscription');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Subscription/');
define('this_table', 'subscription');

class Subscription extends Admin_Controller {

	public function index()
	{
		$data['value']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['services_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	
	public function delete($id)
	{
		$array = [
			this_table.'_id' => $id
		];
		$qry = $this->Query->delete(this_table, $array);
		if ($qry == TRUE) {
			set_msg(this_controller.' Deleted Successfully', 'S');
		} else {
			set_msg('Error Occured. Try Again!!', 'E');
		}
		refer();
	}
}
