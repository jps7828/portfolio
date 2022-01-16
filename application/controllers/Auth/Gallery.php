<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Gallery');
define('this_view', 'auth/gallery/gallery');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Gallery/');
define('this_table', 'gallery');

class Gallery extends Admin_Controller {

	public function index()
	{
		$data['gallery_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['services_view']=$this->Query->select('',this_table);
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
			$image_1 = image_validation('gallery', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'gallery_name' => $this->input->post('name'),
			'gallery_heading' => $this->input->post('heading'),
			'gallery_image_1' => $image_1,
			'gallery_ordering' => $this->input->post('ordering'),
			'gallery_status' => $this->input->post('status')
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
            $image_1 = image_validation('gallery', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'gallery_name' => $this->input->post('name'),
			'gallery_heading' => $this->input->post('heading'),
			'gallery_image_1' => $image_1,
			'gallery_ordering' => $this->input->post('ordering'),
			'gallery_status' => $this->input->post('status')
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
