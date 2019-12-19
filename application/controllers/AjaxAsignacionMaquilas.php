<?php

class AjaxAsignacionMaquilas extends CI_Controller
{

    public function __construct()
    {
        // if($this->session->user ==null)
        //     redirect(base_url('/'));
        parent::__construct();

        $this->load->model('CustomerModel');
        $this->load->model('MaquilaModel');
        $this->load->model('ProveedorModel');
        $this->load->model('PrendaModel');
        $this->load->model('TelaModel');
        $this->load->model('PedidoModel');
        $this->load->model('CorteModel');
        $this->load->model('AMModel');
    }
    public function index()
    { }

    public function ajaxcpp()
    {

        $sel = $_POST['selected'];
        var_dump(sizeof($sel));
        var_dump($sel);
        $cant = $_POST['cantidad'];
        for ($i = 0; $i < sizeof($_POST['selected']); $i++) {
            $data = array(
                'id_corte_prenda_pedido' => $sel[$i],
                'id_maquila' => $_POST['id_maquila'],
                'Fecha_envio' => $_POST['Fecha_envio'],
                'Fecha_tentativa_regreso' => $_POST['Fecha_tentativa_regreso'],
                'Cantidad' => $cant[$i]
            );
            $delete = array(
                'id_corte_prenda_pedido' => $sel[$i],
                'status' => 1
            );

            var_dump($data);

            $this->AMModel->insertMC($data);
            $this->AMModel->updateDelete($delete);
            $result = $this->AMModel->update_pedido_status_corte($_POST['id_corte']);
            var_dump($result);

            date_default_timezone_set('America/Mexico_City');
            echo date("Y m d");
            $update_date = date("Y-m-d");

            $update_data = array(
                'id_pedido' => $result->id_pedido,
                'Fecha_update' => $update_date,
                'status' => 7
            );
            var_dump($update_data);
            $this->CorteModel->updatePedidoStatus($update_data);


        }
    }
    public function ajaxcppMulti(){
        // var_dump($_POST['maquila']);
        $maquilas = $_POST['maquila'];

        for ($i=0; $i < sizeof($maquilas); $i++) { 
            $maquilasIndividual=$maquilas[$i];


            $data = array(
                'id_corte_prenda_pedido' => $_POST['selected'],
                'id_maquila' => $maquilasIndividual['id_maquila'],
                'Fecha_envio' => $_POST['Fecha_envio'],
                'Fecha_tentativa_regreso' => $_POST['Fecha_tentativa_regreso'],
                'Cantidad' => $maquilasIndividual['cantidad']
            );

            $delete = array(
                'id_corte_prenda_pedido' =>  $_POST['selected'],
                'status' => 1
            );
            var_dump($data);
            $this->AMModel->insertMC($data);

            $this->AMModel->updateDelete($delete);

            $result = $this->AMModel->update_pedido_status_corte($_POST['id_corte']);
            var_dump($result);

            date_default_timezone_set('America/Mexico_City');
            echo date("Y m d");
            $update_date = date("Y-m-d");

            $update_data = array(
                'id_pedido' => $result->id_pedido,
                'Fecha_update' => $update_date,
                'status' => 7
            );
            var_dump($update_data);
            $this->CorteModel->updatePedidoStatus($update_data);




        }
    }
    public function devolucion(){
        $data = array(
            'Fecha_actualizacion_entrega'=>$_POST['Fecha_actualizacion_entrega'],
            'Entregas'=>$_POST['Entregas'],
            'id_maquila_corte'=>$_POST['id_maquila_corte'],
            'id_corte_prenda_pedido'=>$_POST['id_corte_prenda_pedido']
        );
        var_dump($data);
        $this->AMModel->MaquilaCorteUpdate($data);
    }

    public function devolucionEnd(){
        $data = array(
            'id_maquila_corte'=>$_POST['id_maquila_corte'],
            'Fecha_enrtrega' =>$_POST['Fecha_entrega'],
            'status'=>1
        );
        var_dump($data);
         $this->AMModel->MaquilaCorteUpdate($data);
    }

    public function pagoMaquila(){
        $data_pay = $_POST['pay_data'];

        date_default_timezone_set('America/Mexico_City');
        echo date("Y m d");
        $date = date("Y-m-d");

        $data_load = array(
            'maquila' => $_POST['maquila'],
            'total'=>$_POST['granTotal'],
            'date' => $date
        );
        var_dump($data_load);
        
        $this->AMModel->insertMaquilaPay($data_load);
        $lastid=$this->AMModel->getlastId();




        foreach ($data_pay as $dp){
            $data = array(
                'id_maquila_corte' => $dp['id_maquila_corte'],
                'id_pago'=> $lastid->maxid,
                'name' => $dp['name'],
                'precio_tipo' => $dp['precio_tipo'],
                'cantidad' => $dp['cantidad'],
                'total' => $dp['total']
            );

            $dataUpdate= array(
                'id_maquila_corte' => $dp['id_maquila_corte'],
                'payed'=>1
            );
            echo ("<br>");
            var_dump ($data);
        $this->AMModel->updatePagoMaquila($dataUpdate);
        
        $this->AMModel->insertMaquilaPayDet($data);
        }
        
    }
}
