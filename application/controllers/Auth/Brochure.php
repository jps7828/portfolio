<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Brochure');
define('this_view', 'auth/brochure/brochure');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Brochure/');
define('this_table', 'brochure');

class Brochure extends Admin_Controller {

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
			$image_1 = image_validation('brochure', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $file_1 ="";
        if ($_FILES['file_1']['name']!="") {
            $file_1 = $this->file_upload('brochure', 'file_1');
        }

		$array = 
		[ 
			'brochure_name' 		=> $this->input->post('name'),
			'brochure_file_1' 		=> $file_1,
			'brochure_image_1' 		=> $image_1,
			'brochure_status' 		=> $this->input->post('status')
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
            $image_1 = image_validation('brochure', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $file_1 =$_POST['file_old_1'];
        if ($_FILES['file_1']['name']!="") {
            $file_1 = $this->file_upload('brochure', 'file_1');
        }

		$array = 
		[ 
			'brochure_name' 		=> $this->input->post('name'),
			'brochure_file_1' 		=> $file_1,
			'brochure_image_1' 		=> $image_1,
			'brochure_status' 		=> $this->input->post('status')
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
