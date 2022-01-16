<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Page');
define('this_view', 'web/page');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Page/');
define('this_table', 'page');

class Page extends Web_Controller {


	public function index($id)
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['page_view']=$this->Query->select('',this_table,['page_link'=>$id],'row');
		$data['page']=$this->Query->select('','page',['page_name'=>'top background image'],'row');
		$data['contact']=$this->Query->select('','contact_us','','row');
		$this->template(this_view,$data);
	}

	public function service($id)
	{
		$data['service']=$this->Query->select('',this_table,['service_link'=>$id],'row');
		$this->template("web/service_single",$data);
	}
}
