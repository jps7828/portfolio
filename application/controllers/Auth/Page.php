<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Page');
define('this_view', 'auth/page/page');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Page/');
define('this_table', 'page');

class Page extends Admin_Controller {

	public function index()
	{
		$data['page_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['page_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function add()
	{
		$data='';
		$this->template(this_view.'_add',$data);
	}

	public function insert()
	{
		$image_1 ="";
        if ($_FILES['image_1']['name']!="") {
            $image_1 = image_validation('page', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

         $image_2 ="";
        if ($_FILES['image_2']['name']!="") {
            $image_2 = image_validation('page', 'image_2');
			if(is_array($image_2) === true) 
			{
				foreach($image_2 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $image_3 ="";
        if ($_FILES['image_3']['name']!="") {
            $image_3 = image_validation('page', 'image_3');
			if(is_array($image_3) === true) 
			{
				foreach($image_3 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'page_name' => $this->input->post('name'),
			'page_used_for' => $this->input->post('page_used_for'),
			'page_image_1' => $image_1,
			'page_image_2' => $image_2,
			'page_image_3' => $image_3,
			'page_content_1' => $this->input->post('content_1'),
			'page_content_2' => $this->input->post('content_2'),
			'page_content_3' => $this->input->post('content_3'),
			'page_link' => $this->input->post('page_link'),
			'link' => $this->input->post('link'),
			'page_status' => $this->input->post('status')
		];
		$qry = $this->Query->insert(this_table, $array);
		if ($qry == TRUE) {
			set_msg(this_controller.' Added Successfully', 'S');
		} else {
			set_msg('Error Occured. Try Again!!', 'E');
		}
		refer();
	}

	public function edit($id)
	{
		$data['value']=$this->Query->select('',this_table,[this_table.'_id'=>$id],'row');
		$this->notemplate(this_view.'_edit',$data);
	}

	public function update($id)
	{
		$image_1 =$_POST['image_old_1'];
        if ($_FILES['image_1']['name']!="") {
            $image_1 = image_validation('page', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $image_2 =$_POST['image_old_2'];
        if ($_FILES['image_2']['name']!="") {
            $image_2 = image_validation('page', 'image_2');
			if(is_array($image_2) === true) 
			{
				foreach($image_2 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $image_3 =$_POST['image_old_3'];
        if ($_FILES['image_3']['name']!="") {
            $image_3 = image_validation('page', 'image_3');
			if(is_array($image_3) === true) 
			{
				foreach($image_3 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'page_name' => $this->input->post('name'),
			'page_used_for' => $this->input->post('page_used_for'),
			'page_image_1' => $image_1,
			'page_image_2' => $image_2,
			'page_image_3' => $image_3,
			'page_content_1' => $this->input->post('content_1'),
			'page_content_2' => $this->input->post('content_2'),
			'page_content_3' => $this->input->post('content_3'),
			'page_link' => $this->input->post('page_link'),
			'link' => $this->input->post('link'),
			'page_status' => $this->input->post('status')
		];

		$qry = $this->Query->update(this_table, [this_table.'_id' => $id], $array);
		if ($qry == TRUE) {
			set_msg(this_controller.' Updated Successfully', 'S');
		} else {
			set_msg('Error Occured. Try Again!!', 'E');
		}
		refer();
	}

	public function delete($id)
	{
		$array = [
			this_table.'_id' => $id
		];
		$qry = $this->Query->delete(this_table, $array);
		if ($qry == TRUE) {
			set_msg(this_controller.' Deleted Successfully', 'S');
		} else {
			set_msg('Error Occured. Try Again!!', 'E');
		}
		refer();
	}
}
