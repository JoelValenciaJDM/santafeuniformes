<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AsignacionMaquila extends CI_Controller
{
  function __construct(){
    parent::__construct(); 
      $this->load->library('Session');
      $this->load->model('CpanelModel');
      $this->load->model('AMModel');
      if($this->session->user ==null)
      redirect(base_url('/'));    
   }
  
  public function index()
  { }

  public function asignacionlist()
  {

    $data['Cortes'] = json_decode($this->AMModel->getCorte());
    $data['Maquilas']= json_decode($this->AMModel->getMaquilas());
    // echo ($this->TelaModel->loadTelas());
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/AsignacionMaquilas/AsignacionList', $data);
  }
}

/* End of file AsignacionMaquila.php */
