<?php
class Cpanel extends CI_controller {  
  function __construct(){
    parent::__construct();    
     $this->load->helper('form');
     $this->load->model('CpanelModel');   
   }


   public function index(){
    
    $this->load->view('cpanel',$this->CpanelModel->loadData());
   }

   

}
