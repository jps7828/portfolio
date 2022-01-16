<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'E_portal');
define('this_view', 'auth/e_portal/e_portal');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/E_portal/');
define('this_table', 'e_portal');

class E_portal extends Admin_Controller {

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
            $image_1 = image_validation('', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'e_portal_name' 	=> $this->input->post('name'),
			'e_portal_type' 	=> $this->input->post('type'),
			'e_portal_heading' 	=> $this->input->post('heading'),
			'e_portal_image_1' 	=> $image_1,
			'e_portal_details' 	=> $this->input->post('details'),
			'e_portal_ordering' => $this->input->post('ordering'),
			'e_portal_link' 	=> $this->input->post('e_portal_link'),
			'e_portal_status' 	=> $this->input->post('status')
		];
		$id = $this->Query->insert(this_table, $array, TRUE);
		if ($id > 0) 
		{
			$slug = $this->slugify($this->input->post('name'));
			$check_slug = $this->Query->select('*', 'com_route', ['com_route_new_link' =>  $slug], 'count');
			if($check_slug > 0)
			{
				$slug = $slug. '-' . rand(111, 999);
			}
			$array =
			[
				'com_route_type' 			=> 'Internal',
				'com_route_old_link' 		=> 'E_portal/'.$id,
				'com_route_new_link'	 	=>	$slug,
				'com_route_external_link'	=>  '',
				'com_route_category'	 	=>	'E_portal',
				'com_route_meta_title'	 	=>	$this->input->post('name'),
				'com_route_meta_key'	 	=>	$this->input->post('name'),
				'com_route_meta_tag'	 	=>	$this->input->post('name'),
				'com_route_meta_description'=>	$this->input->post('name')
			];
			$route_id = $this->Query->insert('com_route', $array, TRUE);
			$array = [ 'com_route_id' => $route_id ];
			$this->Query->update(this_table, ['e_portal_id' => $id], $array);


			set_msg(this_controller.' Added Successfully', 'S');
		} else {
			set_msg('Error Occured. Try Again!!', 'E');
		}
		refer();
	}

	public function edit($id)
	{
		$data['value']=$this->Query->select('',this_table,['e_portal_id'=>$id],'row');
		$this->notemplate(this_view.'_edit',$data);
	}

	public function update($id)
	{
		$image_1 =$_POST['image_old_1'];
        if ($_FILES['image_1']['name']!="") {
            $image_1 = image_validation('', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'e_portal_name' 	=> $this->input->post('name'),
			'e_portal_type' 	=> $this->input->post('type'),
			'e_portal_heading' 	=> $this->input->post('heading'),
			'e_portal_image_1' 	=> $image_1,
			'e_portal_details' 	=> $this->input->post('details'),
			'e_portal_ordering' => $this->input->post('ordering'),
			'e_portal_link' 	=> $this->input->post('e_portal_link'),
			'e_portal_status'	=> $this->input->post('status')
		];
		$qry = $this->Query->update(this_table, ['e_portal_id' => $id], $array);
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
			'e_portal_id' => $id
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
