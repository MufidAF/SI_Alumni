<?php

function check_already_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_alm');
    if($user_session){
        redirect('dasboard');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_alm');
    if(!$user_session){
        redirect('auth');
    }
}