<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'What_we_do');
define('this_view', 'web/what_we_do');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'What_we_do/');
define('this_table', 'about_us');

class What_we_do extends Web_Controller {


	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['value']	=$this->Query->select('', this_table, ['about_us_title' => 'who we are'], 'row');
		$data['gallery']=$this->Query->select('', 'gallery', ['gallery_status' => 'active'], '', '', 8);
		$this->template(this_view,$data);
	}

}
