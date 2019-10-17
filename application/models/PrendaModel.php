<?php
class PrendaModel extends CI_Model{
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
      $this->db->insert('Wears',$data);
      
   }  

   public function loadProveedores(){
    return $customers=json_encode($this->db->query('SELECT * FROM Proveedores WHERE status = 0')->result_array());
   }

   public function loadTipoPrenda(){
    return $customers=json_encode($this->db->query('SELECT * FROM Tipos_prendas')->result_array());
   }

   public function loadWears(){
    return $customers=json_encode($this->db->query('SELECT * FROM Wears WHERE status = 0')->result_array());
   }

   public function getProveedor($id_prenda){
    return $this->db->query("SELECT * FROM Wears WHERE id_prenda = $id_prenda ORDER BY id_prenda DESC")->row();
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
        $this->db->update('Wears');
    }

  }
  ?>