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
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/7/29
 * Time: 20:38
 */
class Author extends CI_Controller{
    public  function index()
    {
        $ids = file_get_contents(__DIR__ . "/../../topic-tree/tree/ids.json");
        $ids = json_decode($ids, true);

        $head_data = array(
            'title' => 'Author | Academic Paper Recommendation',
            'nav_title' => '3'
        );

        $keyword = $this->input->get("q");

        //$keyword = str_replace(' ','',$keyword);

        $per_page = 5;
        $page = $this->input->get('page');
        if ($page <= 0) {
            $page = 1;
        }
        $result = file_get_contents(
            "http://localhost:8080/solr/papers/select?q=author:"
            . urlencode($keyword) .
            "&fq=NOT+abstract%3Dabstract&fq=NOT+ieeeTerms%3DNone&wt=json&indent=true"
            . "&start=" . ($page - 1) * $per_page
            . "&rows=" . $per_page
        );
        //echo $result;
        $result = json_decode($result, true);
        $author = true;

        $result_for_author_bool = false;
        if ($result['response']['numFound'] != 0) {
            $result_for_author_bool = true;
            $result_for_author = file_get_contents(
                "http://localhost:8080/solr/papers/select?q=author:"
                . urlencode($keyword) .
                "&fq=NOT+abstract%3Dabstract&fq=NOT+ieeeTerms%3DNone&wt=json&indent=true"
            );
            //echo $result_for_author;
            $result_for_author = json_decode($result_for_author, true);
        }
        if($result['response']['numFound']==0)
        {
            $result=file_get_contents(
                "http://localhost:8080/solr/papers/select?q=author:"
                .urlencode($keyword)."~1".
                "&fq=NOT+abstract%3Dabstract&fq=NOT+ieeeTerms%3DNone&wt=json&indent=true"
                ."&start=".($page-1)*$per_page
                ."&rows=".$per_page
            );
            //echo $result;
            $result = json_decode($result,true);
            $author=true;

            if($result['response']['numFound']==0)
            {
                $result = file_get_contents(
                    "http://localhost:8080/solr/papers/select?q="
                    . urlencode($keyword) .
                    "&fq=NOT+abstract%3Dabstract&fq=NOT+ieeeTerms%3DNone&wt=json&indent=true"
                    . "&start=" . ($page - 1) * $per_page
                    . "&rows=" . $per_page
                );
                //echo $result;
                $result = json_decode($result, true);
                $author = false;
            }

        };

        $this->load->library('pagination');

        $config['base_url'] = ROOT_FILE.'/author?q='.$keyword;
        $config['total_rows'] = $result['response']['numFound'];
        $config['per_page'] = $per_page;
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';

        $this->pagination->initialize($config);

        $data['page_link']=$this->pagination->create_links();
        if($result_for_author_bool==true){$data['result_for_author']=$result_for_author;$data['keyword']=$keyword;}//result data for author page
        else{$data['result']=$result;}
        $data['keyword']=$keyword;
        $data['ids']=$ids;
        $data['author']=$author;

        if($result_for_author_bool==false)
        {
            $this->load->view('ext/header',$head_data);
            $this->load->view('result',$data);
            $this->load->view('ext/footer',$head_data);
        }
        else
        {
            $this->load->view('authorpage',$data);
        }
    }
}