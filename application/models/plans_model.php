<?php
class Plans_model extends CI_model{
    
    public function get(){
    return  $this->db->get('package')->result_array();
    }

    public function getMaxEndDate($user_id){
        $this->db->select('max(ending_on) as max_end_date');
        return $this->db->get_where('sub_status',['user_id'=>$user_id])->row_array()['max_end_date'];
    }
    public function getPackage($package_id){
        return $this->db->get_where('package',['id'=>$package_id])->row_array()['type'];
    }
    public function add($data){
        $this->db->insert('sub_status',$data);
    }
}



?>