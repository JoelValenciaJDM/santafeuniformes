<?php
class CustomerModel extends CI_Model{
	public function __construct(){
    $this->load->model('User_model');

  }
  
  public function index(){

  }

  Public function create($name, $lastname, $second_lastname, $enterprice, $rfc, $email, $phone ){
      $data = array(   
      'name'=> $name,
      'lastname'=>$lastname,
      'second_lastname'=> $second_lastname,
      'enterprice'=> $enterprice,
      'rfc' => $rfc,
      'email' => $email,
      'phone'=> $phone);
      $this->db->insert('Clientes',$data);
      
   }  

   public function loadCustomers(){
    return $customers=json_encode($this->db->query('SELECT * FROM Clientes')->result_array());
   }

   public function getCustomer($id_cliente){
    return $this->db->query("SELECT * FROM Clientes WHERE id_cliente = $id_cliente ORDER BY id_cliente DESC")->row();
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
        $this->db->where('id_cliente', $data['id_cliente']);
        return $this->db->update('clientes', $Clientes);
    }


  }
  ?>