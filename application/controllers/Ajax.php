<?php

class Ajax extends CI_Controller {

    public function __construct () {
        // if($this->session->user ==null)
        //     redirect(base_url('/'));
        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('MaquilaModel');
        $this->load->model('ProveedorModel');
        $this->load->model('PrendaModel');
        $this->load->model('TelaModel');
    }
    public function index(){

    //Custumer
        
    }
    public function updateCustomer() {
        // echo $data;
        $data = array();
        parse_str($_POST['data'], $data);
         $this->CustomerModel->update($data);
     }

    // Maquila

    public function updateMaquila() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->MaquilaModel->update($data);
    }

    // Proveedor

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

    public function getNewProveedor(){
        
        $data = $this->ProveedorModel->getNewProveedor();
        echo ($data);
    }



    //Tipo Prenda

    public function getNewTipoPrenda(){        
        $data = $this->PrendaModel->getNewTipoPrenda();
        echo ($data);
    }

    public function updateWear() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->PrendaModel->update($data);
    }

    public function createTipoPrenda() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->PrendaModel->createAjax($data);
    }


    // Tipo tela

    public function getNewTipoTela(){        
        $data = $this->TelaModel->getNewTipoTela();
        echo ($data);
    }

    public function createTipoTela() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->TelaModel->createAjax($data);
    }

    // Rollo de tela 
    public function updateRollo() { 
        $data = array();
        parse_str($_POST['data'], $data);  
       $this->TelaModel->updateRollo($data);
    }






}