<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Brochure');
define('this_view', 'web/brochure');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Brochure/');
define('this_table', 'brochure');

class Brochure extends Web_Controller 
{


	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['brochure']	=$this->Query->select('', this_table);
		$this->template(this_view,$data);
	}

}
