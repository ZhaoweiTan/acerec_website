<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{
    public function index(){
        $head_data=array(
            'title'=>'Login',
            'nav_title'=>'5'
        );
        $this->load->view('ext/header',$head_data);
        $this->load->view('login',$head_data);
        $this->load->view('ext/footer',$head_data);

    }


}