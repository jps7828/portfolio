<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Home');
define('this_view', 'web/index');
define('this_asset', web_url . 'asset/web/');
define('this_link', 'Home/');
define('this_table', 'page');

class Home extends Web_Controller {

	public function index()
	{
		$data['sliders']= $this->Query->select('', 'slider', ['slider_name' => 'Home', 'slider_status' => 'Active']);
		$data['skills']= $this->Query->select('', 'skills', ['skill_status' => 'Active'], '', '');
		$data['about_us']= $this->Query->select('', 'about_us', ['about_us_status' => "Active"]);
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$data['clients']= $this->Query->select('', 'clients', ['clients_status' => 'Active']);
		$data['portfolio_all']= $this->Query->select('', 'portfolio', ['portfolio_status' => 'active']);
		$this->template(this_view,$data);
	}

	

	
}
