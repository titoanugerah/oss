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

	public function eventType()
	{
		$this->load->view('template', $this->master_model->contentEventType());
	}

	public function addEventType()
	{
		$this->load->view('template', $this->master_model->contentAddEventType());
	}

	public function editEventType($id)
	{
		$this->load->view('template', $this->master_model->contentEditEventType($id));
	}

	public function updateEventType($id)
	{
		$this->master_model->updateEventType($id);
	}

	public function deleteEventType($id)
	{
		$this->master_model->deleteEventType($id);
	}

	public function createEventType()
	{
		$this->master_model->createEventType();
	}


}
