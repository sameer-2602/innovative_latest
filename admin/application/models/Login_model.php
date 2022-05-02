<?php

class Login_model extends CI_Model{
     
    public function auth($username,$passsword){
         return $this->db->get_where('user', array('email' => $username,'password'=>$passsword))->row();
	}
	public function update($data){
	  $this->db->set('is_online', 1);
      $this->db->where('user_id',$data->user_id);
      $this->db->update('user');
	}
	public function is_logout($data){
	  $this->db->set('is_online', 0);
      $this->db->where('user_id',$data->user_id);
      $this->db->update('user');
	}
}