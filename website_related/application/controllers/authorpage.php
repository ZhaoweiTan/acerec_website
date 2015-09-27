<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Authorpage extends CI_Controller {

public function index()
{
    $head_data=array();
	
	$au_id=$this->input->get('id');
    $head_data['title'] = $au_id." | Academic Paper Recommendation";//"xinbing wang";
	$data['name']=$au_id;
	$this->load->view('ext/header',$head_data);
    $this->load->view('authorpage',$data);
	$this->load->view('ext/footer');
	/*$author_id = $_GET['id'];
$mysqli = new mysqli("localhost", "acemap", "xwang8", "mag");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$author_results = $mysqli->query("SELECT * FROM PaperAuthorAffiliationsIEEE WHERE AuthorID = " . urlencode($author_id) ." ORDER BY ShortName DESC");
$result3 = $mysqli->query("SELECT * FROM author WHERE Name LIKE \"" . urlencode($keywordajax) ."%\"");
*/

//wcq注：错误的使用mysql
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */