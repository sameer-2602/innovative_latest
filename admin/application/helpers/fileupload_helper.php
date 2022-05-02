<?php

function fileUpload($fileName, $upload_path, $redirect_on, $post_field_name, $allowed_types = "*") {
    $CI = & get_instance();
//    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = $allowed_types;
	$config['upload_path']   = './uploads/';
    $CI->load->library('upload', $config);
    if (!$CI->upload->do_upload($fileName)) {
        $error = array('error' => $CI->upload->display_errors());
        $CI->session->set_flashdata('error', $error['error']);
        // redirect($redirect_on);
    }
    $data = array('upload_data' => $CI->upload->data());
    $_POST[$post_field_name] = $data['upload_data']['file_name'];
}
