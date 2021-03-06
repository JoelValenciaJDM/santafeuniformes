<?php
class AMModel extends CI_Model
{
  public function __construct()
  {
    $this->load->model('User_model');
  }

  public function index()
  { }

  public function getCorte()
  {
    return $cortes = json_encode($this->db->query('SELECT cpp. id_corte_prenda_pedido, c.id_corte, c.Fecha_corte, p.Fecha_tentativa_entrega, pren.name as prenda_name, tp.name as prenda, tt.Nombre as tela, col.name as color, tc.name as tono, tal.Nombre as talla, cantidad 
                                                        FROM Corte_prenda_pedido AS cpp
                                                            JOIN Corte AS c ON cpp.id_corte = c.id_corte
                                                                JOIN Prendas_pedido_tallas AS ppt ON ppt.id_pedido_tallas = cpp.id_prenda_pedido
                                                                    JOIN Prendas_pedido AS pp ON pp.id_prenda_pedido = ppt.id_prenda_pedido
                                                                        JOIN Pedido as p ON p.id_pedido = pp.id_pedido
                                                                            JOIN Prendas as pren ON pren.id_prenda = pp.id_prenda
                                                                                JOIN Tipos_prendas as tp ON tp.id_tipo_prenda = pren.id_tipos_prenda
                                                                                    JOIN colors as col ON col.id_color = pp.color
                                                                                        JOIN Tela_colors as tc ON tc.id_tono = pp.colortela
                                                                                            JOIN Tipo_telas as tt ON tt.id_tela = pp.id_tela
                                                                                                JOIN Tallas as tal ON tal.id_talla = ppt.id_talla
                                                                                                    WHERE c.status = 1 and cpp.status = 0
                                                    ')->result_array());
  }
  public function getMaquilas()
  {
    return $maquilas = json_encode($this->db->query("SELECT m.id_maquila, m.apodo FROM Maquilas as m WHERE m.status = 0")->result_array());
  }

  public function insertMC($data)
  {
    $this->db->insert('Maquila_corte', $data);
  }
  public function updateDelete($delete)
  {
    $this->db->set($delete);
    $this->db->where('id_corte_prenda_pedido', $delete['id_corte_prenda_pedido']);
    return $this->db->update('Corte_prenda_pedido');
  }
  public function update_pedido_status_corte($id_corte)
  {
    return $customers = $this->db->query(
      "SELECT pp.id_pedido, Corte.status FROM Corte_prenda_pedido as cpp
                                                       JOIN Corte ON cpp.id_corte = Corte.id_corte 
                                                       JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                       JOIN Prendas_pedido as pp ON pp.id_prenda_pedido =  ppt.id_prenda_pedido
                                                       WHERE pp.id_pedido = (SELECT pp.id_pedido FROM Corte_prenda_pedido as cpp
                                                       JOIN Corte ON cpp.id_corte = Corte.id_corte 
                                                       JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                       JOIN Prendas_pedido as pp ON pp.id_prenda_pedido =  ppt.id_prenda_pedido
                                                       WHERE Corte.id_corte = $id_corte                      
                                                       GROUP BY pp.id_pedido)"
    )->row();
  }

  public function getMaquilaEntrega()
  {
    return $data = json_encode($this->db->query("SELECT mc.id_maquila_corte, mc.id_corte_prenda_pedido, mc.id_maquila, mc.Cantidad, mc.Entregas, mc.Fecha_envio, mc.Fecha_tentativa_regreso, mc.Fecha_enrtrega, mc.Fecha_actualizacion_entrega, m.apodo 
                                            FROM Maquila_corte as mc
                                            JOIN Maquilas as m ON m.id_maquila = mc.id_maquila
                                            WHERE mc.status = 0"
                                            )->result_array());
  }
  public function MaquilaCorteUpdate($data)
  {
    $this->db->set($data);
    $this->db->where('id_maquila_corte', $data['id_maquila_corte']);
    return $this->db->update('Maquila_corte');
  }
  public function pagosMaquila(){
    return $data = json_encode($this->db->query("SELECT mc.id_maquila_corte, mc.id_maquila, m.apodo, p.id_prenda, p.name, tp.precio_tipo, mc.Cantidad
                                                  FROM Maquila_corte as mc
                                                    JOIN Corte_prenda_pedido as cpp ON cpp.id_corte_prenda_pedido = mc.id_corte_prenda_pedido
                                                      JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                        JOIN Prendas_pedido as pp ON pp.id_prenda_pedido = ppt.id_prenda_pedido
                                                          JOIN Prendas as p ON p.id_prenda = pp.id_prenda
                                                            JOIN Tipos_prendas as tp ON tp.id_tipo_prenda = p.id_tipos_prenda
                                                              JOIN Maquilas as m ON mc.id_maquila = m.id_maquila
                                                                WHERE payed = 0"
                                                                )->result_array());
  }

  public function insertMaquilaPay($data)
  {
    $this->db->insert('maquila_pay', $data);
  }
  public function getlastId()
  {
      return $maxid = $this->db->query("SELECT max(id_pago) as maxid FROM maquila_pay")->row();
  }

  public function insertMaquilaPayDet($data)
  {
    $this->db->insert('pay_detalle', $data);
  }
  public function updatePagoMaquila($data)
  {
    $this->db->set($data);
    $this->db->where('id_maquila_corte', $data['id_maquila_corte']);
    return $this->db->update('Maquila_corte');
  }
  public function fallos(){
    return $fallos = json_encode($this->db->query("SELECT mc.id_maquila_corte, cpp.id_corte_prenda_pedido,  m.apodo, mc.id_maquila_corte, mc.Cantidad, mc.Fecha_enrtrega, p.name 
                                        FROM Maquila_corte as mc
                                          JOIN Maquilas as m ON m.id_maquila = mc.id_maquila
                                            JOIN Corte_prenda_pedido as cpp ON cpp.id_corte_prenda_pedido = mc.id_corte_prenda_pedido
                                              JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                JOIN Prendas_pedido as pp ON pp.id_prenda_pedido = ppt.id_prenda_pedido
                                                  JOIN Prendas as p ON p.id_prenda = pp.id_prenda 
                                                    WHERE mc.payed = 1")->result_array()); 
  }

  public function getidPedido($id_cpp){
    return $pedido = $this->db->query("SELECT pp.id_pedido, mc.id_maquila_corte
                                        FROM Maquila_corte as mc
                                          JOIN  Corte_prenda_pedido as cpp ON mc.id_corte_prenda_pedido = cpp.id_corte_prenda_pedido
                                            JOIN Maquilas as m ON m.id_maquila = mc.id_maquila
                                              JOIN Corte ON cpp.id_corte = Corte.id_corte 
                                                JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                  JOIN Prendas_pedido as pp ON pp.id_prenda_pedido =  ppt.id_prenda_pedido
                                                    WHERE mc.id_maquila_corte = $id_cpp");
  }
  public function createMaquilaRevision($data){
    $this->db->insert('maquila_revision', $data);
  } 

  public function getArreglos()
  {
    return $arreglos = json_encode($this->db->query("SELECT * FROM maquila_revision as mr
                                                      JOIN Maquila_corte as mc ON mr.id_maquila_corte = mc.id_maquila_corte
                                                        JOIN Maquilas as m ON m.id_maquila = mc.id_maquila
                                                          where mr.status = 0")->result_array());
  }

  public function updateMaquilaRevision($data)
  {
    $this->db->set($data);
    $this->db->where('id_maquila_corte', $data['id_maquila_corte']);
    return $this->db->update('maquila_revision');
  }
}
