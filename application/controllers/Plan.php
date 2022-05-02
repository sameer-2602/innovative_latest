<?php 

class Plan extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('plans_model');
    }

    public function index(){
    	$data['page_slug'] = 'Subscription plans';
    	$data['plan'] = $this->plans_model->get();
   		$this->load->view('plans/index',$data);
    }

}

?>