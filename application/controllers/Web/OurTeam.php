<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'OurTeam');
define('this_view', 'web/our_team');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'OurTeam/');
define('this_table', 'team');

class OurTeam extends Web_Controller {

	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table, 'background_status' => 'active'], 'row');
		$data['teams']=$this->Query->select('',this_table, ['team_status' => 'active']);
		$this->template(this_view,$data);
	}

}
