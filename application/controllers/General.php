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
		$data['viewName'] = 'beranda';
		$day = date('N');
		// $query = $this->db->query("Select * from view_dashboard_1 where day_id = $day");
		$query = $this->db->query("select id, name, min(day) as startday, max(day) endday, min(start) starttime, max(end) as endtime, isfinish, remark from view_dashboard_1 group by Name  ");
		$data['event'] = $query->result();
		$query = $this->db->query("select id, name, min(day) as startday, max(day) endday, min(start) starttime, max(end) as endtime, isfinish, remark from view_dashboard_1 where day_id = $day group by Name  ");
		$data['event1'] = $query->result();
		$query = $this->db->query("select * from view_schedule ");
		$data['schedule'] = $query->result();	
		$data['history'] = ($this->db->query('select * from view_history where month(date) = month(now())'))->result();
		$this->load->view('template', $data);
	}

	public function profile()
	{
		$this->load->view('template', $this->general_model->contentProfile());
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

	public function errorlogin()
	{
		$this->load->view('errors/402');
	}


	public function unauthorized()
	{
		$this->load->view('errors/401');
	}

	public function updateProfile()
	{
		$this->general_model->updateProfile();
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
