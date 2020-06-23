<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	function __construct()
  {
    parent::__construct();
		$this->load->model('general_model');
  }

	public function index()
	{
		$data['viewName'] = 'blank';
		$this->load->view('template', $data);
	}

	public function template()
	{
		$data['viewName'] = 'blank';
		$this->load->view('template', $data);
	}

	public function error()
	{
		$this->load->view('errors/404');
	}

	public function login()
	{
		echo $this->general_model->login();
	}

	public function logout()
	{
		echo $this->general_model->logout();
	}

}
