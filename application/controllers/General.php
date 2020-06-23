<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
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

}
