<?php
class Seguimiento extends CI_Model
{
  public function __construct()
  {
    $this->load->model('User_model');
  }

  public function index()
  { }

  public function consulta($id){
    return $pedidos = json_encode($this->db->query("SELECT e.Estatus , p.Fecha_update FROM Pedido as p 
                                          JOIN Estatus as e ON e.id_estatus = p.status
                                          WHERE p.id_pedido = $id")->result_array());
  }

}
