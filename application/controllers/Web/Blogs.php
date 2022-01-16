<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'Blogs');
define('this_view', 'web/blogs');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'Blogs/');
define('this_table', 'blog');

class Blogs extends Web_Controller {

	public function index()
	{
		$data['blogs']=$this->Query->select('',this_table);
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$this->template(this_view,$data);
	}

	public function blog($id)
	{
		$data['blog']=$this->Query->select('',this_table,['blog_id'=>$id],'row');
		$data['blogs']=$this->Query->select('',this_table, '', '', '', 3);
		$data['bg']	=$this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$data['gallery']	=$this->Query->select('', 'gallery', ['gallery_status' => 'active'], '', '', 8);
		$data['products']= $this->Query->select('', 'products', ['product_status' => 'active'], '', '', 4 );
		$data['products_all']= $this->Query->select('', 'products');
		$this->template("web/blog_single",$data);
	}

}
