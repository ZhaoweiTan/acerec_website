<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conf extends CI_Controller {

    public function index()
    {
        $head_data=array(
            'title'=>'',
            'nav_title'=>'0'
        );

        $this->load->view('ext/header',$head_data);
        $this->load->view('conf',$head_data);
        $this->load->view('ext/footer',$head_data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */