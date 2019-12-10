<?php

class AjaxCorte extends CI_Controller
{

    public function __construct()
    {
        // if($this->session->user ==null)
        //     redirect(base_url('/'));
        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('MaquilaModel');
        $this->load->model('ProveedorModel');
        $this->load->model('PrendaModel');
        $this->load->model('TelaModel');
        $this->load->model('PedidoModel');
        $this->load->model('CorteModel');
        $this->load->model('AsignacionMaquilasModel');
    }
    public function index()
    {

        //Custumer

    }


   
}
