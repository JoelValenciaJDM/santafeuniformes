<?php
class PrendaModel extends CI_Model{
	public function __construct(){
    $this->load->model('User_model');

  }
  
  public function index(){

  }

  Public function create($name, $gener, $id_proveedor, $id_tipo_prenda){
      $data = array(   
      'name'=> $name,
      'gener'=>$gener,
      'id_proveedor'=> $id_proveedor,
      'id_tipos_prenda'=> $id_tipo_prenda);
      $this->db->insert('Prendas',$data);
      
   }  
   public function createAjax($data){
    $this->db->insert('Tipos_prendas',$data);
}

   public function loadPrendas(){
    return $customers=json_encode($this->db->query('SELECT Prendas.id_prenda, Prendas.name as prenda_name, Prendas.gener, Proveedores.name as proveedor_name, Tipos_prendas.name as tipoprenda_name
                                                        FROM `Prendas` 
                                                            JOIN Proveedores on Proveedores.id_proveedor= Prendas.id_proveedor 
                                                                JOIN Tipos_prendas ON Prendas.id_tipos_prenda = Tipos_prendas.id_tipo_prenda
                                                                    WHERE Prendas.status = 0
                                                                        GROUP BY Prendas.id_prenda
                                                    ')->result_array());
   }

   public function loadTipoPrenda(){
    return $customers=json_encode($this->db->query('SELECT * FROM Tipos_prendas')->result_array());
   }

   public function loadProveedores(){
    return $customers=json_encode($this->db->query('SELECT * FROM Proveedores WHERE status = 0')->result_array());
   }

   public function getWear($id_prenda){
    return $this->db->query("SELECT Prendas.id_prenda, Prendas.name as prenda_name, Prendas.gener, Prendas.id_proveedor, Proveedores.name as proveedor_name, rs, rfc, present, address, suburb, state, city, cp, Phone1, Phone2, Tipos_prendas.name as tipoprenda_name, Prendas.id_tipos_prenda
                                FROM `Prendas` 
                                    JOIN Proveedores on Proveedores.id_proveedor= Prendas.id_proveedor 
                                        JOIN Tipos_prendas ON Prendas.id_tipos_prenda = Tipos_prendas.id_tipo_prenda
                                            WHERE Prendas.id_prenda = $id_prenda")->row();
    }

    public function search($search,$start = FALSE, $registers = FALSE){
		$this->db->like("nombres",$search);
		if ($start !== FALSE && $registers !== FALSE) {
			$this->db->limit($registers,$start);
		}
		$query = $this->db->get("Clientes");
		return $query->result();
    }
    
    public function getPagination($limit,$offset){
        $sql = $this->db->get('Clientes, $limit, $offset');
        return $sql->reset();
    }

    public function update($data){
        $this->db->set($data);
        $this->db->where('id_prenda', $data['id_prenda']);
        return $this->db->update('Wears');
    }

    public function deleteData($data){
        $send = array();
        $id_prenda = $data['id_prenda'];
         var_dump ($data);

        $send = array(
            'status'=> 1
        );
        $this->db->set($send);
        $this->db->where('id_prenda', $id_prenda);
        $this->db->update('Prendas');
    }
    
    public function getNewTipoPrenda(){
        return $customers=json_encode($this->db->query('SELECT * FROM `Tipos_prendas` WHERE id_tipo_prenda = (SELECT max(id_tipo_prenda) FROM Tipos_prendas)')->result_array());
       }
    

  }
  ?>