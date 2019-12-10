<?php
class CorteModel extends CI_Model{
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

    public function getPedidoConsumo($id_pedido_tallas){
        return $consumo = $this->db->query("SELECT ppt.cantidad, ppt.id_talla, pp.id_prenda, pp.id_tela, pp.color, pp.colortela FROM Prendas_pedido as pp
        JOIN  Prendas_pedido_tallas as ppt ON ppt.id_prenda_pedido = pp.id_prenda_pedido 
        WHERE id_pedido_tallas = $id_pedido_tallas")->row();
    }

    public function getPrendaCosumo($id_prenda, $id_talla){
        return $consumo = $this->db->query("SELECT * FROM Prenda_tamano_consumo WHERE id_prenda = $id_prenda AND id_talla = $id_talla")->row();
    }

    public function getRollos($id_tela, $color, $colortela){
            return $customers=$this->db->query("SELECT COUNT(rt.id_rollo) as total_rollos, rt.id_tela, tt.Nombre as tela_name, SUM(rt.Metros) as total_metros, rt.Color, rt.tonotela
                                                                FROM Rollos_tela as rt 
                                                                    JOIN Tipo_telas as tt ON rt.id_tela = tt.id_tela 
                                                                        WHERE rt.status = 0 and rt.Metros >= 1 and rt.id_tela = $id_tela and rt.Color = $color and rt.tonotela =  $colortela
                                                                            GROUP BY rt.id_tela, rt.Color
                                                            ")->row();

    }
    public function compraTelas($id_tela, $color, $colortela){
        return $customers=$this->db->query("SELECT Tipo_telas.Nombre as tela_name, colors.name as color_name, Tela_colors.name as tono_name
                                                FROM Tela_colors 
                                                    JOIN colors on Tela_colors.id_color = colors.id_color
                                                        JOIN Tipo_telas ON Tipo_telas.id_tela = Tela_colors.id_tipo_tela
                                                            WHERE Tela_colors.id_tono = $colortela and Tipo_telas.id_tela = $id_tela and colors.id_color = $color
                                                        ")->row();
}

public function addCorte($corte){
    $this->db->insert('Corte_prenda_pedido',$corte);
}

public function addCortelist($fecha){
    $this->db->insert('Corte',$fecha);
}
public function loadrollocorte($corte)
{
    $this->db->insert('Rollos_corte', $corte);
}

public function update_rollo($dataupdate){
    $this->db->set($dataupdate);
    $this->db->where('id_corte', $dataupdate['id_corte']);
    return $this->db->update('Corte');
}

public function updatePedidoStatus($dataupdate){
    $this->db->set($dataupdate);
    $this->db->where('id_pedido', $dataupdate['id_pedido']);
    return $this->db->update('Pedido');
}
public function update_pedido_status_corte($id_corte)
{
    return $customers=json_encode($this->db->query("SELECT pp.id_pedido, Corte.status FROM Corte_prenda_pedido as cpp
                                                     JOIN Corte ON cpp.id_corte = Corte.id_corte 
                                                     JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                     JOIN Prendas_pedido as pp ON pp.id_prenda_pedido =  ppt.id_prenda_pedido
                                                     WHERE pp.id_pedido = (SELECT pp.id_pedido FROM Corte_prenda_pedido as cpp
                                                     JOIN Corte ON cpp.id_corte = Corte.id_corte 
                                                     JOIN Prendas_pedido_tallas as ppt ON ppt.id_pedido_tallas = cpp.id_pedido_tallas
                                                     JOIN Prendas_pedido as pp ON pp.id_prenda_pedido =  ppt.id_prenda_pedido
                                                     WHERE Corte.id_corte = $id_corte                      
                                                     GROUP BY pp.id_pedido)"
                                                    )->result_array());
}

public function getlastId()
{
    return $maxid = $this->db->query("SELECT max(id_corte_prenda_pedido) as maxid FROM Corte_prenda_pedido")->row();
}

public function getIdcpp($id_corte)
{
    return $maxid = $this->db->query("SELECT id_corte_prenda_pedido FROM Corte_prenda_pedido WHERE $id_corte ")->row();
}
public function createCorteMaquila($data)
{
    $this->db->insert('Maquila_corte', $data);
}
public function getLastCorte()
{
    return $maxid = $this->db->query("SELECT max(id_corte) as maxid FROM Corte")->row();
}

public function updateCortePreda($dataupdate){
    $this->db->set($dataupdate);
    $this->db->where('id_corte_prenda_pedido', $dataupdate['id_corte_prenda_pedido']);
    return $this->db->update('Corte_prenda_pedido');
}

public function updateCorte($dataupdate){
    $this->db->set($dataupdate);
    $this->db->where('id_pedido_tallas', $dataupdate['id_pedido_tallas']);
    return $this->db->update('Prendas_pedido_tallas');
}



   public function pedidosPendientesCorte(){
    return $customers=json_encode($this->db->query('SELECT  p.Fecha_entrega, pp.id_prenda_pedido, ppt.id_pedido_tallas, p.id_pedido, tp.name as clase, pren.name as prenda, c.name as color, tc.name as tono, tt.Nombre as tela, ppt.cantidad, t.Nombre as talla
                                                        FROM Prendas_pedido_tallas as ppt 
                                                            JOIN Prendas_pedido as pp ON ppt.id_prenda_pedido = pp.id_prenda_pedido JOIN Pedido as p ON pp.id_pedido = p.id_pedido JOIN Prendas as pren on pp.id_prenda = pren.id_prenda 
                                                                JOIN Tipos_prendas as tp ON pren.id_tipos_prenda = tp.id_tipo_prenda 
                                                                    JOIN Tipo_telas as tt ON tt.id_tela = pp.id_tela 
                                                                        JOIN colors as c ON c.id_color = pp.color 
                                                                            JOIN Tela_colors as tc ON tc.id_tono = pp.colortela 
                                                                                JOIN Tallas as t ON ppt.id_talla = t.id_talla
                                                                                    WHERE ppt.status = 0
                                                    ')->result_array());
   }

    public function getCorte(){
    return $customers=json_encode($this->db->query('SELECT c.id_corte, c.Fecha_corte, p.Fecha_tentativa_entrega, pren.name as prenda_name, tp.name as prenda, tt.Nombre as tela, col.name as color, tc.name as tono, tal.Nombre as talla, cantidad 
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
                                                                                                    WHERE c.status = 0
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