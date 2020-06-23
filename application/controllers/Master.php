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

	//eventType

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

	//manpower
	public function manpower()
	{
		$this->load->view('template', $this->master_model->contentManpower());
	}

	public function addManpower()
	{
		$this->load->view('template', $this->master_model->contentAddManpower());
	}

	public function editManpower($id)
	{
		$this->load->view('template', $this->master_model->contentEditManpower($id));
	}

	public function updateManpower($id)
	{
		$this->master_model->updateManpower($id);
	}

	public function deleteManpower($id)
	{
		$this->master_model->deleteManpower($id);
	}

	public function createManpower()
	{
		$this->master_model->createManpower();
	}



}
