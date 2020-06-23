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

	public function addDepartment()
	{
		$this->load->view('template', $this->master_model->contentAddDepartment());
	}

	public function editDepartment($id)
	{
		$this->load->view('template', $this->master_model->contentEditDepartment($id));
	}

	public function updateDepartment($id)
	{
		$this->master_model->updateDepartment($id);
	}

	public function deleteDepartment($id)
	{
		$this->master_model->deleteDepartment($id);
	}

	public function createDepartment()
	{
		$this->master_model->createDepartment();
	}

}
