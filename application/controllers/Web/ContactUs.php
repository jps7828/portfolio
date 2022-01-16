<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once("application/core/Web_Controller.php");

define('this_controller', 'ContactUs');
define('this_view', 'web/contact_us');
define('this_asset', web_url . 'assets/web/');
define('this_link', 'ContactUs/');
define('this_table', 'contact_us');

class ContactUs extends Web_Controller
{

	public function index()
	{
		$data['bg']	= $this->Query->select('', 'background', ['background_name' => this_table], 'row');
		$data['value'] = $this->Query->select('', this_table, '', 'row');
		$this->template(this_view, $data);
	}


	public function subscription()
	{
		$array = ["subscription_email" => $this->input->post("email")];

		$qry = $this->Query->insert('subscription', $array);
		refer();
	}


	public function insert()
	{
		// $errors = "";

		$array =
			[
				'feedback_name' 	=> $this->input->post('name'),
				'feedback_phone' 	=> $this->input->post('mobile'),
				'feedback_email' 	=> $this->input->post('email'),
				'feedback_subject' 	=> $this->input->post('subject'),
				'feedback' 			=> $this->input->post('message')
			];

		$errorMSG = "";


		if (is_blank($array['feedback_name'])) {
			$errorMSG = "<li>Name is required</<li>";
		} elseif (!has_length($array['feedback_name'], array('min' => 2, 'max' => 255))) {
			$errorMSG = "<li>Name must be between 2 and 255 characters.</<li>";
		}

		if (is_blank($array['feedback_phone'])) {
			$errorMSG .= "<li>Mobile number is required</<li>";
		} elseif (!has_length($array['feedback_phone'], array('min' => 10, 'max' => 10))) {
			$errorMSG .= "<li>Mobile number must be exactly 10 characters.</<li>";
		}

		if (is_blank($array['feedback_email'])) {
			$errorMSG .= "<li>Email is required</<li>";
		} elseif (!has_length($array['feedback_email'], array('max' => 255))) {
			$errorMSG .= "<li>Email name must be less than 255 characters.</<li>";
		} elseif (!has_valid_email_format($array['feedback_email'])) {
			$errorMSG .= "<li>Email must be a valid format.</<li>";
		}

		if (is_blank($array['feedback_subject'])) {
			$errorMSG .= "<li>Subject is required</<li>";
		} elseif (!has_length($array['feedback_subject'], array('min' => 2, 'max' => 255))) {
			$errorMSG .= "<li>Subject must be between 2 and 255 characters.</<li>";
		}

		if (is_blank($array['feedback'])) {
			$errorMSG .= "<li>Message is required</<li>";
		} elseif (!has_length($array['feedback'], array('min' => 8, 'max' => 255))) {
			$errorMSG .= "<li>Message must be between 8 and 255 characters.</<li>";
		}


		if (empty($errorMSG)) {
			$qry = $this->Query->insert('feedback', $array);
			echo json_encode(['code' => 200, 'msg' => 'successful']);
			exit;
		} else {
			echo json_encode(['code' => 404, 'msg' => $errorMSG]);
		}
	}
}
