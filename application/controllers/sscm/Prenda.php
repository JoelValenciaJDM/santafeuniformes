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
    $this->PrendaModel->create($_POST['name'],$_POST['gener'],$_POST['id_proveedor'], $_POST['id_tipos_prendas'],$_POST['tallaje']);
    $id_prenda = json_decode($this->PrendaModel->getidPrenda());
    // $idPrenda;
    // var_dump ($id_prenda);
    foreach ($id_prenda as $idp):
      $idPrenda= $idp->id_lastPrenda;
      $id_tipo_uso = 1;
    endforeach;
    echo $_POST['tallaje'];
    $this->PrendaModel->createTallas($_POST['tallaje'], $idPrenda, $id_tipo_uso);
    
    redirect('sscm/prenda/list','refresh');
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
    // var_dump ($this->PrendaModel->getWear($id_prenda));
    $this->load->view('sscm/Prendas/prenda', $data);
 }

  public function editData($id_prenda){
   $data['tallas'] = json_decode($this->PrendaModel->getTallas($id_prenda));
   $data['proveedores'] = json_decode($this->PrendaModel->loadProveedores());
   $data['forros'] = json_decode($this->PrendaModel->getPrendaTipoUsoForro($id_prenda));
   $data['secundarias'] = json_decode($this->PrendaModel->getPrendaTipoUsoSecundaria($id_prenda));
   $data['terciarias'] = json_decode($this->PrendaModel->getPrendaTipoUsoTerciaria($id_prenda));
   $data['cuartas'] = json_decode($this->PrendaModel->getPrendaTipoUsoCuarta($id_prenda));
  //  var_dump($data['proveedores']);
   $data['type_prendas'] =json_decode($this->PrendaModel->loadTipoPrenda());
   $data['Wear'] = $this->PrendaModel->getWear($id_prenda);
   $data['maxTipoUso']= $this->PrendaModel->maxTipoUso($id_prenda);
   $data = array_merge($data, $this->CpanelModel->loadData());
   $this->load->view('sscm/Prendas/prendaedit', $data);
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
      
    $this->PrendaModel->deleteData($data);

    redirect(base_url('index.php/sscm/wear/list'),'refresh');
    
  }
}