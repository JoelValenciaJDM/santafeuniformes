<?php
class Pedido extends CI_controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->library('Session');
    $this->load->model('CpanelModel');
    $this->load->model('PedidoModel');
    if ($this->session->user == null)
      redirect(base_url('/'));
  }


  public function index()
  {

    echo $this->pagination->create_links();
  }

  public function newPedido()
  {
    $data = array(); 
    $data['customers']=json_decode($this->PedidoModel->loadCustomers());
    $data['sellers']=json_decode($this->PedidoModel->loadSellers());
    $data['tipoprendas']=json_decode($this->PedidoModel->loadTipoPrenda());
    $data['tipotelas']=json_decode($this->PedidoModel->loadTelas());
    $data['colors']=json_decode($this->PedidoModel->loadColors());
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Pedidos/NewPedido',$data);
  }

  public function create()
  {
    $this->CustomerModel->create(
      $_POST['name'],
      $_POST['lastname'],
      $_POST['second_lastname'],
      $_POST['enterprice'],
      $_POST['rfc'],
      $_POST['email'],
      $_POST['phone']
    );

    redirect('sscm/cpanel', 'refresh');
  }

  public function list()
  {
    $this->load->library('pagination');

    $data['error'] = '';
    $data['customers'] = json_decode($this->CustomerModel->loadCustomers());


    $config['base_url'] = base_url() . 'index.php/sscm/customer/list';
    $config['total_rows'] = count($data['customers']);
    $config['per_page'] = 3;
    $this->pagination->initialize($config);

    // $data['page'] = $this->customerModel->getPagination($config['per_page'],$offset);

    $data = array_merge($data, $this->CpanelModel->loadData());


    $this->load->view('sscm/Pedidos/list', $data);
  }

  public function viewData($id_cliente)
  {
    $data['Customer'] = $this->CustomerModel->getCustomer($id_cliente);
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Pedidos/customer', $data);
  }

  public function editData($id_cliente)
  {
    $data['Customer'] = $this->CustomerModel->getCustomer($id_cliente);
    $data = array_merge($data, $this->CpanelModel->loadData());
    $this->load->view('sscm/Pedidos/customeredit', $data);
  }


  // public function updateCustomer($id_cliente){
  //   $this->CustomerModel->update($_POST['name'],$_POST['lastname'],$_POST['second_lastname'], $_POST['enterprice'],
  //   $_POST['rfc'], $_POST['email'], $_POST['phone'] );

  //  }

  public function deleteData()
  {
    $data = array();
    $dato = $_POST['data'];
    echo $dato;
    parse_str($dato, $data);
    // var_dump ($data);

    $this->CustomerModel->deleteData($data);

    redirect(base_url('index.php/sscm/customer/list'), 'refresh');
  }
}
