<?php
class TelaModel extends CI_Model{
	public function __construct(){
    $this->load->model('User_model');

  }
  
  public function index(){

  }

  Public function create($id_tela, $id_proveedor, $Metros, $Ancho, $Fecha_ingreso, $update_date, $Color){
      $data = array(   
      'id_tela'=> $id_tela,
      'id_proveedor'=> $id_proveedor,
      'Metros'=>$Metros,
      'Ancho'=>$Ancho,
      'Fecha_ingreso'=>$Fecha_ingreso,
      'Fecha_modificacion'=>$update_date,
      'Color'=> $Color);
      $this->db->insert('Rollos_tela',$data);
   }  

   Public function createTiposTelas($Nombre, $Descripcion, $Composicion, $Ancho, $Fecha_ingreso, $update_date, $Color){
    $data = array(   
    'Nombre'=> $Nombre,
    'Descripcion'=> $Descripcion,
    'Composicion'=> $Composicion);
    $this->db->insert('Tipo_telas',$data);
    } 
   public function createAjax($data){
    $this->db->insert('Tipo_telas',$data);
    }



   public function loadRollos(){
    return $customers=json_encode($this->db->query('SELECT COUNT(rt.id_rollo) as total_rollos, rt.id_tela, tt.Nombre as tela_name, SUM(rt.Metros) as total_metros, rt.Color
                                                        FROM Rollos_tela as rt 
                                                            JOIN Tipo_telas as tt ON rt.id_tela = tt.id_tela 
                                                                WHERE rt.status = 0 and rt.Metros >= 1
                                                                    GROUP BY rt.id_tela, rt.Color
                                                    ')->result_array());
   }
   public function loadRollosEspesificos($id_tela, $color){
    return $customers=json_encode($this->db->query("SELECT rt.id_rollo as id_rollo, rt.id_tela, tt.Nombre as tela_name, rt.Metros as total_metros, rt.Color
                                                        FROM Rollos_tela as rt 
                                                            JOIN Tipo_telas as tt ON rt.id_tela = tt.id_tela 
                                                                WHERE rt.status = 0 and rt.id_tela = $id_tela and Color = '$color'
                                                    ")->result_array());
   }
   

   public function loadTelas(){
    return $customers=json_encode($this->db->query('SELECT * FROM Tipo_telas JOIN Composiciones on Tipo_telas.composicion = id_composicion WHERE status = 0')->result_array());
   }

   public function loadProveedores(){
    return $customers=json_encode($this->db->query('SELECT * FROM Proveedores WHERE status = 0')->result_array());
   }

   public function loadComp(){
    return $customers=json_encode($this->db->query('SELECT * FROM Composiciones')->result_array());
   }

   public function getTela($id_tela){
    return $this->db->query("SELECT rt.id_rollo as id_rollo, rt.id_tela, tt.Nombre as tela_name, rt.Fecha_ingreso, rt.Fecha_modificacion, rt.Metros as total_metros, rt.Color, p.id_proveedor, p.name as proveedor_name, Ancho, rs, rfc, present, address, suburb, state, city, cp, Phone1, Phone2, c.Composicion, tt.Descripcion
                                    FROM Rollos_tela as rt 
                                        JOIN Tipo_telas as tt ON rt.id_tela = tt.id_tela 
                                            JOIN  Proveedores as p ON rt.id_proveedor = p.id_proveedor
                                                JOIN Composiciones as c ON tt.composicion = c.id_composicion
                                                WHERE rt.id_rollo = $id_tela"
                                                )->row();
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

    public function updateRollo($data){
        $this->db->set($data);
        $this->db->where('id_rollo', $data['id_rollo']);
        return $this->db->update('Rollos_tela');
    }

    public function deleteData($data){
        $send = array();
        $id_rollo = $data['id_rollo'];
         var_dump ($data);

        $send = array(
            'status'=> 1
        );
        $this->db->set($send);
        $this->db->where('id_rollo', $id_rollo);
        $this->db->update('Rollos_tela');
    }
    
    public function getNewTipoPrenda(){
        return $customers=json_encode($this->db->query('SELECT * FROM `Tipos_prendas` WHERE id_tipo_prenda = (SELECT max(id_tipo_prenda) FROM Tipos_prendas)')->result_array());
       }

    public function getNewTipoTela(){
     return $customers=json_encode($this->db->query('SELECT * FROM `Tipo_telas` WHERE id_tela = (SELECT max(id_tela) FROM Tipo_telas)')->result_array());
    }

  }
  ?>