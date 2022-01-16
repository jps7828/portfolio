<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Skills');
define('this_view', 'web/skills');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Skills/');
define('this_table', 'skills');

class Skills extends Web_Controller {


	public function index()
	{
		$data['skills']	=$this->Query->select('', this_table, ['skill_status' => 'active']);
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['gallery_training']=$this->Query->select('', 'gallery', ['gallery_status' => 'active', 'gallery_name' => 'training'],'',['gallery_id'=>'DESC']);
		$this->template(this_view,$data);
	}

}
