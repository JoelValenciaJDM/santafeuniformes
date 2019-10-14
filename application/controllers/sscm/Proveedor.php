<?php
class Proveedor extends CI_controller {  
  function __construct(){
    parent::__construct(); 
      $this->load->library('Session');
      $this->load->model('CpanelModel');
      $this->load->model('ProveedorModel');
      if($this->session->user ==null)
          redirect(base_url('/'));    
   }


   public function index(){

echo $this->pagination->create_links();


  
   }

   public function newProveedor(){

    $this->load->view('sscm/Proveedores/newproveedor', $this->CpanelModel->loadData());  
   }

   public function create(){
    $this->ProveedorModel->create($_POST['name'],$_POST['rs'],$_POST['rfc'],$_POST['present'], $_POST['address'],
    $_POST['suburb'], $_POST['state'],$_POST['city'], $_POST['cp'], $_POST['Phone1'], $_POST['Phone2']   );

    redirect('sscm/cpanel','refresh');
   }

   public function list(){
    $this->load->library('pagination');

    $data['error'] = '';
    $data['Proveedores'] = json_decode($this->ProveedorModel->loadProveedores());
    
  

    // $data['page'] = $this->customerModel->getPagination($config['per_page'],$offset);

    $data = array_merge($data,$this->CpanelModel->loadData());
 

    $this->load->view('sscm/Proveedores/list', $data);
   }  

   public function viewData($id_proveedor){
    $data['Proveedor'] = $this->ProveedorModel->getProveedor($id_proveedor);
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Proveedores/proveedor', $data);
 }

  public function editData($id_proveedor){
    $data['Proveedor'] = $this->ProveedorModel->getProveedor($id_proveedor);
    $data = array_merge($data, $this->CpanelModel->loadData());
   $this->load->view('sscm/Proveedores/proveedoredit', $data);
  }

  
  // public function updateCustomer($id_cliente){
  //   $this->CustomerModel->update($_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['enterprice'],
  //   $_POST['rfc'], $_POST['email'], $_POST['phone'] );

  //  }

  public function deleteData(){
    $data = array();
    parse_str($_POST['data'], $data);
    // var_dump ($data);
      
    $this->ProveedorModel->deleteData($data);

    redirect(base_url('index.php/sscm/proveedores/list'),'refresh');
    
  }
}