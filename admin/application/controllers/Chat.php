<?php

class Chat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('message_model');
        $this->load->model('user_model');
    }

    public function index() {
        $user_id = $this->session->userdata['user_data']->user_id;
        $is_online = $this->session->userdata['user_data']->is_online;
        $data['message'] = $this->message_model->getMessage($user_id);
        $data['chat_with'] = $this->user_model->get($user_id);
        $data['page_name'] = 'chat/message';
        $data['slug'] = 'chat';
        $data['receiver_id'] = $user_id;
        $this->load->view('include/template', $data);
    }

    public function chat($receiver_id) {
        $data['message'] = $this->message_model->getByuser(SENDER, $receiver_id, $this->session->userdata['user_data']->user_id);
        $data['chat_with'] = $this->user_model->get($receiver_id)[0];
        $data['page_name'] = 'home/user_chat';
        $data['slug'] = 'chat';
        $data['receiver_id'] = $receiver_id;
        $this->load->view('chat/index', $data);
    }

    public function send() {

        if (isset($_POST['message'])) {
            $_POST['sender_id'] = $this->session->userdata['user_data']->user_id;
            $this->message_model->add($_POST);
            redirect('chat/chat/' . $_POST['reciver_id']);
        }
    }

}
