<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('core_model');
  }

  public function contentDepartment()
  {
    $data['department'] = $this->core_model->getAllData('department');
    $data['viewName'] = 'master/department';
    return $data;
  }

  public function contentEditDepartment($id)
  {
    $data['department'] = $this->core_model->getSingleData('department', 'id', $id);
    $data['viewName'] = 'master/editDepartment';
    return $data;
  }

  public function ContentaddDepartment()
  {
    $data['viewName'] = 'master/addDepartment';
    return $data;
  }

  public function updateDepartment($id)
  {
    $data = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
    );
    $this->db->where($where = array('id' => $id ));
    $this->db->update('department', $data);
    redirect(base_url('editDepartment/'.$id));
  }

  public function deleteDepartment($id)
  {
    $this->core_model->deleteData('department', 'id', $id);
    redirect(base_url('department'));
  }

  public function createDepartment()
  {
    $data = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
    );
    $this->db->insert('department', $data);
    redirect(base_url('department'));
  }


  //EventType
  public function contentEventType()
  {
    $data['eventType'] = $this->core_model->getAllData('eventType');
    $data['viewName'] = 'master/eventType';
    return $data;
  }

  public function contentEditEventType($id)
  {
    $data['eventType'] = $this->core_model->getSingleData('eventType', 'id', $id);
    $data['viewName'] = 'master/editEventType';
    return $data;
  }

  public function ContentaddEventType()
  {
    $data['viewName'] = 'master/addEventType';
    return $data;
  }

  public function updateEventType($id)
  {
    $data = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
    );
    $this->db->where($where = array('id' => $id ));
    $this->db->update('eventType', $data);
    redirect(base_url('editEventType/'.$id));
  }

  public function deleteEventType($id)
  {
    $this->core_model->deleteData('eventType', 'id', $id);
    redirect(base_url('eventType'));
  }

  public function createEventType()
  {
    $data = array(
      'name' => $this->input->post('name'),
      'description' => $this->input->post('description'),
    );
    $this->db->insert('eventType', $data);
    redirect(base_url('eventType'));
  }


    //Manpower
    public function contentManpower()
    {
      $data['manpower'] = $this->core_model->getAllData('view_manpower');
      $data['viewName'] = 'master/manpower';
      return $data;
    }

    public function contentEditManpower($id)
    {
      $data['manpower'] = $this->core_model->getSingleData('view_manpower', 'id', $id);
      $data['role'] = $this->core_model->getAllData('role');
      $data['department'] = $this->core_model->getAllData('department');
      $data['viewName'] = 'master/editManpower';
      return $data;
    }

    public function ContentaddManpower()
    {
      $data['viewName'] = 'master/addManpower';
      $data['role'] = $this->core_model->getAllData('role');
      $data['department'] = $this->core_model->getAllData('department');
      return $data;
    }
    //NG
    public function updateManpower($id)
    {
      $data = array(
        'name' => $this->input->post('name'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'phone' => $this->input->post('phone'),
        'role_id' => $this->input->post('role_id'),
        'department_id' => $this->input->post('department_id')
       );
      $this->db->where($where = array('id' => $id ));
      $this->db->update('manpower', $data);
      redirect(base_url('editManpower/'.$id));
    }

    public function deleteManpower($id)
    {
      $this->core_model->deleteData('manpower', 'id', $id);
      redirect(base_url('manpower'));
    }

    public function createManpower()
    {
      $data = array(
        'name' => $this->input->post('name'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'phone' => $this->input->post('phone'),
        'role_id' => $this->input->post('role_id'),
        'department_id' => $this->input->post('department_id')
       );
      $this->db->insert('manpower', $data);
      redirect(base_url('manpower'));
    }

}

 ?>
