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

  public function contentAddDepartment()
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
    $data['eventType'] = $this->core_model->getAllData('eventtype');
    $data['viewName'] = 'master/eventType';
    return $data;
  }

  public function contentEditEventType($id)
  {
    $data['eventType'] = $this->core_model->getSingleData('eventtype', 'id', $id);
    $data['viewName'] = 'master/editEventType';
    return $data;
  }

  public function contentAddEventType()
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
    $this->db->update('eventtype', $data);
    redirect(base_url('editEventType/'.$id));
  }

  public function deleteEventType($id)
  {
    $this->core_model->deleteData('eventtype', 'id', $id);
    redirect(base_url('eventType'));
  }

  public function createEventType()
  {
    $data = array(
    'name' => $this->input->post('name'),
    'description' => $this->input->post('description'),
    );
    $this->db->insert('eventtype', $data);
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

  public function contentAddManpower()
  {
    $data['viewName'] = 'master/addManpower';
    $data['role'] = $this->core_model->getAllData('role');
    $data['department'] = $this->core_model->getAllData('department');
    return $data;
  }

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
    redirect(base_url('manpower'.$id));
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

  public function contentAlocation()
  {
    $data['alocation'] = $this->core_model->getAllData('view_alocation');
    $data['viewName'] = 'master/alocation';
    return $data;
  }

  public function contentAddAlocation()
  {
    $data['department'] = $this->core_model->getAllData('department');
    $data['eventType'] = $this->core_model->getAllData('eventtype');
    $data['viewName'] = 'master/addAlocation';
    return $data;
  }

  public function createAlocation()
  {
    if(($this->db->query('select * from view_alocation where department_id = '.$this->input->post('department_id').' and event_type_id = '.$this->input->post('event_type_id')))->num_rows()==1){
      $where = array(
        'department_id' =>$this->input->post('department_id'),
        'event_type_id' =>$this->input->post('event_type_id'),
       );
       $data = array('manpower_needed' => $this->input->post('manpower_needed'));
       $this->db->where($where);
       $this->db->update('alocation',$data);
    } else {
      $data = array(
        'department_id' =>$this->input->post('department_id'),
        'event_type_id' =>$this->input->post('event_type_id'),
        'manpower_needed' => $this->input->post('manpower_needed')
       );
       $this->db->insert('alocation', $data);
    }
    redirect(base_url('alocation'));
  }

  public function contentEditAlocation($id)
  {
    $data['alocation'] = $this->core_model->getSingleData('view_alocation', 'id', $id);
    $data['department'] = $this->core_model->getAllData('department');
    $data['eventType'] = $this->core_model->getAllData('eventtype');
    $data['viewName'] = 'master/editAlocation';
    return $data;
  }

  public function updateAlocation($id)
  {
    $count = ($this->db->query('select * from view_alocation where department_id = '.$this->input->post('department_id').' and event_type_id = '.$this->input->post('event_type_id').' and id != '.$id))->num_rows();
    if($count==1){
      $where = array(
        'department_id' =>$this->input->post('department_id'),
        'event_type_id' =>$this->input->post('event_type_id'),
       );
       $data = array('manpower_needed' => $this->input->post('manpower_needed'));
       $this->db->where($where);
       $this->db->update('alocation',$data);
       $this->core_model->deleteData('alocation', 'id', $id);
    } else {
      $where = array(
        'id' =>$id,
       );
      $data = array(
        'manpower_needed' => $this->input->post('manpower_needed'),
        'department_id' =>$this->input->post('department_id'),
        'event_type_id' =>$this->input->post('event_type_id')

       );
       $this->db->where($where);
       $this->db->update('alocation',$data);
    }
    redirect(base_url('alocation'));
  }

  public function deleteAlocation($id)
  {
    $this->core_model->deleteData('alocation', 'id', $id);
    redirect(base_url('alocation'));
  }


  //event
  public function contentEvent()
  {
    $data['event'] = $this->core_model->getAllData('view_event');
    $data['viewName'] = 'master/event';
    return $data;
  }

  public function contentEditEvent($id)
  {
//    $data['event'] = $this->core_model->getSingleData('view_detail_event', 'id', $id);
    $data['id'] = $id;
    $query = 'select * from view_detail_event where start_id<='.$id.' and end_id>='.$id;
    $data['query'] = $this->db->query($query);
    $data['event'] = $data['query']->row();
    $data['schedule'] = $this->core_model->getAllData('view_event');
    $data['eventType'] = $this->core_model->getAllData('eventtype');
    $data['viewName'] = 'master/editEvent';
      return $data;
  }

  public function contentAddEvent()
  {
    $data['viewName'] = 'master/addEvent';
    $data['event'] = $this->core_model->getAllData('view_event');
    $data['eventType'] = $this->core_model->getAllData('eventtype');
    return $data;
  }

  public function updateEvent($id)
  {
    $input = $this->input->post();
    $current = ($this->db->query('select * from view_detail_event where start_id<='.$id.' and end_id>='.$id))->row();
    if($input['start_id']==$current->start_id && $input['end_id']==$current->end_id){
            
      $data = array(
        'name' => $this->input->post('name'),
        'event_type_id' => $this->input->post('event_type_id'),
        'remark' => $this->input->post('remark')
      );
      $this->db->where(array('update_date' => $current->update_date));
      $this->db->update('event', $data);
    } else {
      $count = $this->db->query(' select * from view_event where id>='.$this->input->post('start_id').' and id<='.$this->input->post('end_id').' and event_type_id is not null');
      if ($count->num_rows()==0) {
        $this->db->query(' update event set name = "", event_type_id = "" , remark ="" where update_date = "'.$current->update_date.'"');
        $this->db->query(' update event set name = "'.$this->input->post('name').'", event_type_id = '.$this->input->post('event_type_id').', remark ="'.$this->input->post('remark').'" where id>='.$this->input->post('start_id').' and id<='.$this->input->post('end_id'));

      } else {
        $this->notify('Gagal','Waktu yang anda pilih sudah dibooking, silahkan pilih waktu yang lain', 'danger', 'fa fa-times', 'event');
      }
    }
    redirect(base_url('event'));
  }

  public function deleteEvent($id)
  {
    $this->core_model->deleteData('event', 'id', $id);
    redirect(base_url('event'));
  }

  public function createEvent()
  {
    $count = $this->db->query(' select * from view_event where id>='.$this->input->post('start_time').' and id<='.$this->input->post('end_time').' and event_type_id = null');
    if ($count->num_rows()==0) {
      $this->db->query(' update event set name = "'.$this->input->post('name').'", event_type_id = '.$this->input->post('event_type_id').', remark ="'.$this->input->post('remark').'" where id>='.$this->input->post('start_time').' and id<='.$this->input->post('end_time'));
      redirect(base_url('event'));
    } else {
      $this->notify('Gagal', 'Booking jadwal gagal dilakukan, sudah ada jadwal yang terbooking','danger', 'fa fa-times','event');
    }
  }

  public function contentSchedule(){
    $data['viewName'] = 'master/schedule';
    //$this->createSchdule();
    return $data;
  }

  public function createSchedule()
  {
    $this->db->trans_begin();
    var_dump($this->createDailySchedule());die;

  }

  public function createDailySchedule()
  {
    #GET DAILY EVENT
    $dailyEvents = $this->core_model->getSomeData('view_alocation', 'is_daily_job', 1);
    #CHECK MANPOWER AVAILABILITY OF DAILY EVENT
    foreach ($dailyEvents as $event) {         
      $isManpowerAvailable = $this->checkManpowerAvailability($event);
      if ($isManpowerAvailable==false) {
        $this->notify('Gagal', 'Jumlah pekerja pada departemen '.$event->department.' tidak mencukupi, silahkan cek kembali ', 'danger', 'fa fa-times', 'schedule');
      } else {
        $this->createEventSchedule($event);
      } 
    }    
    return $isManpowerAvailable; 
  }

  public function checkManpowerAvailability($event)
  {
    $manpowers = $this->core_model->getNumRows('manpower', 'department_id', $event->department_id);
    if ($manpowers >= $event->manpower_needed) {
      return true;
    } else {
      return false;
    }
  }

  public function createEventSchedule($event)
  {
    $manpower = $this->getRandomManpower($event->departmentId);
    //$manhour = $this->core_model->getNumRows('schedule', 'id', $manpower->id);
    $manhour_daily = $this->core_model->getSingleData('view_manhour_daily', 'manpower_id', $manpower->id);
    $manhour_weekly = $this->core_model->getSingleData('view_manhour_weekly', 'manpower_id', $manpower->id);
    $other_manpower = $this->db->query('select * from view_manhour_weekly where manpower_id <> '.$manpower_id.' and  ');
    if($manhour_daily<=8&&$manhour_weekly<=40){
      $schedule = array(
        'event_id' => 1,
        'alocation_id' => $event->id,
        'slot' => 1,
        'manpower_id' => $manpower->id
  
      );  
    }
  }

  public function getRandomManpower($department_id){
    $manpower = $this->core_model->getRandomData('manpower', 'department_id', $department_id, 1);
    return $manpower;
  }

  function notify($title, $message, $type, $icon, $redirect)
  {
    // $ci = &get_instance();
    $this->session->set_flashdata('notify', true);
    $this->session->set_flashdata('title', $title);
    $this->session->set_flashdata('message', $message);
    $this->session->set_flashdata('type', $type);
    $this->session->set_flashdata('icon', $icon);
    if ($redirect!=null) {redirect(base_url($redirect));}
  }



}

?>
