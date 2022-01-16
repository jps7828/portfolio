<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/Admin_Controller.php");

define('this_controller', 'Home_Admin');
define('this_view', 'auth/home_admin/home_admin');
define('this_asset', web_url . 'assets/admin/');
define('this_link', 'Auth/Home_Admin/');
define('this_table', 'com_basic_details');

class Home_Admin extends Admin_Controller {

	public function index()
	{
		$data['basic_details']=$this->Query->select('',this_table,'','row');
		$this->template(this_view,$data);
	}

	public function search()
	{
		$data['page_view']=$this->Query->select('',this_table);
		$this->template(this_view,$data);
	}

	public function add()
	{
		$data='';
		$this->template(this_view.'_add',$data);
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
			$image_1 = image_validation('logo', 'image_1');
			if(is_array($image_1) === true) 
			{
				foreach($image_1 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $image_2 =$_POST['image_old_2'];
        if ($_FILES['image_2']['name']!="") {
			$image_2 = image_validation('logo', 'image_2');
			if(is_array($image_2) === true) 
			{
				foreach($image_2 as $error){set_msg($error, 'E');}
				refer();
			}
        }

        $image_3 =$_POST['image_old_3'];
        if ($_FILES['image_3']['name']!="") {
            $image_3 = $this->file_upload('logo', 'image_3');
			$image_3 = image_validation('logo', 'image_3');
			if(is_array($image_3) === true) 
			{
				foreach($image_3 as $error){set_msg($error, 'E');}
				refer();
			}
        }


		$array = 
		[ 
			'com_basic_site_name' 			=> $this->input->post('name'),
			'com_basic_logo' 				=> $image_1,
			'com_basic_logo_other' 			=> $image_2,
			'com_basic_favicon' 			=> $image_3,
			'com_basic_meta_title' 			=> $this->input->post('meta_title'),
			'com_basic_meta_key' 			=> $this->input->post('meta_key'),
			'com_basic_meta_description	' 	=> $this->input->post('meta_description'),
			'com_basic_email' 				=> $this->input->post('email'),
			'com_basic_email_alt' 			=> $this->input->post('email_alt'),
			'com_basic_contact' 			=> $this->input->post('contact'),
			'com_basic_contact_alt' 		=> $this->input->post('contact_alt'),
			'com_basic_address' 			=> $this->input->post('address'),
			'com_basic_address_alt' 		=> $this->input->post('address_alt'),
			'com_basic_location' 			=> $this->input->post('location'),
			'com_basic_map' 				=> $this->input->post('map'),
			'com_basic_about_us' 			=> $this->input->post('about_us'),
			'com_basic_rating' 				=> $this->input->post('rating'),
			'com_basic_video' 				=> $this->input->post('video'),
			'com_basic_aim' 				=> $this->input->post('aim')
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
