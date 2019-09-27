<?php
class CpanelModel extends CI_Model{
	public function __construct(){

	}


	public function loadData(){
		$rs	= $this->db->query("SELECT * FROM users WHERE id_user = ".$this->session->id_user)->row();
		$rightsRS = $this->db->query("
			SELECT r.name FROM 
				users u JOIN users_rights ur
					ON u.id_user = ur.id_user
				JOIN rights r
					ON ur.id_right = r.id_right
				WHERE u.id_user = $rs->id_user
			");
			$rights = array();
			foreach ($rightsRS->result() as $q) {
				array_push($rights,$q->name);
		}

			$data = $this->session->set_userdata(array(
				'id_user' 		=> $rs->id_user,
				'username' 		=> $rs->username,
				'first_name'	=> $rs->first_name,
				'last_name' 	=> $rs->last_name,
				'mail' 			=> $rs->mail,
				'rights'		=> $rights
			));
			return array(
				'id_user'		=> $this->session->id_user,
				'username'		=> $this->session->username,
				'first_name'	=> $this->session->first_name,
				'last_name'		=> $this->session->last_name,
				'mail'			=> $this->session->mail,
				'rights'		=> $this->session->rights
			);

}
}