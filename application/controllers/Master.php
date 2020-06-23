<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct()
  {
    parent::__construct();
		$this->load->model('master_model');
  }

	public function department()
	{
		$this->load->view('template', $this->master_model->contentDepartment());
	}



}
