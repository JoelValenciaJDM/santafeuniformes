<?php

class Ajaxseguimiento extends CI_Controller
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
    $this->load->model('AMModel');
    $this->load->model('Seguimiento');
  }
  public function index()
  {
  }

  public function consulta()
  {
    echo $seg = $this->Seguimiento->consulta($_POST['id_pedido']);
  }
}
