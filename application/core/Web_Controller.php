<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Web_Controller extends CI_Controller
{
	public function __construct($params = array()) {
		parent::__construct();
		// $this->load->helper('url', 'my_functions_helper', 'my_helper');
		$this->load->model('Query');
		$this->load->library(array('session', 'user_agent'));
		date_default_timezone_set('Asia/Kolkata');
	}

	function header($module_id = 0, $pagename = "")
	{
		$data['basic']=$this->Query->select('','com_basic_details','','row');
		$data['menus']=$this->Query->select('','menu',['menu_status'=>'active','menu_type'=>'main_menu'],'',['menu_ordering'=>'ASC']);
		$data['social_network']=$this->Query->select('','social_network',['social_network_status'=>'active']);
		$data['testimonials']= $this->Query->select('', 'slider', ['slider_name' => 'Testimonial']);
		$data['associates']= $this->Query->select('', 'slider', ['slider_name' => 'Associates', 'slider_status' => 'Active']);
		$this->load->view('web/header',$data);
	}

	function footer($module_id = 0, $pagename = "")
	{
		$data['blogs']= $this->Query->select('', 'blog', ['blog_status' => 'Active'], '', '', 3);
		$data['services'] = $this->Query->select('', 'services', '', '', '', 7); // <-- LIMIT applied 7
		$data['foot_menu']=$this->Query->select('','menu',['menu_status'=>'active','menu_type'=>'main_menu'],'',['menu_ordering'=>'ASC'], 5);
		$this->load->view('web/footer',$data);
	}

	public function template($view,$data,$module_id = 0, $pagename = "")
	{
		$this->header($module_id = 0, $pagename = "");
		$this->load->view($view,$data);
		$this->footer($module_id = 0, $pagename = "");
	}

	public function notemplate($view,$data)
	{
		$this->load->view($view,$data);
	}



	public function do_pagination($url, $segment, $total, $per_page = 10, $qry = '', $qry2 = '') {
		$config = array();
		$config["base_url"] = $url;
		$config["total_rows"] = $total;
		$config["per_page"] = $per_page;
		$config["uri_segment"] = $segment;
		$config["num_links"] = 5;
		$config['reuse_query_string'] = FALSE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li id="1">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#" >';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['page_query_string'] = FALSE;
//        $config['suffix'] = '?search=' . $qry;
		$config['reuse_query_string'] = TRUE;
//        if (count($_GET) > 0)
//            $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		$this->pagination->initialize($config);
		return $page = ($this->uri->segment($segment)) ? $this->uri->segment($segment) : 0;
	}

	public function create_links($url = "", $total, $per_page = 10, $segment,$type="") {
		if($type==""){
			$url = base_url('Auth/'.$url . '/' . $per_page);
		}else{
			$url = base_url($url . '/' . $per_page);
		}
		$limit = $per_page;
		$page = $this->do_pagination($url, $segment, $total, $limit);
		return $array = array(
			'total_rec' => $total,
			'num_records' => $per_page,
			'per_page' => $per_page,
			'page' => $page,
			'links' => $this->pagination->create_links()
		);
	}


	


	
}