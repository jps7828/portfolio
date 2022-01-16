<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Gallery');
define('this_view', 'web/gallery');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Gallery/');
define('this_table', 'gallery');

class Gallery extends Web_Controller {


	public function index()
	{
		$data['gallery']=$this->Query->select('', this_table, ['gallery_status' => 'active'],'',['gallery_id'=>'DESC']);
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$this->template(this_view,$data);
	}
	
}
