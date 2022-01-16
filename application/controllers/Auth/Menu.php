<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Menu');
define('this_view', 'auth/menu/menu');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Menu/');
define('this_table', 'menu');

class Menu extends Admin_Controller {

	public function index()
	{
		$data['menu_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['menu_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function add()
	{
		$data['menu_views']=$this->Query->select('',this_table);
		$this->template(this_view.'_add',$data);
	}

	public function insert()
	{
		$id = $this->input->post('main_menu_id');
		$data = $this->Query->select('', this_table, ['menu_id' => $id], 'row');
		
		$array = 
		[ 
			'menu_name' => $this->input->post('name'),
			'sub_menu_of' => $data->menu_name ?? "",
			'menu_type' => $this->input->post('menu_type'),
			'menu_main_menu_id' => $this->input->post('main_menu_id'),
			//'menu_show_in' => $this->input->post('show_in'),
			'menu_status' => $this->input->post('status'),
			'menu_link' => $this->input->post('menu_link'),
			'menu_ordering' => $this->input->post('ordering')
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
		$data['value']=$this->Query->select('',this_table,['menu_id'=>$id],'row');
		$this->notemplate(this_view.'_edit',$data);
	}

	public function update($id)
	{
		$array = 
		[ 
			'menu_name' => $this->input->post('name'),
			//'menu_show_in' => $this->input->post('show_in'),
			'menu_status' => $this->input->post('status'),
			'menu_link' => $this->input->post('menu_link'),
			'menu_ordering' => $this->input->post('ordering')
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
