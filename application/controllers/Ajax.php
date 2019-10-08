<?php

class Ajax extends CI_Controller {

    public function __construct () {
        // if($this->session->user ==null)
        //     redirect(base_url('/'));
        parent::__construct();

        $this->load->model('CustomerModel');
    }
    public function index(){
        
    }
    public function updateCustomer() {

         $data = array();
         $dato = $_POST['data']; 
         parse_str($dato, $data);
         var_dump ($data);
         
         
         $this->CustomerModel->update($data);
        //  $this->customerModel->update($data);

     }

}