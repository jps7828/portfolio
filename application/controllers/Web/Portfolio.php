<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Portfolio');
define('this_view', 'web/portfolio');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Portfolio/');
define('this_table', 'portfolio');

class Portfolio extends Web_Controller {


	public function index()
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['portfolio_all']= $this->Query->select('', 'portfolio', ['product_status' => 'active']);
		$data['portfolio_coming']= $this->Query->select('', 'portfolio', ['product_status' => 'deactive'], '', '', 40 );
		$this->template(this_view,$data);
	}

	public function product($id)
	{
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['product']=$this->Query->select('',this_table,['product_id'=>$id],'row');
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$data['gallery']	=$this->Query->select('', 'gallery', ['gallery_status' => 'active'], '', '', 8);
		$data['portfolio_coming']= $this->Query->select('', 'portfolio', ['product_status' => 'deactive'], '', '', 40 );
		$data['portfolio_all']= $this->Query->select('', 'portfolio', ['product_status' => 'active']);
		$this->template("web/product_single",$data);
	}
}
