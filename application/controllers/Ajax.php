<?php

class Ajax extends CI_Controller
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
    }
    public function index()
    {

        //Custumer

    }
    public function updateCustomer()
    {
        // echo $data;
        $data = array();
        parse_str($_POST['data'], $data);
        $this->CustomerModel->update($data);
    }

    // Maquila

    public function updateMaquila()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->MaquilaModel->update($data);
    }

    // Proveedor

    public function createProveedor()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->ProveedorModel->createAjax($data);
    }


    public function updateProveedor()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->ProveedorModel->update($data);
    }

    public function getNewProveedor()
    {

        $data = $this->ProveedorModel->getNewProveedor();
        echo ($data);
    }



    //Tipo Prenda

    public function getNewTipoPrenda()
    {
        $data = $this->PrendaModel->getNewTipoPrenda();
        echo ($data);
    }

    public function updateWear()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->PrendaModel->update($data);
    }

    public function createTipoPrenda()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->PrendaModel->createAjax($data);
    }

    //Prenda consumo


    public function getTallas()
    {
        $data = $this->PrendaModel->getTallas();
    }

    public function advancedOptions()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $forro = $this->PrendaModel->getForro($data['id_prenda']);
        var_dump($forro->forro);
        $forrois = 0;

        if (!array_key_exists('forro', $data) && $forro->forro == 1) {
            echo ("Borrar los pinchis datos");
            $f = 0;

            $this->PrendaModel->changeForro($data['id_prenda']);
        }
        $this->PrendaModel->cantidad_telas($data['id_prenda'], $data['id_tipo_uso']);
    }

    public function advancedOptionsElse()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        echo ("Cambio de tallaje");
        var_dump($data);
        $update = array(
            'id_prenda' => $data['id_prenda'],
            'tallaje' => $data['tallaje']
        );
        $this->PrendaModel->deleteTallaje($data['id_prenda']);
        $this->PrendaModel->createTallas($data['tallaje'], $data['id_prenda'], $data['id_tipo_uso']);
        $this->PrendaModel->update($update);
    }

    public function dataConsumo()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        echo ("Holi");

        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_tipo_uso' => 1,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                var_dump($dat);
                echo ("Salto");
                $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_tipo_uso' => 1,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    var_dump($dat);
                    echo ("Salto");
                    $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_tipo_uso' => 1,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                        var_dump($dat);
                        echo ("Salto");
                        $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                    }
                }
            }
        }
    }

    public function createForro()
    {
        $data = array();
        parse_str($_POST['data'], $data);

        $f = 1;
        $this->PrendaModel->changeForro($data['id_prenda'], $f);

        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_talla' => $i,
                    'id_tipo_uso' => 5,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                var_dump($dat);
                echo ("Salto");
                $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_talla' => $i,
                        'id_tipo_uso' => 5,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    var_dump($dat);
                    echo ("Salto");
                    $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_talla' => $i,
                            'id_tipo_uso' => 5,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                        var_dump($dat);
                        echo ("Salto");
                        $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                    }
                }
            }
        }
    }

    public function updateForro()
    {
        $data = array();
        parse_str($_POST['data'], $data);

        $f = 1;
        $this->PrendaModel->changeForro($data['id_prenda'], $f);


        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_tipo_uso' => 5,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                var_dump($dat);
                echo ("Salto");
                $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_tipo_uso' => 5,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    var_dump($dat);
                    echo ("Salto");
                    $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_tipo_uso' => 5,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                        var_dump($dat);
                        echo ("Salto");
                        $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                    }
                }
            }
        }
    }

    // public function changeForro($id_prenda){
    //     $data = array();
    //     $dato = $_POST['data']; 
    //     echo $dato;
    //     parse_str($dato, $data);
    //     // var_dump ($data);

    //     $this->PrendaModel->deleteData($data);

    //     redirect(base_url('index.php/sscm/wear/list'),'refresh');

    //   }

    public function createSecundaria()
    {
        $data = array();
        parse_str($_POST['data'], $data);


        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_talla' => $i,
                    'id_tipo_uso' => 2,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                // var_dump ($dat);
                // echo ("Salto");
                $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_talla' => $i,
                        'id_tipo_uso' => 2,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    // var_dump ($dat);
                    // echo ("Salto");
                    $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_talla' => $i,
                            'id_tipo_uso' => 2,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                        // var_dump ($dat);
                        echo ("Salto");
                        $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                    }
                }
            }
        }
    }

    public function updateSecundaria()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        echo ($data['id_tipo_talla']);

        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_tipo_uso' => 2,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                // var_dump ($dat);
                $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_tipo_uso' => 2,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    var_dump($dat);
                    echo ("Salto");
                    $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_tipo_uso' => 2,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                        var_dump($dat);
                        echo ("Salto");
                        $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                    }
                }
            }
        }
    }

    public function createTerciaria()
    {
        $data = array();
        parse_str($_POST['data'], $data);


        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_talla' => $i,
                    'id_tipo_uso' => 3,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                // var_dump ($dat);
                // echo ("Salto");
                $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_talla' => $i,
                        'id_tipo_uso' => 3,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    // var_dump ($dat);
                    // echo ("Salto");
                    $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_talla' => $i,
                            'id_tipo_uso' => 3,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                        // var_dump ($dat);
                        echo ("Salto");
                        $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                    }
                }
            }
        }
    }

    public function updateTerciaria()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        echo ($data['id_tipo_talla']);

        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_tipo_uso' => 3,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                var_dump($dat);
                echo ("Salto " . $id_consumo . " ");
                $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_tipo_uso' => 3,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    var_dump($dat);
                    echo ("Salto");
                    $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_tipo_uso' => 3,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                        var_dump($dat);
                        echo ("Salto");
                        $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                    }
                }
            }
        }
    }


    public function createCuarta()
    {
        $data = array();
        parse_str($_POST['data'], $data);


        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_talla' => $i,
                    'id_tipo_uso' => 4,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                // var_dump ($dat);
                // echo ("Salto");
                $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_talla' => $i,
                        'id_tipo_uso' => 4,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    // var_dump ($dat);
                    // echo ("Salto");
                    $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_talla' => $i,
                            'id_tipo_uso' => 4,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamano_consumo' . $i];
                        // var_dump ($dat);
                        echo ("Salto");
                        $this->PrendaModel->createForro($dat, $data['id_tipo_talla']);
                    }
                }
            }
        }
    }

    public function updateCuarta()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        echo ($data['id_tipo_talla']);

        if ($data['id_tipo_talla'] == 0) {
            for ($i = 1; $i <= 7; $i++) {
                $dat = array(
                    'id_prenda' => $data['id_prenda'],
                    'id_tipo_uso' => 4,
                    'Consum' => $data[$i]
                );
                echo $i;
                $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                var_dump($dat);
                echo ("Salto " . $id_consumo . " ");
                $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
            }
        } else {
            if ($data['id_tipo_talla'] == 1) {
                for ($i = 8; $i <= 23; $i++) {
                    $dat = array(
                        'id_prenda' => $data['id_prenda'],
                        'id_tipo_uso' => 4,
                        'Consum' => $data[$i]
                    );
                    echo $i;
                    $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                    var_dump($dat);
                    echo ("Salto");
                    $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                }
            } else {
                if ($data['id_tipo_talla'] == 2) {
                    for ($i = 24; $i <= 32; $i++) {
                        $dat = array(
                            'id_prenda' => $data['id_prenda'],
                            'id_tipo_uso' => 4,
                            'Consum' => $data[$i]
                        );
                        echo $i;
                        $id_consumo = $data['id_prenda_tamaño_consumo' . $i];
                        var_dump($dat);
                        echo ("Salto");
                        $this->PrendaModel->updateDataConsumo($dat, $id_consumo);
                    }
                }
            }
        }
    }

    // Tipo tela

    public function getNewTipoTela()
    {
        $data = $this->TelaModel->getNewTipoTela();
        echo ($data);
    }

    public function createTipoTela()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->TelaModel->createAjax($data);
    }

    // Rollo de tela 
    public function updateRollo()
    {
        $data = array();
        parse_str($_POST['data'], $data);
        $this->TelaModel->updateRollo($data);
    }
    public function getPrendasAjax()
    {
        echo $prendas = $this->PedidoModel->loadPrendaAjax($_POST['id']);
    }

    public function getPrendasCompraAjax()
    {
        echo $prendas = $this->PedidoModel->loadPrendaCompraAjax($_POST['id']);
    }


    public function getTonosAjax()
    {
        echo $prendas = $this->PedidoModel->loadTonosAjax($_POST['id_color'], $_POST['id_tela']);
    }
    public function getTonosAjaxCompra()
    {
        echo $prendas = $this->PedidoModel->loadTonosAjaxCompr($_POST['id_color'], $_POST['id_tela']);
    }

    public function getTallasAjax()
    {
        echo $prendas = $this->PedidoModel->loadTallasAjax($_POST['id_prenda']);
    }

    public function sendDataPedido()
    {
        var_dump(json_decode($_POST['data']));
        $pedido_data = (json_decode($_POST['data']));


        $pedido = [
            "Fecha_ingreso" => $pedido_data->date_ingres,
            "Fecha_tentativa_entrega" => $pedido_data->date_delivery,
            "status" => 1,
            "id_cliente" => $pedido_data->id_customer,
            "id_seller" => $pedido_data->id_vendedor
        ];

        $this->PedidoModel->insertPedido($pedido);
        echo ('<br>');
        echo ('Datos generales');
        echo ('<br>');
        echo ($pedido_data->date_ingres);
        echo ('<br>');
        echo ($pedido_data->date_delivery);
        echo ('<br>');
        echo ($pedido_data->id_customer);
        echo ('<br>');
        echo ($pedido_data->id_vendedor);

        $lastid = $this->PedidoModel->getlastId();
        echo ($lastid->maxid . " max id");
        $pedidoData = ($pedido_data->data);

        for ($i = 0; $i < count($pedidoData); $i++) {

            echo ('<br>');
            echo ('Datos de pedido');
            echo ('<br>');

            $prendas_pedido = [
                "id_pedido" => $lastid->maxid,
                "id_tipo_pedido" => $pedidoData[$i]->tipo,
                "id_prenda" => $pedidoData[$i]->id_prenda,
                "id_tela" => $pedidoData[$i]->id_tela,
                "color" => $pedidoData[$i]->color,
                "colortela" => $pedidoData[$i]->colortela,
                "bordado" => $pedidoData[$i]->bordado,
                "impresion" => $pedidoData[$i]->impresion
            ];

            $this->PedidoModel->insertPrendasPedido($prendas_pedido);

            echo $pedidoData[$i]->tipo;
            echo ('<br>');
            echo $pedidoData[$i]->categoria;
            echo ('<br>');
            echo $pedidoData[$i]->id_prenda;
            echo ('<br>');
            echo $pedidoData[$i]->id_tela;
            echo ('<br>');
            echo $pedidoData[$i]->color;
            echo ('<br>');
            echo $pedidoData[$i]->colortela;
            echo ('<br>');
            echo $pedidoData[$i]->bordado;
            echo ('<br>');
            echo $pedidoData[$i]->impresion;
            echo ('<br>');
            var_dump($pedidoData[$i]->tallas);
            $tallas = ($pedidoData[$i]->tallas);
            echo ('<br>');

            $lastidprendapedido = $this->PedidoModel->getlastIdPrendaPedido($lastid->maxid);
            var_dump ($lastidprendapedido);
            $prendapedidotalla=$lastidprendapedido->p;

            
            echo ('<br>');
            echo ('array');
            echo ('<br>');
            // var_dump($prendapedidotalla);

            echo ('<br>');
            

            for ($j = 0; $j < count($tallas); $j++) {
                $Prendas_pedido_tallas = [
                    "id_prenda_pedido"=> $prendapedidotalla,
                    "id_talla" => $tallas[$j]->id_talla,
                    "cantidad" => $tallas[$j]->cantidad
                ];
                $this->PedidoModel->insertPrendasPedidoTallas($Prendas_pedido_tallas);
                echo ('<br>');
                echo ('Datos de tallas');
                echo ('<br>');

                echo $tallas[$j]->id_talla;
                echo ('<br>');
                echo $tallas[$j]->cantidad;
                echo ('<br>');
            }
        }
    }
}
