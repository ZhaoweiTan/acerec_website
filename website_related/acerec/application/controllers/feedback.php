<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {

	public function index()
	{
        $head_data=array(
            'title'=>'Feedback | Academic Paper Recommendation',
            'nav_title'=>'1'
        );

		$this->load->view('ext/header',$head_data);
        $this->load->view('feedback',$head_data);
        $this->load->view('ext/footer',$head_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */