<?php

class Message extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('message_model');
        $this->load->model('user_model');
    }

    public function index($user_id) {
        $data['message'] = $this->message_model->getByuser(SENDER,$user_id, $this->session->userdata['user_id']);
        $data['chat_with'] = $this->user_model->get($user_id);
        $data['page_name'] = 'home/user_chat';
        $data['slug'] = 'chat';
        $data['receiver_id'] = $user_id;
//        echo "<pre>";
//        print_r($data['chat_with']['user_id']);
//        echo "</pre>";
//        exit();
        $this->load->view('home/user_chat',$data);
    }
    public function send(){
        
        if(isset($_POST['message'])){
            $_POST['sender_id'] = $this->session->userdata['user_id'];
            $this->message_model->add($_POST);
            redirect('message/index/'.$_POST['reciver_id']);
        }
    }

}
