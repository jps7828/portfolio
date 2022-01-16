<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Resources');
define('this_view', 'auth/resources/resources');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Resources/');
define('this_table', 'resources');

class Resources extends Admin_Controller {

	public function index()
	{
		$data['value']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['value']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function add()
	{
		$data='';
		$this->template(this_view.'_add',$data);
	}

	public function insert()
	{
		$image ="";
        if ($_FILES['image']['name']!="") {
			$image_1 = image_validation('brochure', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $file ="";
        if ($_FILES['file']['name']!="") {
            $file = $this->file_upload('brochure', 'file');
        }

		$array = 
		[ 
			'resources_name' 		=> $this->input->post('name'),
			'resources_heading' 	=> $this->input->post('heading'),
			'resources_file' 		=> $file,
			'resources_image' 		=> $image,
			'resources_status' 		=> $this->input->post('status')
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
		$image =$_POST['image_old'];
        if ($_FILES['image']['name']!="") {
            $image_1 = image_validation('brochure', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $file =$_POST['file_old'];
        if ($_FILES['file']['name']!="") {
            $file = $this->file_upload('brochure', 'file');
        }

		$array = 
		[ 
			'resources_name' 		=> $this->input->post('name'),
			'resources_heading' 	=> $this->input->post('heading'),
			'resources_file' 		=> $file,
			'resources_image' 		=> $image,
			'resources_status' 		=> $this->input->post('status')
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
