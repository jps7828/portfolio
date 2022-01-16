<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Team');
define('this_view', 'auth/team/team');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Team/');
define('this_table', 'team');

class Team extends Admin_Controller {

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
			$image_1 = image_validation('team', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			// 'team_type' => $this->input->post('type'),
			'team_name' => $this->input->post('name'),
			// 'team_designation' => $this->input->post('designation'),
			'team_image_1' => $image_1,
			'team_details' => $this->input->post('details'),
			'team_status' => $this->input->post('status')
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
			$image_1 = image_validation('team', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			// 'team_type' => $this->input->post('type'),
			'team_name' => $this->input->post('name'),
			// 'team_designation' => $this->input->post('designation'),
			'team_image_1' => $image_1,
			'team_details' => $this->input->post('details'),
			'team_status' => $this->input->post('status')
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
