<?php
class Maquila extends CI_controller {  
  function __construct(){
    parent::__construct(); 
      $this->load->library('Session');
      $this->load->model('CpanelModel');
      $this->load->model('MaquilaModel');
      if($this->session->user ==null)
          redirect(base_url('/'));    
   }


   public function index(){

echo $this->pagination->create_links();


  
   }

   public function newMaquila(){

    $this->load->view('sscm/Maquilas/newmaquila', $this->CpanelModel->loadData());  
   }

   public function create(){
    $this->MaquilaModel->create($_POST['apodo'],$_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['address'],
    $_POST['Suburb'], $_POST['lat'],$_POST['lng'], $_POST['celphone'], $_POST['phone'], $_POST['cp']  );

    redirect('sscm/cpanel','refresh');
   }

   public function list(){
    $this->load->library('pagination');

    $data['error'] = '';
    $data['maquilas'] = json_decode($this->MaquilaModel->loadMaquilas());
    
  

    // $data['page'] = $this->customerModel->getPagination($config['per_page'],$offset);

    $data = array_merge($data,$this->CpanelModel->loadData());
 

    $this->load->view('sscm/Maquilas/list', $data);
   }  

   public function viewData($id_maquila){
    $data['Maquila'] = $this->MaquilaModel->getMaquila($id_maquila);
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Maquilas/maquila', $data);
 }

  public function editData($id_maquila){
    $data['Maquila'] = $this->MaquilaModel->getMaquila($id_maquila);
    $data = array_merge($data, $this->CpanelModel->loadData());
   $this->load->view('sscm/Maquilas/maquilaedit', $data);
  }

  
  // public function updateCustomer($id_cliente){
  //   $this->CustomerModel->update($_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['enterprice'],
  //   $_POST['rfc'], $_POST['email'], $_POST['phone'] );

  //  }

  public function deleteData(){
    $data = array();
    parse_str($_POST['data'], $data);
    // var_dump ($data);
      
    $this->MaquilaModel->deleteData($data);

    redirect(base_url('index.php/sscm/maquilas/list'),'refresh');
    
  }
}