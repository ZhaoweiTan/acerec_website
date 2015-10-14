<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class logResult extends CI_Controller{


    public function index(){
        $head_data=array(
            'title'=>'Login Result'
        );
        $this->load->view('ext/header',$head_data);
        //LOGIN


        $account=$_POST['username'];
        $password=$_POST['password'];

        $this->load->database();
        $query = $this->db->query("SELECT * FROM users WHERE account='$account'");

        if($query->result()){
            if($query->row()->password==$password){
                $_SESSION['log_status']=2;//Logged successfully!
                $_SESSION['username']=$account;
            }
            else{
                $_SESSION['log_status']=1;

            }
        }
        else{
            $_SESSION['log_status']=0;
        }
        ///////////////////////////////

        //index


        $this->load->view('logResult',$head_data);
        $this->load->view('ext/footer',$head_data);

    }

    

}