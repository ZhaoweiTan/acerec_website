<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class logout extends CI_Controller{
    public function index(){
        $head_data=array(
            'title'=>'Logout',
            'nav_title'=>'5'
        );
        $this->load->view('ext/header',$head_data);
        $this->load->view('logout',$head_data);
        $this->load->view('ext/footer',$head_data);

    }


}