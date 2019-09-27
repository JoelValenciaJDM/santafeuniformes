<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public $variable;
    
    function __construct(){  
        
               
           
       }


    public function login($username, $password){
        
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $q= $this->db->get('users');

            if($q->num_rows()==1){
                $this->session->user=$q;
                return true;
            }else{
              return false;  
            }
            }
     public function signup ($username, $password, $email, $name, $lastname_father, $lastname_mother, $select ){
        $data = array(   
        'username'=> $username,
        'password'=>md5($password),
        'email'=> $email,
        'name'=> $name,
        'father_lastname' => $lastname_father,
        'mother_lastname' => $lastname_mother,
        'tipousuario'=> $select);
        $this->db->insert('usuarios',$data);
        
     }  
     public function temp($username){
        $data=array(
            'username'=>$username); 
        $this->db->insert('user_temp',$data);
     }
     public function verificar_existencia_usuario($username){
        $this->db->where('username',$username);
        $q= $this->db->get('usuarios');

        if($q->num_rows()==1){
            
            return true;
        }
     } 
     public function verificar_existencia_email($email){
        $this->db->where('email',$email);
        $q= $this->db->get('usuarios');

        if($q->num_rows()==1){
            
            return true;
        }
     }

     public function auth($username){
		/**
		 * Gets the user and its fields
		 */
		return $this->db->query("SELECT * FROM users WHERE username = '$username'")->row();
	}

     
        
    //  $username = $this->input->post('username');
    //  $password = $this->input->post('password');
}

/* End of file ModelName.php */

