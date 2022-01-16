<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Social_Network');
define('this_view', 'auth/social_network/social_network');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Social_Network/');
define('this_table', 'social_network');

class Social_Network extends Admin_Controller {

	public function index()
	{
		$data['social_network_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['slider_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function add()
	{
		$data='';
		$this->template(this_view.'_add',$data);
	}

	public function insert()
	{

		$array = 
		[ 
			'social_network_name' => $this->input->post('name'),
			'social_network_icon' => $this->input->post('icon'),
			'social_network_link' => $this->input->post('link'),
			'social_network_status' => $this->input->post('status')
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
		
		$array = 
		[ 
			'social_network_name' => $this->input->post('name'),
			'social_network_icon' => $this->input->post('icon'),
			'social_network_link' => $this->input->post('link'),
			'social_network_status' => $this->input->post('status')
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
