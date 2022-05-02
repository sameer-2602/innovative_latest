<?php 

class Dashboard extends CI_Controller{
    public function index(){
        $data['page_name']='dashboard/index';
        $data['slug']='dashboard';
        $this->load->view('include/template',$data);
    }
}


?>