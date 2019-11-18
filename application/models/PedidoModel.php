<?php
class PedidoModel extends CI_Model
{
    public function __construct()
    {
        $this->load->model('User_model');
    }

    public function index()
    { }

    public function create($name, $lastname, $second_lastname, $enterprice, $rfc, $email, $phone)
    {
        $data = array(
            'name' => $name,
            'lastname' => $lastname,
            'second_lastname' => $second_lastname,
            'enterprice' => $enterprice,
            'rfc' => $rfc,
            'email' => $email,
            'phone' => $phone
        );
        $this->db->insert('Clientes', $data);
    }

    public function loadCustomers()
    {
        return $customers = json_encode($this->db->query('SELECT * FROM Clientes WHERE status = 0')->result_array());
    }


    public function loadSellers()
    {
        return $customers = json_encode($this->db->query('SELECT * FROM Vendedores WHERE status = 0')->result_array());
    }


    public function loadTipoPrenda()
    {
        return $customers = json_encode($this->db->query('SELECT * FROM Tipos_prendas WHERE status = 0')->result_array());
    }

    public function loadTelas()
    {
        return $customers = json_encode($this->db->query('SELECT * FROM Tipo_telas WHERE status = 0')->result_array());
    }
    public function loadColors()
    {
        return $customers = json_encode($this->db->query('SELECT * FROM colors ')->result_array());
    }

    public function loadTallasAjax($id_prenda)
    {
        return $customers = json_encode($this->db->query("SELECT Tallas.id_talla, Prendas.tallaje, Tipos_talla.id_tipo_talla, Tipos_talla.Nombre, Tallas.Nombre FROM Prendas
                                                            JOIN Tipos_talla ON Prendas.tallaje = Tipos_talla.id_tipo_talla
                                                                JOIN Tallas ON Tallas.id_tipo_talla = Prendas.tallaje
                                                                    WHERE Prendas.id_prenda =  $id_prenda")->result_array());
    }
    public function loadPrendaAjax($id_prenda)
    {
        return $prendas = json_encode($this->db->query("SELECT id_prenda, Prendas.name FROM Prendas WHERE id_tipos_prenda = $id_prenda ")->result_array());
    }

    public function loadTonosAjax($id_color, $id_tela)
    {
        return $prendas = json_encode($this->db->query("SELECT id_tono, Tela_colors.name 
                                                    FROM colors 
                                                        JOIN Tela_colors ON colors.id_color =  Tela_colors.id_color
                                                            JOIN Tipo_telas ON Tipo_telas.id_tela = id_tipo_tela
                                                                WHERE colors.id_color = $id_color AND Tipo_telas.id_tela = $id_tela ")->result_array());
    }

    public function getCustomer($id_cliente)
    {
        return $this->db->query("SELECT * FROM Clientes WHERE id_cliente = $id_cliente ORDER BY id_cliente DESC")->row();
    }

    public function search($search, $start = FALSE, $registers = FALSE)
    {
        $this->db->like("nombres", $search);
        if ($start !== FALSE && $registers !== FALSE) {
            $this->db->limit($registers, $start);
        }
        $query = $this->db->get("Clientes");
        return $query->result();
    }

    public function getPagination($limit, $offset)
    {
        $sql = $this->db->get('Clientes, $limit, $offset');
        return $sql->reset();
    }

    public function update($data)
    {
        $this->db->set($data);
        $this->db->where('id_cliente', $data['id_cliente']);
        return $this->db->update('Clientes');
    }

    public function deleteData($data)
    {
        $send = array();
        $id_cliente = $data['id_cliente'];
        var_dump($data);

        $send = array(
            'status' => 1
        );
        $this->db->set($send);
        $this->db->where('id_cliente', $id_cliente);
        $this->db->update('Clientes');
    }
}
