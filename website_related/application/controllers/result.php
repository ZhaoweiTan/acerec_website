<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$ids=array();
function dfs($a){
    global $ids;
    if(empty($a))return array();
    $a['label']=$a['name'];
    unset($a['name']);
    unset($a['data']);
    $a['id']=findNum($a['id']);
    $ids[$a['label']]=$a['id'];
    if(!empty($a['children']))
        foreach($a['children'] as &$or)
            $or=dfs($or);
        else
            unset($a['children']);
    return $a;
}
function findNum($str=''){
    $str=trim($str);
    if(empty($str)){return '';}
    $result='';
    for($i=0;$i<strlen($str);$i++){
        if(is_numeric($str[$i])){
            $result.=$str[$i];
        }
    }
    return $result;
}


class Result extends CI_Controller {
	public function index()
	{
        //global $ids;
        //$s=file_get_contents("c:/a.js");
        //$k=json_decode($s,true);
        //var_dump($k);
        //

        //$b=dfs($k);
        //file_put_contents("c:/c.js",json_encode($ids));

        $ids=file_get_contents( __DIR__."/../../topic-tree/tree/ids.json");
        $ids=json_decode($ids,true);

        $head_data=array(
            'title'=>'Result | Academic Paper Recommendation',
            'nav_title'=>'3'
        );

        $keyword=$this->input->get("q");

        //$keyword = str_replace(' ','',$keyword);

        $per_page=5;
        $page=$this->input->get('page');
        if($page<=0){$page=1;}
        $result=file_get_contents(
            "http://localhost:8983/solr/papers/select?q="
            .urlencode($keyword).
            "&fq=NOT+abstract%3Dabstract&fq=NOT+ieeeTerms%3DNone&wt=json&indent=true"
        );
        $result = json_decode($result,true);
        $author=true;

        if($result['response']['numFound']==0)
        {
            $result=file_get_contents(
                "http://localhost:8983/solr/papers/select?q="
                .urlencode($keyword)."~1".
                "&fq=NOT+abstract%3Dabstract&fq=NOT+ieeeTerms%3DNone&wt=json&indent=true"
            );
            //echo $result;
            $result = json_decode($result,true);
        }



        /////////////////////////////result for author page///////////////////////////////////
        $result_for_author_bool = false;
        $keywordAu = $keyword;
        $keywordAu.trim(" ");
        $keywordAu=preg_replace("/\s+/",' && ',$keywordAu);
        $result_for_author=file_get_contents(
            "http://202.120.36.137:8983/solr/authors/select?q=Name:"
            .urlencode($keywordAu)."~1".
            "&wt=json&indent=true"
        );
        //echo $result_for_author;
        $result_for_author = json_decode($result_for_author,true);
        if($result_for_author['response']['numFound'] > 0)
        {
            $result_for_author_bool = true;
        }
        ////////////////////////////result for author page end/////////////////////////////////

        /////////////////////////////result for conference page///////////////////////////////////
        $result_for_conference_bool = false;
        $result_for_conference=file_get_contents(
            "http://localhost:8983/solr/conference/select?q=ShortName:"
            .urlencode($keywordAu)."~1".
            "&wt=json&indent=true"
        );
        $result_for_conference = json_decode($result_for_conference,true);
        if($result_for_conference['response']['numFound'] > 0)
        {
            $result_for_conference_bool = true;
        }
        ////////////////////////////result for conference page end/////////////////////////////////



        $this->load->library('pagination');

        $config['base_url'] = ROOT_FILE.'/result?q='.$keyword;
        $config['total_rows'] = $result['response']['numFound'];
        $config['per_page'] = $per_page;
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';

        $this->pagination->initialize($config);

        $data['page_link']=$this->pagination->create_links();
        if($result_for_author_bool==true){
            $data['result_for_author']=$result_for_author;
            $data['keyword']=$keyword;}//result data for author page
        if($result_for_conference_bool==true){
            $data['result_for_conference']=$result_for_conference;}
        $data['result']=$result;
        $data['keyword']=$keyword;
        $data['ids']=$ids;


        if($result_for_author_bool==false)
        {
            $this->load->view('ext/header',$head_data);
            $this->load->view('result',$data);
            $this->load->view('ext/footer',$head_data);
        }
        else
        {
            $this->load->view('ext/header',$head_data);
            $this->load->view('result',$data);
            $this->load->view('ext/footer',$head_data);
        }
	}
}


/* End of file welcome.php */
/* Location: .r/application/controllers/welcome.php */