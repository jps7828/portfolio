<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Slider');
define('this_view', 'auth/slider/slider');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Slider/');
define('this_table', 'slider');

class Slider extends Admin_Controller {

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
		$image_1 ="";
        if ($_FILES['image_1']['name']!="") {
            $image_1 = $this->file_upload('slider', 'image_1');
        }

		$array = 
		[ 
			'slider_name' => $this->input->post('slider_name'),
			'slide_name' => $this->input->post('slide_name'),
			'slider_heading' => $this->input->post('heading'),
			'slider_sub_heading' => $this->input->post('sub_heading'),
			'slider_image_1' => $image_1,
			'slider_caption' => $this->input->post('caption'),
			'slider_video' => $this->input->post('video'),
			'slider_status' => $this->input->post('status')
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
            $image_1 = $this->file_upload('slider', 'image_1');
        }

		$array = 
		[ 
			'slider_name' => $this->input->post('slider_name'),
			'slide_name' => $this->input->post('slide_name'),
			'slider_heading' => $this->input->post('heading'),
			'slider_sub_heading' => $this->input->post('sub_heading'),
			'slider_image_1' => $image_1,
			'slider_caption' => $this->input->post('caption'),
			'slider_video' => $this->input->post('video'),
			'slider_status' => $this->input->post('status')
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
