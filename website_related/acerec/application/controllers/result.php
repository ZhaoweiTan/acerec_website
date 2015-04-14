<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Result extends CI_Controller {

	public function index()
	{
        $head_data=array(
            'title'=>'Result | Academic Paper Recommendation',
            'nav_title'=>'3'
        );
        $keyword=$this->input->get("q");
        $per_page=2;
        $page=$this->input->get('page');
        if($page<=0)$page=5;
        $result=file_get_contents(
            "http://localhost:8983/solr/papers/select?q="
            .urlencode($keyword).
            "&wt=json&indent=true"
            ."&start=".($page-1)*$per_page
            ."&rows=".$per_page
        );
        //echo $result;
        $result = json_decode($result,true);
        $this->load->library('pagination');

        $config['base_url'] = ROOT_FILE.'/result?q='.$keyword;
        $config['total_rows'] = $result['response']['numFound'];
        $config['per_page'] = $per_page;
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';

        $this->pagination->initialize($config);

        $data['page_link']=$this->pagination->create_links();
        $data['result']=$result;
        $data['keyword']=$keyword;



		$this->load->view('ext/header',$head_data);
        $this->load->view('result',$data);
        $this->load->view('ext/footer',$head_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */