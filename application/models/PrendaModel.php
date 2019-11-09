<?php
class PrendaModel extends CI_Model{
	public function __construct(){
    $this->load->model('User_model');

  }
  
  public function index(){

  }

  Public function create($name, $gener, $id_proveedor, $id_tipo_prenda, $tallaje){
      echo ($tallaje);
      $data = array(   
      'name'=> $name,
      'gener'=>$gener,
      'id_proveedor'=> $id_proveedor,
      'id_tipos_prenda'=> $id_tipo_prenda,
      'tallaje'=>$tallaje);
      $this->db->insert('Prendas',$data);
      
   }  

   public function createTallas($tallaje, $id_prenda, $id_tipo_uso){
    
    
       if($tallaje == 0)
       {  
        for ($i = 1; $i <= 7; $i++) {
            $data = array(
                'id_prenda'=>$id_prenda,
                'id_talla'=>$i,
                'id_tipo_uso'=>$id_tipo_uso
            );
            $this->db->insert('Prenda_tamano_consumo',$data);
        }
       }else{
           if($tallaje == 1)
           {
            for ($i = 8; $i <= 23; $i++) {
                $data = array(
                    'id_prenda'=>$id_prenda,
                    'id_talla'=>$i,
                    'id_tipo_uso'=>$id_tipo_uso
                );
                $this->db->insert('Prenda_tamano_consumo',$data);
            }

           }else{
               if($tallaje == 2)
               {
                for ($i = 24; $i <= 32; $i++) {
                    $data = array(
                        'id_prenda'=>$id_prenda,
                        'id_talla'=>$i,
                        'id_tipo_uso'=>$id_tipo_uso
                    );
                    $this->db->insert('Prenda_tamano_consumo',$data);
                }
               }
           }
       }
   }

   public function deleteTallaje($id_prenda){
     $this->db->query("DELETE FROM Prenda_tamano_consumo
                            WHERE id_prenda = $id_prenda");
}

   public function updateDataConsumo($dat,$id_consumo){
    $this->db->set($dat);
    $this->db->where('id_prenda_tamaño_consumo', $id_consumo);
    echo ("Pasé por el modelo". $id_consumo);
    return $this->db->update('Prenda_tamano_consumo');   
   }

   public function createForro($dat){
         $this->db->insert('Prenda_tamano_consumo',$dat); 
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
    return $this->db->query("SELECT Prendas.id_prenda, Prendas.name as prenda_name, Prendas.forro, Prendas.gener, Prendas.cantidad_telas, Prendas.id_proveedor, Proveedores.name as proveedor_name, tallaje, rs, rfc, present, address, suburb, state, city, cp, Phone1, Phone2, Tipos_prendas.name as tipoprenda_name, Prendas.id_tipos_prenda
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
        return $this->db->update('Prendas');
    }

    public function deleteData($data){
        $send = array();
        $id_prenda = $data['id_prenda'];


        $send = array(
            'status'=> 1
        );
        $this->db->set($send);
        $this->db->where('id_prenda', $id_prenda);
        $this->db->update('Prendas');
    }


    public function changeForro($id_prenda, $f){
        $send = array();
        $send = array(
            'forro'=> $f
        );
        $this->db->set($send);
        $this->db->where('id_prenda', $id_prenda);
        $this->db->update('Prendas');
    }

    public function cantidad_telas($id_prenda, $ct){
        $send = array();
        $send = array(
            'cantidad_telas'=> $ct
        );
        $this->db->set($send);
        $this->db->where('id_prenda', $id_prenda);
        $this->db->update('Prendas');
    }

    public function getNewTipoPrenda(){
        return $customers=json_encode($this->db->query('SELECT * FROM `Tipos_prendas` WHERE id_tipo_prenda = (SELECT max(id_tipo_prenda) FROM Tipos_prendas)')->result_array());
       }

    public function maxTipoUso($id_prenda){
     return $maxTipoUso=$this->db->query(" SELECT max(id_tipo_uso) as tipo_uso  FROM `Prenda_tamano_consumo` WHERE id_prenda = $id_prenda and id_tipo_uso <> 5")->row();
    }

        
    public function getidPrenda(){
        return $id_prenda=json_encode($this->db->query('SELECT max(id_prenda) as id_lastPrenda FROM Prendas')->result_array());
       }

    public function getTallas($id_prenda){
        return $tallas = json_encode($this->db->query("SELECT * 
                                                            FROM Prenda_tamano_consumo
                                                                JOIN Tallas ON Tallas.id_talla = Prenda_tamano_consumo.id_talla
                                                                    where id_prenda = $id_prenda 
                                                    ")->result_array());
    }

    public function getPrenda($id_prenda){
        return $talla = $this->db->query("SELECT *
                            FROM Prendas
                                WHERE id_prenda = $id_prenda")->row();
    }
    
    // public function updateAdvancedOptions($data){
    //     $this->db->set($data);
    //     $this->db->where('id_prenda', $data['id_prenda']);
    //     return $this->db->update('Prendas');
    // }
    public function getForro($id_prenda){
        return $talla = $this->db->query("SELECT forro
                            FROM Prendas
                                WHERE id_prenda = $id_prenda")->row();
    }

    public function getPrendaTipoUsoForro($id_prenda){
        return $consumoForro = json_encode($this->db->query("SELECT * 
                                                    FROM Prenda_tamano_consumo
                                                        JOIN Tallas ON Tallas.id_talla = Prenda_tamano_consumo.id_talla
                                                            WHERE id_prenda = $id_prenda AND id_tipo_uso=5")->result_array());
        }

    public function getPrendaTipoUsoSecundaria($id_prenda){
        return $consumoSecundario = json_encode($this->db->query("SELECT * 
                                                    FROM Prenda_tamano_consumo
                                                        JOIN Tallas ON Tallas.id_talla = Prenda_tamano_consumo.id_talla
                                                            WHERE id_prenda = $id_prenda AND id_tipo_uso=2")->result_array());
        }
    
    public function getPrendaTipoUsoTerciaria($id_prenda){
        return $consumoTerciaria = json_encode($this->db->query("SELECT * 
                                                    FROM Prenda_tamano_consumo
                                                        JOIN Tallas ON Tallas.id_talla = Prenda_tamano_consumo.id_talla
                                                            WHERE id_prenda = $id_prenda AND id_tipo_uso=3")->result_array());
        }
    public function getPrendaTipoUsoCuarta($id_prenda){
        return $consumoCuarta = json_encode($this->db->query("SELECT * 
                                                    FROM Prenda_tamano_consumo
                                                        JOIN Tallas ON Tallas.id_talla = Prenda_tamano_consumo.id_talla
                                                            WHERE id_prenda = $id_prenda AND id_tipo_uso=4")->result_array());
        }
    }
  ?>