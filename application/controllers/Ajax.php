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

         
         
         
         $this->CustomerModel->update($data);
        //  $this->customerModel->update($data);

     }

}