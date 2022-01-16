<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Services');
define('this_view', 'auth/services/services');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Services/');
define('this_table', 'services');

class Services extends Admin_Controller {

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
			$image_1 = image_validation('services', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'service_name' => $this->input->post('name'),
			'service_heading' => $this->input->post('heading'),
			'service_image_1' => $image_1,
			'service_details' => $this->input->post('details'),
			'service_ordering' => $this->input->post('ordering'),
			'service_link' => $this->input->post('service_link'),
			'service_status' => $this->input->post('status')
		];
		$id = $this->Query->insert(this_table, $array, TRUE);
		if($id > 0)
		{
			$slug = $this->slugify($this->input->post('name'));
			$check_slug = $this->Query->select('*', 'com_route', ['com_route_new_link' => $slug], 'count');
			if($check_slug > 0)
			{
				$slug = $slug.'-'.rand(111,999);
			}

			$array =
			[
				'com_route_type' 			=> 'Internal',
				'com_route_old_link' 		=> 'Services/service/'.$id,
				'com_route_new_link' 		=> $slug,
				'com_route_external_link'	=> '',
				'com_route_category' 		=> 'Services',
				'com_route_meta_title' 		=> $this->input->post('name'),
				'com_route_meta_key'	 	=> $this->input->post('name'),
				'com_route_meta_tag'	 	=> $this->input->post('name'),
				'com_route_meta_description'=> $this->input->post('name')
			];
			$route_id = $this->Query->insert('com_route', $array, TRUE);
			$array = ['com_route_id' => $route_id];
			$this->Query->update(this_table, ['service_id' => $id], $array);
			set_msg(this_controller.' Added Successfully', 'S');
		} 
		else 
		{
			set_msg('Error Occured. Try Again!!', 'E');
		}
		refer();
	}

	public function edit($id)
	{
		$data['value']=$this->Query->select('',this_table,['service_id'=>$id],'row');
		$this->notemplate(this_view.'_edit',$data);
	}

	public function update($id)
	{
		$image_1 =$_POST['image_old_1'];
        if ($_FILES['image_1']['name']!="") {
            $image_1 = image_validation('services', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

		$array = 
		[ 
			'service_name' => $this->input->post('name'),
			'service_heading' => $this->input->post('heading'),
			'service_image_1' => $image_1,
			'service_details' => $this->input->post('details'),
			'service_ordering' => $this->input->post('ordering'),
			'service_link' => $this->input->post('service_link'),
			'service_status' => $this->input->post('status')
		];
		$qry = $this->Query->update(this_table, ['service_id' => $id], $array);
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
			'service_id' => $id
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
