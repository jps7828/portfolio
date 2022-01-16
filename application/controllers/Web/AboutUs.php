<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'AboutUs');
define('this_view', 'web/about_us');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'AboutUs/');
define('this_table', 'about_us');

class AboutUs extends Web_Controller {

	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['about_who']	= $this->Query->select('', this_table, ['about_us_title' => 'who we are'], 'row');
		$data['about_what']	= $this->Query->select('', this_table, ['about_us_title' => 'what we do'], 'row');
		$data['teams']= $this->Query->select('', 'team', ['team_status' => 'Active'], '', '', 3);
		$data['gallery']	=$this->Query->select('', 'gallery', ['gallery_status' => 'active'], '', '', 8);
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$this->template(this_view,$data);
	}

	public function who_we_are()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['about_us']	= $this->Query->select('', this_table, ['about_us_id' => '2'], 'row');
		$data['teams']= $this->Query->select('', 'team', ['team_status' => 'Active'], '', '', 3);
		$data['gallery']	=$this->Query->select('', 'gallery', ['gallery_status' => 'active'], '', '', 8);
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$this->template(this_view,$data);
	}

	public function what_we_do()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['about_us']	= $this->Query->select('', this_table, ['about_us_id' => '3'], 'row');
		$data['teams']= $this->Query->select('', 'team', ['team_status' => 'Active'], '', '', 3);
		$data['gallery']	=$this->Query->select('', 'gallery', ['gallery_status' => 'active'], '', '', 8);
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$this->template(this_view,$data);
	}
}
