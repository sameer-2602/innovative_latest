<?php

class Mentors_list extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('user_model');
        $this->load->model('courseusrmap_model');
    }
/*
    public function index() {
        $data['mentor'] = $this->user_model->getmentors();
        $data['page_name'] = 'home/mentor';
        $this->load->view('template/index', $data);
    }*/

    public function mentorlist() {
        if (isset($_POST['course_id'])) {
            $data['mentor'] = $this->courseusrmap_model->getByCourse($_POST['course_id']);
            $data['page_name'] = 'home/mentorlist';
            $this->load->view('template/index', $data);
        }
    }

}

?>