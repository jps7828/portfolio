<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Services');
define('this_view', 'web/services');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Services/');
define('this_table', 'service');

class Services extends Web_Controller {


	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['services']=$this->Query->select('', this_table);
		$this->template(this_view,$data);
	}

	public function service($id)
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['service']=$this->Query->select('',this_table,['service_link'=>$id],'row');
		$this->template("web/service_single",$data);
	}
}
