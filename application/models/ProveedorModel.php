<?php
class ProveedorModel extends CI_Model{
	public function __construct(){
    $this->load->model('User_model');

  }
  
  public function index(){

  }

  Public function create($name, $rs, $rfc, $present, $address, $suburb, $state, $city, $cp, $Phone1, $Phone2 ){
      $data = array(   
      'name'=> $name,
      'rs'=>$rs,
      'rfc'=> $rfc,
      'present'=> $present,
      'address' => $address,
      'suburb' => $suburb,
      'state'=> $state,
      'city' => $city,
      'cp' => $cp,
      'Phone1' => $Phone1,
      'Phone2'=> $Phone2,);
      $this->db->insert('Proveedores',$data);
      
   } 
   
   public function createAjax($data){
       $this->db->insert('Proveedores',$data);
   }

   public function loadProveedores(){
    return $customers=json_encode($this->db->query('SELECT * FROM Proveedores WHERE status = 0')->result_array());
   }

   public function getProveedor($id_proveedor){
    return $this->db->query("SELECT * FROM Proveedores WHERE id_proveedor = $id_proveedor ORDER BY id_proveedor DESC")->row();
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
        $this->db->where('id_proveedor', $data['id_proveedor']);
        return $this->db->update('Proveedores');
    }

    public function deleteData($data){
        $send = array();
        $id_proveedor = $data['id_proveedor'];
         var_dump ($data);

        $send = array(
            'status'=> 1
        );
        $this->db->set($send);
        $this->db->where('id_proveedor', $id_proveedor);
        $this->db->update('Proveedores');
    }

    public function getNewProveedor(){
        return $customers=json_encode($this->db->query('SELECT * FROM `Proveedores` WHERE id_proveedor = (SELECT max(id_proveedor) FROM Proveedores)')->result_array());
       }
    

  }
  ?>