<?php
require_once("application/core/Web_Controller.php");

class Form extends Web_Controller {

	public function index()
	{
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('web/header') ;
            $this->load->view('web/index') ;
            $this->load->view('web/footer') ;
        }
        else
        {
            $this->load->view('formsuccess');
        }

		
	}


	
}
