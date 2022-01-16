<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Feedback');
define('this_view', 'auth/feedback/feedback');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Feedback/');
define('this_table', 'feedback');

class Feedback extends Admin_Controller {

	public function index()
	{
		$data['feedback_view']=$this->Query->select('',this_table);
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

		$array = 
		[ 
			'page_name' => $this->input->post('name'),
			'page_heading' => $this->input->post('heading'),
			'page_content_1' => $this->input->post('content_1'),
			'page_content_2' => $this->input->post('content_2'),
			'page_content_3' => $this->input->post('content_3'),
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
		$data['value']=$this->Query->select('',this_table,['page_id'=>$id],'row');
		$this->notemplate(this_view.'_edit',$data);
	}

	public function update($id)
	{

		$array = 
		[ 
			'page_name' => $this->input->post('name'),
			'page_heading' => $this->input->post('heading'),
			'page_content_1' => $this->input->post('content_1'),
			'page_content_2' => $this->input->post('content_2'),
			'page_content_3' => $this->input->post('content_3'),
			'page_status' => $this->input->post('status')
		];
		$qry = $this->Query->update(this_table, ['page_id' => $id], $array);
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
