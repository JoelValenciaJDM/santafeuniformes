<?php
class MaquilaModel extends CI_Model{
	public function __construct(){
    $this->load->model('User_model');

  }
  
  public function index(){

  }

  Public function create($apodo, $name, $lastname, $second_lastname, $address, $Suburb, $lat, $lng, $celphone, $phone, $cp ){
      $data = array(   
      'apodo'=> $apodo,    
      'name'=> $name,
      'lastname'=>$lastname,
      'second_lastname'=> $second_lastname,
      'address'=> $address,
      'Suburb'=> $Suburb,
      'lat' => $lat,
      'lng' => $lng,
      'celphone' => $celphone,
      'phone'=> $phone,
      'cp' => $cp);
      $this->db->insert('Maquilas',$data);
      
   }  

   public function loadMaquilas(){
    return $customers=json_encode($this->db->query('SELECT * FROM Maquilas WHERE status = 0')->result_array());
   }

   public function getMaquila($id_maquila){
    return $this->db->query("SELECT * FROM Maquilas WHERE id_maquila = $id_maquila ORDER BY id_maquila DESC")->row();
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
        $this->db->where('id_maquila', $data['id_maquila']);
        return $this->db->update('Maquilas');
    }

    public function deleteData($data){
        $send = array();
        $id_maquila = $data['id_maquila'];
         var_dump ($data);

        $send = array(
            'status'=> 1
        );
        $this->db->set($send);
        $this->db->where('id_maquila', $id_maquila);
        $this->db->update('Maquilas');
    }

  }
  ?>