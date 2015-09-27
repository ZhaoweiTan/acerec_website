<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Conference extends CI_Controller {

    public function index()
    {
        $head_data=array();
		$con_id=$this->input->get('id');
		$head_data['title'] = $con_id." | Academic Paper Recommendation";//
		$data['name'] = $con_id;
		$this->load->view('ext/header',$head_data);
        $this->load->view('conferencepage',$data);
		$this->load->view('ext/footer');
    }
}