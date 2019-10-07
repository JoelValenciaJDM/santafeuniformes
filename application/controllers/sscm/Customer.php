<?php
class Customer extends CI_controller {  
  function __construct(){
    parent::__construct(); 
      $this->load->library('Session');
      $this->load->model('CpanelModel');
      $this->load->model('CustomerModel');
      if($this->session->user ==null)
          redirect(base_url('/'));    
   }


   public function index(){

echo $this->pagination->create_links();


  
   }

   public function newCustomer(){

    $this->load->view('sscm/Clientes/NewCustomer', $this->CpanelModel->loadData());  
   }

   public function create(){
    $this->CustomerModel->create($_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['enterprice'],
    $_POST['rfc'], $_POST['email'], $_POST['phone'] );

    redirect('sscm/cpanel','refresh');
   }

   public function listCustomer(){
    $this->load->library('pagination');

    $data['error'] = '';
    $data['customers'] = json_decode($this->CustomerModel->loadCustomers());
    
    
    $config['base_url'] = base_url().'index.php/sscm/customer/listCustomer';
    $config['total_rows'] = count($data['customers']);
    $config['per_page'] = 3;
    $this->pagination->initialize($config);

    // $data['page'] = $this->customerModel->getPagination($config['per_page'],$offset);

    $data = array_merge($data,$this->CpanelModel->loadData());
 

    $this->load->view('sscm/Clientes/ListaCustomers', $data);
   }  

   public function viewData($id_cliente){
    $data['Customer'] = $this->CustomerModel->getCustomer($id_cliente);
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Clientes/customer', $data);
 }

  public function editData($id_cliente){
   $data['Customer'] = $this->CustomerModel->getCustomer($id_cliente);
   $data = array_merge($data, $this->CpanelModel->loadData());
   $this->load->view('sscm/Clientes/customeredit', $data);
  }

  
  public function updateCustomer($id_cliente){
    $this->CustomerModel->update($_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['enterprice'],
    $_POST['rfc'], $_POST['email'], $_POST['phone'] );

   }

}
