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

  public function login()
  {
    $input = $this->input->post();
    if($this->core_model->getNumRows2('manpower', 'username', $input['username'], 'password', $input['password'])==1){
      $userdata = $this->core_model->getSingleData('view_manpower', 'username', $input['username']);
      $session = array(
        'islogin' => $userdata->id,
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
      redirect(base_url(''));
    }
    else {
      return http_response_code(403);
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url(''));
  }



}
 ?>
