<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $head_data=array(
            'title'=>'Contact Us | Academic Paper Recommendation',
            'nav_title'=>'1'
        );

        $this->load->view('ext/header',$head_data);
        $this->load->view('contact',$head_data);
        $this->load->view('ext/footer',$head_data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */