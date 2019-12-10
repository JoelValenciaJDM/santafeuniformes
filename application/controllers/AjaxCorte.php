<?php

class AjaxCorte extends CI_Controller
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
    }
    public function index()
    {

        //Custumer

    }


    public function SendCorte()
    {
        // echo ($_POST['id_pedido']);
        // echo ($_POST['id_compuesto']);
        $separador = '-';
        $arrayid = explode($separador, $_POST['id_compuesto']);
        $id_prenda_pedido = $arrayid[1];
        $id_pedido_tallas = $arrayid[2];

        $pedidotalla = $this->CorteModel->getPedidoConsumo($id_pedido_tallas);
        $tela = $this->CorteModel->getRollos($pedidotalla->id_tela, $pedidotalla->color, $pedidotalla->colortela);
        if (!$tela) {
            $telafaltante = $this->CorteModel->compraTelas($pedidotalla->id_tela, $pedidotalla->color, $pedidotalla->colortela);
        }
        $consumo = $this->CorteModel->getPrendaCosumo($pedidotalla->id_prenda, $pedidotalla->id_talla);
        $totalConsumo = $consumo->Consum * $pedidotalla->cantidad;

        if ($tela) {

            if ($totalConsumo <= $tela->total_metros) {
                $corte = array(
                    'id_prenda_pedido' => $id_pedido_tallas,
                    'Cortadas' => 0,
                    'Pendientes' => $pedidotalla->cantidad,
                    'id_pedido_tallas' => $id_pedido_tallas
                );
                $this->CorteModel->addCorte($corte);
                $lastid = $this->CorteModel->getlastId();


                $data = array(
                    'tipo' => 0,
                    'consumo_estimado' => $totalConsumo,
                    'id' => $lastid->maxid,
                    'id_prenda_pedido' => $id_pedido_tallas

                );

                echo json_encode($data);
            }
        } else {

            $data = array(
                // 'id_prenda'=> $pedidotalla->id_prenda,
                'tipo' => 1,
                'cantidad' => $totalConsumo,
                'tono' => $telafaltante->tono_name,
                'tela' => $telafaltante->tela_name,
                'color' => $telafaltante->color_name,
            );

            echo json_encode($data);
        }
        // echo $totalConsumo;
        // echo"<br>";
    }

    public function createCorte()
    {

        $cortelist = array(
            'Fecha_corte' => $_POST['date']
        );
        $this->CorteModel->addCortelist($cortelist);

        $last = $this->CorteModel->getLastCorte();

        $dataupdate = array(
            'id_corte_prenda_pedido' => $_POST['id'],
            'id_corte' => $last->maxid,

        );
        $last = $this->CorteModel->updateCortePreda($dataupdate);

        $dataupdateCorte = array(
            'id_pedido_tallas' => $_POST['ppt'],
            'status' => 1
        );

        $last = $this->CorteModel->updateCorte($dataupdateCorte);
    }
    public function cutstart()
    {
        $rollo_corte = array(
            'id_corte' => $_POST['id_corte'],
            'id_rollo' => $_POST['id_rollo'],
            'Capas' => $_POST['Capas']
        );

        $corte = array(
            'id_corte' => $_POST['id_corte'],
            'Hora_inicio' => $_POST['Hora_inico']
        );

        $this->CorteModel->loadrollocorte($rollo_corte);
        $this->CorteModel->update_rollo($corte);

        echo ($_POST['id_corte']);
        echo ($_POST['id_rollo']);
        echo ($_POST['Capas']);
        echo ($_POST['Hora_inico']);
    }
    public function cutend() //Update cut data
    {

        $corte = array(
            'id_corte' => $_POST['id_corte'],
            'Hora_inicio' => $_POST['Hora_final'],
            'status' => 1
        );



        var_dump($corte);

        // $this->CorteModel->loadrollocorte($rollo_corte);
        $this->CorteModel->update_rollo($corte);

        //Get id_pedido
        $result = json_decode($this->CorteModel->update_pedido_status_corte($_POST['id_corte']));
        $cortados = 0;
        $cont = 0;
        $id_pedido = null;
        foreach ($result as $r) {
            $cont++;
            if ($r->status == 1) {

                $cortados++;
                echo (" cortados " . $cont);
                $id_pedido = $r->id_pedido;
            }
            echo (" Cont " . $cont);
        }

        //Update pedido data
        if ($cont == $cortados) {
            date_default_timezone_set('America/Mexico_City');
            echo date("Y m d");
            $update_date = date("Y-m-d");

            $update_data = array(
                'id_pedido' => $id_pedido,
                'Fecha_update' => $update_date,
                'status' => 6
            );
            var_dump($update_data);
            $this->CorteModel->updatePedidoStatus($update_data);

        }
        var_dump($result);
        //Create MaquilaCorte
        $id_cpp = $this->CorteModel->getIdcpp($_POST['id_corte']);
        
        $data = array(
            'id_corte_prenda_pedido' => $id_cpp->id_corte_prenda_pedido
        );

        $this->CorteModel->createCorteMaquila($data);


        
    }
}
