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
		if($this->session->userdata('role_id')==1)
		{
			$this->load->view('template', $this->master_model->contentDepartment());
		} else {
			redirect(base_url('unauthorized'));
		}
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
		if($this->session->userdata('role_id')==1)
		{
			$this->load->view('template', $this->master_model->contentEventType());
		} else {
			redirect(base_url('unauthorized'));
		}
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
		if($this->session->userdata('role_id')==1)
		{
			$this->load->view('template', $this->master_model->contentManpower());
		} else {
			redirect(base_url('unauthorized'));
		}

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

	//alocation
	public function alocation()
	{
		if($this->session->userdata('role_id')==1)
		{
			$this->load->view('template', $this->master_model->contentAlocation());
		} else {
			redirect(base_url('unauthorized'));
		}
	}

	public function addAlocation()
	{
		$this->load->view('template', $this->master_model->contentAddAlocation());
	}

	public function createAlocation()
	{
		$this->load->view('template', $this->master_model->createAlocation());
	}

	public function editAlocation($id)
	{
		$this->load->view('template', $this->master_model->contentEditAlocation($id));
	}

	public function updateAlocation($id)
	{
		$this->master_model->updateAlocation($id);
	}

	public function deleteAlocation($id)
	{
		$this->master_model->deleteAlocation($id);
	}

	//event
	public function event()
	{
		if($this->session->userdata('role_id')==1 || $this->session->userdata('role_id')==2)
		{
			$this->load->view('template', $this->master_model->contentEvent());
		} else {
			redirect(base_url('unauthorized'));
		}
	}

	public function addEvent()
	{
		$this->load->view('template', $this->master_model->contentAddEvent());
	}

	public function createEvent()
	{
		$this->load->view('template', $this->master_model->createEvent());
	}

	public function editEvent($id)
	{
		$this->load->view('template', $this->master_model->contentEditEvent($id));
	}

	public function updateEvent($id)
	{
		$this->master_model->updateEvent($id);
	}

	public function finishEvent($id)
	{
		$this->master_model->finishEvent($id);
	}


	public function deleteEvent($id)
	{
		$this->master_model->deleteEvent($id);
	}


	public function resetEvent()
	{
		$this->master_model->resetEvent();
	}

	//history
	public function history()
	{
		if($this->session->userdata('role_id')==1 || $this->session->userdata('role_id')==2)
		{
			$this->load->view('template', $this->master_model->contentHistory());
		} else {
			redirect(base_url('unauthorized'));
		}
	}

	public function addHistory()
	{
		$this->load->view('template', $this->master_model->contentAddHistory());
	}

	public function createHistory()
	{
		 $this->master_model->createHistory();
	}

	public function editHistory($id)
	{
		$this->load->view('template', $this->master_model->contentEditHistory($id));
	}

	public function updateHistory($id)
	{
		$this->master_model->updateHistory($id);
	}

	public function finishHistory($id)
	{
		$this->master_model->finishHistory($id);
	}


	public function deleteHistory($id)
	{
		$this->master_model->deleteHistory($id);
	}


	public function resetHistory()
	{
		$this->master_model->resetHistory();
	}


	#schedule
	public function schedule(){
		$this->load->view('template', $this->master_model->contentSchedule());
	}

	public function createSchedule()
	{
		if($this->session->userdata('role_id')==1 || $this->session->userdata('role_id')==2)
		{
			$this->master_model->createSchedule();
		} else {
			redirect(base_url('unauthorized'));
		}

	}

}
