<?php
class Prenda extends CI_controller {  
  function __construct(){
    parent::__construct(); 
      $this->load->library('Session');
      $this->load->model('CpanelModel');
      $this->load->model('PrendaModel');
      if($this->session->user ==null)
          redirect(base_url('/'));    
   }


   public function index(){

echo $this->pagination->create_links();


  
   }

   public function newWear(){
    $data['proveedores'] = json_decode($this->PrendaModel->loadProveedores());
    $data['type_prendas'] =json_decode($this->PrendaModel->loadTipoPrenda());
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Prendas/newprenda', $data);  
   }

   public function create(){
    $this->PrendaModel->create($_POST['name'],$_POST['gener'],$_POST['id_proveedor'], $_POST['id_tipos_prendas']);

    redirect('sscm/cpanel','refresh');
   }

   public function list(){
  
    $data['Wears'] = json_decode($this->PrendaModel->loadPrendas());
    // echo ($this->PrendaModel->loadPrendas());
    $data = array_merge($data,$this->CpanelModel->loadData());
    $this->load->view('sscm/Prendas/list', $data);
   }  

   public function viewData($id_prenda){
    $data['Wear'] = $this->PrendaModel->getWear($id_prenda);
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Clientes/wear', $data);
 }

  public function editData($id_prenda){
   $data['Wear'] = $this->WearModel->getWear($id_cliente);
   $data = array_merge($data, $this->CpanelModel->loadData());
   $this->load->view('sscm/Clientes/wearedit', $data);
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
      
    $this->WearModel->deleteData($data);

    redirect(base_url('index.php/sscm/wear/list'),'refresh');
    
  }
}