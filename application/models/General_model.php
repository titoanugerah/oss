<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class General_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('core_model');
  }

  public function contentProfile()
  {
    $data['viewName'] = 'profile';
    return $data;
  }


  //Function
  public function login()
  {
    $input = $this->input->post();
    if($this->core_model->getNumRows2('manpower', 'username', $input['username'], 'password', $input['password'])==1){
      $userdata = $this->core_model->getSingleData('view_manpower', 'username', $input['username']);
      $this->setUserdata($userdata);
      redirect(base_url(''));
    }
    else {
      notify('Gagal', 'Username atau password anda salah, silahkan periksa kembali', 'danger', 'fa fa-times', 'dashboard');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url(''));
  }

  public function updateProfile()
  {
    $data = array(
      'name' => $this->input->post('name'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'phone' => $this->input->post('phone'),
     );
     $where = array('id' => $this->session->userdata('id'));
     $this->db->where($where);
     $this->db->update('manpower', $data);
     $this->setUserdata($this->core_model->getSingleData('view_manpower', 'id', $this->session->userdata('id')));
     redirect(base_url('profile'));
  }

  public function setUserdata($userdata)
  {
    $session = array(
      'islogin' => true,
      'id' => $userdata->id,
      'username' => $userdata->username,
      'password' => $userdata->password,
      'name' => $userdata->name,
      'phone' => $userdata->phone,
      'role_id' => $userdata->role_id,
      'role' => $userdata->role,
      'department_id' => $userdata->department_id,
      'department' => $userdata->department
     );
    $this->session->set_userdata($session);
    //return json_encode($session);
  }


}
 ?>
