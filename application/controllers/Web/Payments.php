



	<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	require_once("application/core/Web_Controller.php");

	define('this_controller', 'Payments');
	define('this_view', 'razorpay/pay');
	define('this_asset', web_url . 'assets/web/');
	define('this_link', 'Payments/');
	define('this_table', 'payments');

	class Payments extends Web_Controller
	{


		public function index()
		{


			$array =
				[
					'payment_status' => 'pending',
					'amount' => $this->input->post('amount')
				];
			$qry = $this->Query->insert(this_table, $array);
			// refer();
			$this->notemplate(this_view, $array);
		}

		public function verify()
		{
			$array =
				[
					'receipt' 	=> $_SESSION['receipt'],
					'order_id' 	=> $_SESSION['razorpay_order_id'],
					'payment_id' => $this->input->post('razorpay_payment_id'),
					'payment_status' => 'verifying'
				];
			$qry = $this->Query->update(this_table, ['id' => $_SESSION['id']], $array);
			$this->notemplate('razorpay/verify', $array);
		}

		public function success(){
			$time = date('Y-m-d H:i:s');
			$array =
				[
					'payment_status' => 'complete',
					'end_time' => $time
				];
			$qry = $this->Query->update(this_table, ['id' => $_SESSION['id']], $array);
			$this->session->set_flashdata('success', 'Payment made successfully.');
			refer('/');
		}
	}

	?>




