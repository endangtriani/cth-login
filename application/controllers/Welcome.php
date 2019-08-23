<?php


class Welcome extends CI_Controller {


	function __construct()
  {
    parent::__construct();
    $this->load->model('model_welcome');
    $this->load->library('form_validation');
  }

	function index()
	{
		// code...
		$this->load->view('welcome_message');
	}

}
