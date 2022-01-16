<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Resources');
define('this_view', 'web/resources');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Resources/');
define('this_table', 'resources');

class Resources extends Web_Controller 
{


	public function index($id)
	{
		
	}

	public function catalogue()
	{
		$data['resources']	=$this->Query->select('', this_table, ['resources_name'=>'Catalogue']);
		$data['resources_name'] = 'Product Catalogue';
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => 'resources'], 'row');
		$this->template(this_view,$data);
	}

	public function brochure()
	{
		$data['resources']	=$this->Query->select('', this_table, ['resources_name'=>'Brochure']);
		$data['resources_name'] = 'Brochures';
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => 'resources'], 'row');
		$this->template(this_view,$data);
	}

	public function company_profile()
	{
		$data['resources']	=$this->Query->select('', this_table, ['resources_name'=>'Company Profile']);
		$data['resources_name'] = 'Company Profile';
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => 'resources'], 'row');
		$this->template(this_view,$data);
	}

}
