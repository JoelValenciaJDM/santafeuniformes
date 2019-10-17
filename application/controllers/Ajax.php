<?php

class Ajax extends CI_Controller {

    public function __construct () {
        // if($this->session->user ==null)
        //     redirect(base_url('/'));
        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('MaquilaModel');
        $this->load->model('ProveedorModel');
    }
    public function index(){
        
    }
    public function updateCustomer() {
        // echo $data;
        $data = array();
        parse_str($_POST['data'], $data);
         $this->CustomerModel->update($data);
     }

    public function updateMaquila() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->MaquilaModel->update($data);
    }

    public function createProveedor() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->ProveedorModel->createAjax($data);
    }

    public function updateProveedor() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->ProveedorModel->update($data);
    }



}