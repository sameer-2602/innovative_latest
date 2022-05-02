<?php

class Managementor extends CI_Controller {
    public $role_id = 2;
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('role_model');
    }

    public function index() {
        $data['page_name'] = 'managementor/index';
        $data['slug'] = 'manage-mentor ';
        $data['page_heading'] = "manage Mentor";
        $id = 2;
        $data['result'] = $this->user_model->get($this->role_id);
        $this->load->view('include/template', $data);
    }

    public function add() {
        if (isset($_POST['sub'])) {
            $this->user_model->add($_POST);
            redirect('managementor/index');
        } else {
            $data['page_name'] = 'managementor/add';
            $data['page_heading'] = 'ADD MENTOR';
            $data['slug'] = 'manage-mentor / add /';
            $data['result'] = $this->user_model->get($this->role_id);
            $this->load->view('include/template', $data);
        }
    }

    public function edit($user_id = "") {
        if (isset($_POST['sub'])) {
            $this->user_model->update($_POST);
            redirect('managementor/index');
        } else {
            $data['page_name'] = 'managementor/edit';
            $data['page_heading'] = 'EDIT MENTOR DETAILS';
            $data['slug'] = 'manage-mentor / edit /';
            $data['row'] = $this->user_model->get_single($user_id);
            $this->load->view('include/template', $data);
        }
    }

    public function delete($user_id) {
        $this->user_model->delete($user_id);
        redirect('managementor/index');
    }

}

?>