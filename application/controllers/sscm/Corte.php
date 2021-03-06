<?php
class Corte extends CI_controller {  
  function __construct(){
    parent::__construct(); 
      $this->load->library('Session');
      $this->load->model('CpanelModel');
      $this->load->model('CorteModel');
      if($this->session->user ==null)
          redirect(base_url('/'));    
   }
  


   public function index(){

echo $this->pagination->create_links();


  
   }

   public function newTela(){
    $data['telas'] = json_decode($this->TelaModel->loadTelas());
    $data['proveedores'] = json_decode($this->TelaModel->loadProveedores());
    $data['Componentes'] = json_decode($this->TelaModel->loadComp());
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Telas/newtela', $data);  
   }

   public function create(){
    date_default_timezone_set('America/Mexico_City');
     echo date("Y m d");
    $update_date = date("Y-m-d");
    $this->TelaModel->create($_POST['id_tela'],$_POST['id_proveedor'],$_POST['Metros'], $_POST['Ancho'], $_POST['Fecha_ingreso'], $update_date, $_POST['Color'] );

    redirect('sscm/cpanel','refresh');
   }

   public function pendientecortelist(){
  
    $data['Pedidos'] = json_decode($this->CorteModel->pedidosPendientesCorte());
    // echo ($this->TelaModel->loadTelas());
    $data = array_merge($data,$this->CpanelModel->loadData());
    $this->load->view('sscm/Corte/cortelist', $data);
   }  

   public function porcortelist(){
  
    $data['Cortes'] = json_decode($this->CorteModel->getCorte());
    // echo ($this->TelaModel->loadTelas());
    $data = array_merge($data,$this->CpanelModel->loadData());
    $this->load->view('sscm/Corte/porcortarlist', $data);
   }  

   public function listTela($id_tela, $color){
     $color = urldecode($color);
    $data['Telas'] = json_decode($this->TelaModel->loadRollosEspesificos($id_tela, $color));
    // echo ($this->TelaModel->loadTelas());
    $data = array_merge($data,$this->CpanelModel->loadData());
    $this->load->view('sscm/Telas/listtela', $data);
   }  


   public function viewData($id_tela){
    $data['Tela'] = $this->TelaModel->getTela($id_tela);
    $data = array_merge($data, $this->CpanelModel->loadData());
    // var_dump ($this->TelaModel->getWear($id_prenda));
    $this->load->view('sscm/Telas/tela', $data);
 }

  public function editData($id_rollo){
    
   $data['proveedores'] = json_decode($this->TelaModel->loadProveedores());
   $data['telas'] = json_decode($this->TelaModel->loadTelas());
   $data['Tela'] = $this->TelaModel->getTela($id_rollo);
   $data = array_merge($data, $this->CpanelModel->loadData());
   $this->load->view('sscm/Telas/telaedit', $data);
  }

  
  // public function updateWear($id_cliente){
  //   $this->WearModel->update($_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['enterprice'],
  //   $_POST['rfc'], $_POST['email'], $_POST['phone'] );

  //  }

  public function deleteData(){
    $data = array();
    $dato = $_POST['data']; 
    echo $dato;
    parse_str($dato, $data);
    // var_dump ($data);
      
    $this->TelaModel->deleteData($data);

    redirect(base_url('index.php/sscm/wear/list'),'refresh');
    
  }
}