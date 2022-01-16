<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_Controller extends CI_Controller
{
	public function __construct($params = array()) 
	{
		parent::__construct();
		$this->load->helper('url', 'my_functions_helper', 'my_helper');
		$this->load->model('Query');
		$this->load->library(array('session', 'user_agent', 'form_validation'));
		date_default_timezone_set('Asia/Kolkata');
	}

	function header($module_id = 0, $pagename = "")
	{
		// LOGIN CHECK--------
		if($this->session->has_userdata('username') != TRUE)
		{
			refer('Auth/Basic/Login');
		}
		// LOGO QUERY---------
		$data['about']=$this->Query->select('','about_us', '' ,'row');
		$this->load->view('auth/common/header',$data);
	}

	function footer($module_id = 0, $pagename = "")
	{
		$this->load->view('auth/common/footer');
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

	public function file_upload($file_path, $file_name) {
		$new_name = mt_rand(111111, 999999) . $file_name;
		$config['file_name'] = $new_name;
		$config['upload_path'] = 'assets/web/images/' . $file_path;
//        $config['allowed_types'] = '*';
		$config['allowed_types'] = '*';
        //  $config['max_size'] = 100;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($file_name)) {
			$error = $this->upload->display_errors();
			$new_name = '';
			return $error;
			exit;
		} else {
			$upload_data = $this->upload->data();
			$new_name = '';
			return $config['upload_path'] . '/' . $upload_data['file_name'];
		}
	}

	public function file_upload_img($file_path, $file_name) {
		$config['file_name'] = "ex" . rand(1, 9);
		$config['upload_path'] = 'assets/web/images/' . $file_path;
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = 100000;
		$config['overwrite'] = 1;

		$config_img['image_library'] = 'gd2';
		$config_img['create_thumb'] = false;
		$config_img['maintain_ratio'] = true;
		$config_img['width'] = 800;
		$config_img['height'] = 800;
		$config_img['max_size'] = 100000;

		$this->load->library('upload', $config);
		$this->load->library('image_lib');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($file_name)) {
			$error = $this->upload->display_errors();
			return false;
		} else {
			$upload_data = $this->upload->data();
			$config_img['source_image'] = $upload_data['full_path'];
			$config_img['new_image'] = $config['upload_path']. '/' . date('dmyHis') . $upload_data['file_name'];
			$new_image = $config_img['new_image'];
			$this->image_lib->initialize($config_img);
			$this->image_lib->resize();
			unlink($config_img['source_image']);
			$this->image_lib->clear();
			return $config_img['new_image'];
		}
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



	public static function slugify($text)
	{
	  // replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

	  // transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	  // remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

	  // trim
		$text = trim($text, '-');

	  // remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

	  // lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}

	
	



	






















}