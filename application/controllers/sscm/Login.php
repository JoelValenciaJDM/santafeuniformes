<?php
class Login extends CI_controller {  
   
    
    function __construct(){
     parent::__construct();    
      $this->load->helper('form');
      $this->load->model('CpanelModel');
      
            
        
    }
    
    
    public function index(){

		if(empty($this->session->id_user)){
            $this->load->view('login');
            $this->loginfun();

		}else{
			$this->load->view('cpanel');
		}

       
    }


    public function loginfun(){
        $this->db->empty_table('user_temp');
        if(isset($_POST['password'])){
            $this->load->model('User_model');

            if($this->User_model->login($_POST['username'],md5($_POST['password']))){
                $rs	= $this->User_model->auth($_POST['username']);
                $this->session->id_user = $rs->id_user;
                $this->User_model->temp($_POST['username']);
                redirect(base_url('index.php/sscm/Cpanel'));
                //$this->load->view('cpanel',  $this->CpanelModel->loadData());

                
            }else{ 
                redirect(base_url('index.php/sscm/login'),'refresh');
            
              
            }
            
        }
    }

    public function logout(){
		$this->session->set_userdata(array());
		$this->session->id_user = null;
		
        redirect(base_url('index.php/sscm/login'),'refresh');
        
	}
}

