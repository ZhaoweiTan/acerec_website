<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register extends CI_Controller{
    public function index(){
        $head_data=array(
            'title'=>'Registration'
        );
        $this->load->view('ext/header',$head_data);
        $this->load->view('register',$head_data);
        $this->load->view('ext/footer',$head_data);

    }

}